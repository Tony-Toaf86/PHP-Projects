<?php
session_start();
require_once "Conexion.php"; 

class Usuario {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function obtenerRol(int $idUsuario): array|false {
        $sql = "SELECT nombre, rolUsuario FROM usuarios WHERE idUsuario = :idUsuario LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ?: false;
    }
}

if (isset($_SESSION['idUsuario']) && isset($_SESSION['usuario'])) {

    $conexion = new Conexion();
    $pdo = $conexion->conectar();

    $usuarioObj = new Usuario($pdo);
    $id_usuario = intval($_SESSION['idUsuario']);
    $nombre_usuario = $_SESSION['usuario'];

    $row = $usuarioObj->obtenerRol($id_usuario);

    if ($row) {
        $rol = intval($row['rolUsuario']);
        switch ($rol) {
            case 1:
                // header("Location: ../menu/admin.php");
                echo "<strong>Rol:</strong> Administrador";
                exit();
            case 2:
                // header("Location: ../menu/index.php");
                echo "<strong>Rol:</strong> Usuario estándar";
                exit();
            case 3:
                echo "<strong>Rol:</strong> Usuario lector";
                break;
            default:
                echo "<strong>Rol:</strong> Desconocido";
                break;
        }
    } else {
        echo "No se encontró información para el usuario con ID: $id_usuario";
    }

} else {
    echo "No hay una sesión activa. Por favor, inicie sesión.";
}
?>
