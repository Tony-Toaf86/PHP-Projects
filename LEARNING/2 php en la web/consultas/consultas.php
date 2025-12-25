<?php
require_once "conexion.php";

$idProducto = 6;

$sql = "SELECT * FROM productos WHERE idProducto = :idProducto";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':idProducto' => $idProducto
]);

$producto = $stmt->fetchAll();



?>