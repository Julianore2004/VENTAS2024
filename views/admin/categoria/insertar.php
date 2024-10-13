<?php
require_once('../../../config/config.php');
require_once('../../../controller/categoria_control.php'); // Desde listar.php a categoria_control.php

$categoriaControl = new CategoriaControl();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];
    
    // Crear un array con los datos
    $data = [
        'nombre' => $nombre,
        'detalle' => $detalle
    ];

    // Pasar el array a la función
    $categoriaControl->insertarCategoria($data);
    header('Location: listar.php');
    exit();
}
?>

<h2>Actualizar la Categoría</h2>
<form method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    
    <label for="detalle">Detalle:</label>
    <input type="text" id="detalle" name="detalle" required>
    
    <button type="submit">Agregar</button>
</form>
