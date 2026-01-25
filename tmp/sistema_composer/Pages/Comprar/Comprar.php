<?php
namespace App\Pages\Comprar;
use App\Recursos\Menu;

class Comprar { 
    public function ejecutarComprar() {
        $menu = new Menu();
        

        echo "<h1>Página de Comprar</h1>";
        $menu->mostrarMenu();
        echo "<p>Aquí puedes gestionar tus compras.</p>";
    }
}

?>