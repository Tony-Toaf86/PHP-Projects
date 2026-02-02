<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "inventario";

$conexion = new mysqli($servername, $username, $password, $database);

if($conexion->connect_error){
    die("La conexion ha fallado: " . $conexion->connect_error);
}else{
    // echo "Conexion exitosa";
}

?>
