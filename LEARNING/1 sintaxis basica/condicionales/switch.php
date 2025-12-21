<?php
//uso del switch en php

$dia = "miercoles";

switch ($dia) {
    case "lunes";
        echo "Hoy es lunes";
        break;
    case "martes";
        echo "Hoy es martes";
    break;

    default:
        echo "no se encuentra el dia";
        break;
}

?>