<?php

$host = "localhost";
$db = "inventario";
$dbuser = "root";
$pass = "";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";



try {
    $pdo = new PDO($dsn, $dbuser, $pass,[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
    ]);
    
    header("Location: ya_conectado.php"); //redirigendo

} catch (PDOException $e) {
    echo "error de conexion";
}


?>