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
    // FUNCIO PARA ACTUALIZAR DATOS
    public function updateProducto(
        int $id,
        string $nombre,
        int $cantidad,
        float $precioCompra,
        float $precioVenta,
        string $descripcion,
        int $stockMinimo,
        int $idCategoria,
        int $idProveedor,
        string $fechaRegistro
    ) {
        $sql = "UPDATE productos SET
                    nombre = :nombre,
                    cantidad = :cantidad,
                    precioCompra = :precioCompra,
                    precioVenta = :precioVenta,
                    descripcion = :descripcion,
                    stockMinimo = :stockMinimo,
                    idCategoria = :idCategoria,
                    idProveedor = :idProveedor,
                    fechaRegistro = :fechaRegistro
                WHERE idProducto = :idProducto";

        $stm = $this->db->prepare($sql);
        return $stm->execute([
            'nombre' => $nombre,
            'cantidad' => $cantidad,
            'precioCompra' => $precioCompra,
            'precioVenta' => $precioVenta,
            'descripcion' => $descripcion,
            'stockMinimo' => $stockMinimo,
            'idCategoria' => $idCategoria,
            'idProveedor' => $idProveedor,
            'fechaRegistro' => $fechaRegistro,
            'idProducto' => $id
        ]);
    }
    public function inserProducto(
        string $nombre,
        int $cantidad,
        float $precioCompra,
        float $precioVenta,
        string $descripcion,
        int $stockMinimo,
        int $idCategoria,
        int $idProveedor,
        string $fechaRegistro
    ) {
        $sql = "INSERT INTO productos (
                    nombre,
                    cantidad,
                    precioCompra,
                    precioVenta,
                    descripcion,
                    stockMinimo,
                    idCategoria,
                    idProveedor,
                    fechaRegistro
                ) VALUES (
                    :nombre,
                    :cantidad,
                    :precioCompra,
                    :precioVenta,
                    :descripcion,
                    :stockMinimo,
                    :idCategoria,
                    :idProveedor,
                    :fechaRegistro
                )";

        $stm = $this->db->prepare($sql);
        return $stm->execute([
            'nombre' => $nombre,
            'cantidad' => $cantidad,
            'precioCompra' => $precioCompra,
            'precioVenta' => $precioVenta,
            'descripcion' => $descripcion,
            'stockMinimo' => $stockMinimo,
            'idCategoria' => $idCategoria,
            'idProveedor' => $idProveedor,
            'fechaRegistro' => $fechaRegistro
        ]);
    }
    
    public function eliminarProducto(int $id)
    {
        $sql = "DELETE FROM productos WHERE idProducto = :idProducto";
        $stm = $this->db->prepare($sql);
        return $stm->execute(['idProducto' => $id]);
    }


}


?>