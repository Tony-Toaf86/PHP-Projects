<?php
include_once "conexion.php";

$nombre = $_POST['proname'];
$cantidad = $_POST['amount'];

if(empty($nombre) || empty($cantidad)) {
    die("El nombre y la cantidad son obligatorios.");
}

$stmt = $conexion->prepare("INSERT INTO product (proname, amount) VALUES (?, ?)");
$stmt->bind_param("si", $nombre, $cantidad);

if($stmt->execute()) {
    echo "producto insertado correctamente";
} else {
    echo "Error al insertar: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>
