<?php
namespace App\Pages\Vender;
use App\Recursos\Menu;

class Vender {

    public function ejecutarVender() {
        $menu = new Menu();
        
        

        echo "<h1>Página de Vender</h1>";
        $menu->mostrarMenu();
        echo "<p>Aquí puedes gestionar tus ventas.</p>";
    }


}


?>