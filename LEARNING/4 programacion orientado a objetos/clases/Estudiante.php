<?php
class Estudiante extends Persona{
    public $curso;
    public function __construct($nombre, $edad, $genero, $curso){
        parent::__construct($nombre, $edad, $genero);
        $this->curso = $curso;
    }


    public function mostrarInfoEstudiante(){
        echo "Información del Estudiante:<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Género: " . $this->genero . "<br>";
        echo "Curso: " . $this->curso . "<br>";
    }
}


?>