<?php
$host = 'localhost';
$db = 'agoc';
$user = 'root';
$password = 'Word12ggr$GOW!%';


try {
  $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Error de conexión: " . $e->getMessage());
}

function getConn()
{
  return $GLOBALS["pdo"];
}
