<?php
session_start();
require_once "conexion.php";

if($_REQUEST_METHOD === "GET") {
    $usuario = trim($_POST["usuario"]);
    $contrasena = trim($_POST["contrasena"]);

$sql = "SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':usuario' => $usuario
]);

 
}

?>