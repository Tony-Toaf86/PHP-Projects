<?php
session_start();
require_once "Conexion.php";

class Usuario {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function login(string $usuario, string $contrasena): bool {
        $sql = "SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row && password_verify($contrasena, $row['contrasena'])) {
            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['idUsuario'] = $row['idUsuario'];
            return true;
        }

        return false;
    }
}

$conexion = new Conexion();
$pdo = $conexion->conectar();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = htmlentities(addslashes($_POST["usuario"]));
    $contrasena = htmlentities(addslashes($_POST["contrasena"]));

    if (empty($usuario) || empty($contrasena)) {
        echo "Por favor, complete todos los campos.";
        exit;
    }

    $usuarioObj = new Usuario($pdo);
    if ($usuarioObj->login($usuario, $contrasena)) {
        header("Location: Veficando_usuario.php");
      exit;
    } else {
        echo "No se inició sesión. Usuario o contraseña incorrectos.";
    }
} else {
    echo "Acceso no válido.";
}
?>
