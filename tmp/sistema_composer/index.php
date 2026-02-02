<?php
require __DIR__ . '/vendor/autoload.php';


use App\Pages\Vender\Vender;
use App\Pages\Comprar\Comprar;

$comprar = new Comprar();
$comprar->ejecutarComprar();

$vender = new Vender();
$vender->ejecutarVender();

?> 