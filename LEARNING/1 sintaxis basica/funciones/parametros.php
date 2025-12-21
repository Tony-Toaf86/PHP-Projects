<?php
//creasion de funciones con parametros  


function saludar($nombre ) {
    echo "Hola, $nombre";
}

saludar("tony");



echo "<br>--------------------<br>";

function saludando($saludo){
    return $saludo . " juan como te  va el dia de hoy?";
}

$saludo = saludando("buenos dias");
echo $saludo;

?>