<?php require_once realpath(__DIR__ . '/../db_php/connection.php');

$conn = getConn();

$query = $conn->query("SELECT * FROM categorias");

echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));
