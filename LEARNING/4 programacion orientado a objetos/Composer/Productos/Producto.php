<?php
namespace App\Productos;
use App\Conexion\Conexion;
use PDO;

class Producto
{
    private PDO $db;

    public function __construct()
    {
        $conexion = new Conexion();
        $this->db = $conexion->conectar();
    }

    public function buscarProducto(int $id)
    {
        $sql = "SELECT * FROM productos WHERE idProducto = :clave";
        $stm = $this->db->prepare($sql);
        $stm->execute(['clave' => $id]);
        return $stm->fetch();    
    }
} 


?>