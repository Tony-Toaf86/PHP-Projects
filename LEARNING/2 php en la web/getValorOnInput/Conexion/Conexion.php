<?php
namespace App\Conexion;

use PDO;
use PDOException;

class Conexion
{

    public string $host = "localhost";
    public string $user = "root";
    public string $pass = "";
    public string $db = "inventario"; //base de datos 
    private string $charset = "utf8mb4";
    private ?PDO $pdo = null;

    public function conectar(): PDO
    {
        if ($this->pdo === null) {
            try {
                $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
                $this->pdo = new PDO($dsn, $this->user, $this->pass, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]);
            } catch (PDOException $e) {
                echo "Error de conexion<br>";
                echo $e->getMessage();

            }
        }
        return $this->pdo;
    }
}

?>