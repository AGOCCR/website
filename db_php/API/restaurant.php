<?php require_once realpath(__DIR__ . '/../connection.php');

$barrio = '';
$page = 0;
$number_per_page = 10;

if (isset($_GET['barrio']) && $_GET['barrio'] != '') $barrio = $_GET['barrio'];

if (isset($_GET['page']) && $_GET['page'] != '') {
  $number = intval($_GET['page']);
  if (is_int($number)) $page = $number - 1;
}

$conn = getConn();

$query = $conn->prepare(
  "SELECT * FROM restaurant AS r WHERE r.Direccion LIKE :barrio LIMIT :limit_page OFFSET :skip_page;"
);

$query->bindValue(':barrio', '%' . $barrio . '%');
$query->bindValue(':skip_page', $page * $number_per_page, PDO::PARAM_INT);
$query->bindValue(':limit_page', $number_per_page, PDO::PARAM_INT);

$query->execute();

$results = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(["results" => $results, "is_end" => count($results) !== $number_per_page]);
