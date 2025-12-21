<?php
//uso del bublce foreach en PHP


$colores = array("rojo", "verde", "azul", "amarillo");

foreach ($colores as $color){
    echo "El color es: " . $color . "<br>";

}
echo "------------------------<br>";

$alumnos = array (
    "Juan" => 20,
    "María" => 22,
    "Pedro" => 19,
    "Ana" => 21
);



foreach ($alumnos as $identificador => $anios) {
    echo "el alumno se llama: " . $identificador . " y tiene " . $anios . " años.<br>";

}

?>
