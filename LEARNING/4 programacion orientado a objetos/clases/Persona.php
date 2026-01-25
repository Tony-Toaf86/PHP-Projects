<?php 
class Persona{ 
    public $nombre;
    public $edad;
    public $genero;

    public function __construct($nombre, $edad, $genero){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->genero = $genero;
    }

    public function mostrarInfo(){
        echo "Nombre: " . $this->nombre . "\n<br>";
        echo "Edad: " . $this->edad . "\n<br>";
        echo "Género: " . $this->genero . "\n<br>";
    }
}



?>