<?php 
require_once "Producto.php";
$lapiz = new Producto();

$lapiz->nombre = "Bic";

$lapiz->asignaPrecio(45);

$lapiz->mostraDatos();





?>