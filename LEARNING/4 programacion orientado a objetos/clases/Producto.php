<?php
echo "estudiando clases<br> ";

class Producto
{
    public $nombre;
    public $precio;
    public $color;

    public function mostraDatos()
    {
        // echo"Nombre: $this->nombre, Presio: $this->precio";
        echo "Nombre: $this->nombre <br>";
        echo "Presio: $this->precio<br>";
        echo "Color:  $this->color";
    }

    public function asignaPrecio($nuevoprecio)
    {
        $this->precio = $nuevoprecio;
    }
    public function asignarColor($el_color){
        $this->color = $el_color;
    }
}


$book = new Producto();
$book->nombre = "Libreta";
$book->asignarColor("Rojo");
$book->asignaPrecio(100);

$book->mostraDatos();

?>