<?php

// spl_autoload_register(function ($clase) {
//     require __DIR__ . "/clases/$clase.php";
// });

spl_autoload_register(function ($clase) {
    require __DIR__ . "/$clase.php";
});


echo "<h1>Gestión de Personas y Estudiantes</h1>";
$estudiante1 = new Estudiante("Luis", 22, "Masculino", "Ingeniería");
$estudiante2 = new Estudiante("Ana", 20, "Femenino", "Medicina");
$estudiante1->mostrarInfoEstudiante();
$estudiante2->mostrarInfoEstudiante();

?>