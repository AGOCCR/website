<?php require_once realpath(__DIR__ . '/../db_php/connection.php');

$categoria = 0;
$precio = '';
$barrio = '';
$page = 0;
$number_per_page = 15;

if (isset($_GET['barrio']) && $_GET['barrio'] != '') $barrio = $_GET['barrio'];

if (isset($_GET['page']) && $_GET['page'] != '') {
  $number = intval($_GET['page']);
  if (is_int($number)) $page = $number - 1;
}

if (isset($_GET['categoria']) && intval($_GET['categoria']) > 0)
  $categoria = intval($_GET['categoria']);

$conn = getConn();

$sentenceQuery =
  "SELECT R.* FROM restaurant as R 
    *precio* 
    WHERE 1 = 1
    *search*
    *categoria*
    *precio*
    LIMIT :limit_page OFFSET :skip_page;
  ";

if (isset($_GET['precio']) && ($_GET['precio'] == 'menor' || $_GET['precio'] == 'mayor')) $precio = $_GET['precio'];

$sentenceQuery =
  replace_string(
    $sentenceQuery,
    '*precio*',
    [
      $precio != '' ? "INNER JOIN (
        SELECT ID_Resto, AVG(Precio) AS Total FROM menu
        GROUP BY ID_Resto
        ) AS menu_total
        ON menu_total.ID_Resto = R.ID_Resto" : '',
      $precio != '' ?
        "ORDER BY menu_total.Total " . ($precio == 'menor' ? 'ASC' : 'DESC') : ''
    ]
  );

$sentenceQuery =
  replace_string(
    $sentenceQuery,
    '*search*',
    [
      $barrio !== '' ? "AND R.Direccion LIKE :barrio" : '',
    ]
  );

$sentenceQuery =
  replace_string(
    $sentenceQuery,
    '*categoria*',
    [
      $categoria > 0 ? 'AND R.ID_Categoria = :categoria' : ''
    ]
  );


$query = $conn->prepare($sentenceQuery);

if ($barrio !== '') {
  $query->bindValue(':barrio', '%' . $barrio . '%');
}

if ($categoria > 0) {
  $query->bindParam(':categoria', $categoria);
}

$query->bindValue(':skip_page', $page * $number_per_page, PDO::PARAM_INT);
$query->bindValue(':limit_page', $number_per_page, PDO::PARAM_INT);

$query->execute();

$results = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(["results" => $results, "is_end" => count($results) !== $number_per_page]);

function replace_string($string, $patron, $replaces)
{
  $contador = 0;

  return preg_replace_callback('/' . preg_quote($patron, '/') . '/', function () use (&$contador, &$replaces) {
    return $replaces[$contador++];
  }, $string);
}
