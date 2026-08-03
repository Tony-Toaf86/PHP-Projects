<?php
class LoginModel {
    private $conn;
    private $table_name = "usuarios";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerusuarioporusername($usuario) {
        $query = "SELECT u.id, u.nombre, u.usuario, u.contrasena, u.rol_id, r.nombre AS rol 
                  FROM " . $this->table_name . " u 
                  JOIN roles r ON u.rol_id = r.id 
                  WHERE u.usuario = :usuario 
                  LIMIT 1";
                  
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}