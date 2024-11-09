<?php

require 'Singleton.php';
require 'DTOusuario.php';

class DAOusuario {
    private $conn;

    /**
     * @param $conn
     */
    public function __construct()
    {
        $this->conn = Singleton::getCon();
    }

    public function selectUsuario($id) {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $fila = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($fila) {
            $usuario = new DTOusuario(
                $fila['id'],
                $fila['nombre'],
                $fila['apellido'],
                $fila['nickname'],
                $fila['password'],
                $fila['telefono'],
                $fila['domicilio']
            );
            return $usuario;
        } else {
            return null;
        }

        /*
 * CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    nickname VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    telefono VARCHAR(15),
    domicilio VARCHAR(100)
);*/

    }

    public function selectAllUsuarios() {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios");
        $stmt->execute();
        $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $usuarios = [];
        foreach ($resultSet as $fila) {
            $usuario = new DTOusuario(
                $fila['id'],
                $fila['nombre'],
                $fila['apellido'],
                $fila['nickname'],
                $fila['password'],
                $fila['telefono'],
                $fila['domicilio']
            );
            array_push($usuarios, $usuario);
            //$usuarios[] = $usuario; Esta sería otra forma de añadir un elemento en la última posición del array.
        }
    }
    /*
 * CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    nickname VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    telefono VARCHAR(15),
    domicilio VARCHAR(100)
);*/

    public function insertUsuario($usuario) {
        $stmt = $this->conn->prepare("INSERT INTO usuarios 
        (nombre, apellido, nickname, password, telefono, domicilio) 
        VALUES (:nombre, :apellido, :nickname, :password, :telefono, :domicilio)");

        $stmt->bindParam(':nombre', $usuario->getNombre());
        $stmt->bindParam(':apellido', $usuario->getApellido());
        $stmt->bindParam(':nickname', $usuario->getNickname());
        $stmt->bindParam(':password', $usuario->getPassword());
        $stmt->bindParam(':telefono', $usuario->getTelefono());
        $stmt->bindParam(':domicilio', $usuario->getDomicilio());

        return $stmt->execute(); //Este return devuelve un true si la consulta se ejecutó o un false si la consulta no se ejecutó.
    }

/* CREATE TABLE usuarios (
id INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(50) NOT NULL,
apellido VARCHAR(50) NOT NULL,
nickname VARCHAR(50) UNIQUE NOT NULL,
password VARCHAR(255) NOT NULL,
telefono VARCHAR(15),
domicilio VARCHAR(100)
);*/

    public function updateUsuario($usuario) {
        $stmt = $this->conn->prepare("UPDATE usuarios SET 
                    nombre = :nombre, 
                    apellido = :apellido,
                    nickname = :nickname,
                    password = :password,
                    telefono = :telefono,
                    domicilio = :domicilio WHERE id = :id");

        $stmt->bindParam(':nombre', $usuario->getNombre());
        $stmt->bindParam(':apellido', $usuario->getApellido());
        $stmt->bindParam(':nickname', $usuario->getNickname());
        $stmt->bindParam(':password', $usuario->getPassword());
        $stmt->bindParam(':telefono', $usuario->getTelefono());
        $stmt->bindParam(':domicilio', $usuario->getDomicilio());
        $stmt->bindParam(':id', $usuario->getId());

        return $stmt->execute();//Este return devuelve un true si la consulta se ejecutó o un false si la consulta no se ejecutó.
    }

    public function deleteUsuario($id) {
        $stmt = $this->conn->prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt->bindParam(':id', $id);

        return $stmt->execute();

    }
}

?>
