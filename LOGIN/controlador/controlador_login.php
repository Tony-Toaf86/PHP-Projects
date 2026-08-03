<?php
require_once __DIR__ . '/../config/conexion.php';
require_once __DIR__ . '/../modelo/modelo_login.php';

class LoginController {
    public function login() {
        $error = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = trim($_POST['usuario'] ?? '');
            $contrasena = trim($_POST['contrasena'] ?? '');

            if (!empty($usuario) && !empty($contrasena)) {
                $database = new Conexion();
                $db = $database->conectarse();
                $userModel = new LoginModel($db);

                $user = $userModel->obtenerusuarioporusername($usuario);

                if ($user && password_verify($contrasena, $user['contrasena'])) {
                    session_start();
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_nombre'] = $user['nombre'];
                    $_SESSION['user_usuario'] = $user['usuario'];
                    $_SESSION['user_rol'] = $user['rol'];
                    
                    header("Location: vista/vista_home.php");
                    return;

                } else {
                    $error = "Credenciales incorrectas.";
                }
            } else {
                $error = "Por favor completa todos los campos.";
            }
        }

        require __DIR__ . '/../vista/vista_login.php'; 
    }
}