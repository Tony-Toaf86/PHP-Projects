<?php
require __DIR__ . '/../vendor/autoload.php';

use App\paginas\comprar\Comprar;
use App\recursos\menu\Menu;

$elmenu = new Menu();
$comprando = new Comprar();  

$comprando->paginaComprar();
$elmenu->exibirMenu("Comprar");


?>