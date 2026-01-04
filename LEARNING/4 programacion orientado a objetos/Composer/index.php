<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Productos\Producto;


$buscando = new Producto();
$resultado = $buscando->buscarProducto(5);

foreach ($resultado as $key => $value) {
    echo "$key => $value <br>";
    
}


?>