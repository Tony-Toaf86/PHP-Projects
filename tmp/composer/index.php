<?php
require __DIR__ . '/vendor/autoload.php';


use App\paginas\comprar\Comprar;
use App\recursos\menu\Menu;
use App\paginas\vender\Vender;

$elmenu = new Menu();

$vendiendo = new Vender();  
$vendiendo->paginaVender();

echo"<hr>";
$comprando = new Comprar();  
$comprando->paginaComprar();

$elmenu->exibirMenu("Comprar");



?>