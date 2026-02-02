<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Productos\Producto;
use App\Productos\Comprando;



$buscando = new Producto();
$resultado = $buscando->buscarProducto(5);

$saludando = new Comprando();
$saludando->saludar();


// foreach ($resultado as $key => $value) {
//     echo "$key => $value <br>";
    
// }


?>