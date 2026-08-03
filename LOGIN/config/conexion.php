<?php
class Conexion {
    private $host = "localhost";
    private $db_name = "sistema_login";
    private $username = "root";
    private $password = "";
    public $conn;

    public function conectarse() {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4",
                $this->username,
                $this->password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false, // Desactiva emulación para mayor seguridad en sentencias preparadas
                ]
            );

        } catch(PDOException $exception) {
            // En producción, registra el error internamente y muestra un mensaje genérico
            error_log("Error de conexión: " . $exception->getMessage());
            die("Lo sentimos, hay problemas de conexión con el sistema en este momento.");
        }

        return $this->conn;
    }
}