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
        int $idProducto,
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
            'idProducto' => $idProducto
        ]);
    }
    public function insertProducto(
        int $idProducto,
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
                    idProducto,
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
                    :idProducto,
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
            'idProducto' => $idProducto,
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

    public function eliminarProducto(int $idProducto)
    {
        $sql = "DELETE FROM productos WHERE idProducto = :idProducto";
        $stm = $this->db->prepare($sql);
        return $stm->execute(['idProducto' => $idProducto]);
    }

    //funcion para limpiar los inputs 
    public function limpiarInputs()
    {
        $idProducto = $nombre = $cantidad = $precioCompra = $precioVenta = $descripcion = $stockMinimo = $idCategoria = $idProveedor = $fechaRegistro = "";
        return [
            'idProducto' => $idProducto,
            'nombre' => $nombre,
            'cantidad' => $cantidad,
            'precioCompra' => $precioCompra,
            'precioVenta' => $precioVenta,
            'descripcion' => $descripcion,
            'stockMinimo' => $stockMinimo,
            'idCategoria' => $idCategoria,
            'idProveedor' => $idProveedor,
            'fechaRegistro' => $fechaRegistro
        ];
    }


}


?>