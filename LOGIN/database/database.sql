-- 1. Crear la base de datos
CREATE DATABASE IF NOT EXISTS sistema_login 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

USE sistema_login; 

-- 2. Crear la tabla de roles
CREATE TABLE IF NOT EXISTS roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL UNIQUE
);

-- 3. Insertar los roles por defecto
INSERT INTO roles (id, nombre) VALUES 
(1, 'admin'),
(2, 'usuario')
ON DUPLICATE KEY UPDATE nombre = VALUES(nombre);

-- 4. Crear la tabla de usuarios vinculada a roles
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    rol_id INT NOT NULL DEFAULT 2,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (rol_id) REFERENCES roles(id) ON DELETE RESTRICT ON UPDATE CASCADE
);

-- 5. Insertar un usuario de prueba con rol de administrador
-- usuario tony y password tony
INSERT INTO usuarios (nombre, usuario, contrasena, rol_id) VALUES 
('Tony', 'tony', '$2y$10$.94BqMhIwRsQjIuy4vec0OQp05tFo7mEQcysnIhf.x0mL1uXMGbTK', 1)
ON DUPLICATE KEY UPDATE contrasena = VALUES(contrasena);


