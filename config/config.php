<?php
const BD_HOST = 'localhost';
const BD_NAME = '';
const BD_USER = '';
const BD_PASSWORD = '';

const BASE_URL = '';


$conexion = new mysqli(BD_HOST, BD_USER, BD_PASSWORD, BD_NAME);


if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa a la base de datos '" . BD_NAME . "'";
}

// Cerrar la conexión (si es necesario)
// $conexion->close();
?>