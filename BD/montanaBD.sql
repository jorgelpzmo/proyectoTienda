-- Crear base de datos (opcional)
CREATE DATABASE IF NOT EXISTS mi_tienda;
USE mi_tienda;

-- Tabla Cliente
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    nickname VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    telefono VARCHAR(15),
    domicilio VARCHAR(100)
);

-- Tabla Producto
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    imagen TEXT NOT NULL,
    stock INT NOT NULL
);

-- Tabla intermedia Compra
CREATE TABLE compras (
    usuario_id INT NOT NULL,
    producto_id INT NOT NULL,
    fecha_compra DATE NOT NULL,
    id INT NOT NULL,
    cantidad INT DEFAULT 1,

    -- Primary Key
    PRIMARY KEY (cliente_id, producto_id, fecha_compra);

    -- Definir claves foráneas para relacionar Cliente y Producto
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (producto_id) REFERENCES productos(id) ON DELETE CASCADE
);

