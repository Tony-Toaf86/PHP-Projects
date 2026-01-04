<?php
require_once "Conexion.php";

class Producto
{
    private PDO $db;

    public function __construct()
    {
        $conexion = new conexion();
        $this->db = $conexion->conectar();
    }

    public function buscarProducto(int $id)
    {
        $sql = "SELECT * FROM productos WHERE idProducto = :idProducto";
        $stm = $this->db->prepare($sql);
        $stm->execute(['idProducto' => $id]);
        return $stm->fetch();    
    }
} 

$buscando = new Producto();
$resultado = $buscando->buscarProducto(5);

foreach ($resultado as $key => $value) {
    echo "$key => $value <br>";
    
}

?>