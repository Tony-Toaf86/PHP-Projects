<?php
namespace App\paginas\vender;
use App\recursos\menu\Menu;

class Vender {
    public function paginaVender() {
       echo"<h1>Vender Página</h1><p>Pagina de Vender!</p>";
         $menu = new Menu();
        $menu->exibirMenu("Vender");
    }
}
?>