<?php
require_once "consultas.php";

foreach ($producto as $valores) {
    echo "Id: " . $valores['idProducto'] . "<br>";
    echo "Nombre: " . $valores['nombre'] . "<br>";
    echo "Fecha Registro: ". $valores['fechaRegistro'] . "<br>";
}

?>