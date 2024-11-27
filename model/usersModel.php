<?php

require_once "../library/conexion.php";

class UsersModel {
    private $conexion;

    function __construct() {
        $this->conexion = (new Conexion())->connect();
    }

    public function registrarUsuario($firstname, $lastname, $username, $passwordHash, $email, $rol) {
        $sql = "INSERT INTO users (firstname, lastname, user_name, user_password_hash, user_email, date_added, rol) VALUES ('{$firstname}', '{$lastname}', '{$username}', '{$passwordHash}', '{$email}', NOW(), '{$rol}')";
        return $this->conexion->query($sql);
    }

    public function listarUsuarios() {
        $respuesta = $this->conexion->query("SELECT * FROM users");
        $usuarios = [];
        while ($fila = $respuesta->fetch_object()) {
            $usuarios[] = $fila;
        }
        return $usuarios;
    }

    public function actualizarUsuario($id, $data) {
        extract($data);
        $sql = "UPDATE users SET firstname = '{$firstname}', lastname = '{$lastname}', user_name = '{$username}', user_email = '{$email}', rol = '{$rol}' WHERE user_id = '{$id}'";
        return $this->conexion->query($sql);
    }

    public function eliminarUsuario($id) {
        $sql = "DELETE FROM users WHERE user_id = '{$id}'";
        return $this->conexion->query($sql);
    }
}

