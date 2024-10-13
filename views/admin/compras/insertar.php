<?php
require_once '../../../config/config.php';
require_once '../../../controller/compras_control.php';

// Obtener listas de productos y trabajadores para seleccionar
$productos = $comprasControl->listarProductos(); // Función para obtener productos
$trabajadores = $comprasControl->listarTrabajadores(); // Función para obtener trabajadores

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'id_producto' => $_POST['id_producto'],
        'cantidad' => $_POST['cantidad'],
        'precio' => $_POST['precio'],
        'id_trabajador' => $_POST['id_trabajador']
    ];
    $comprasControl->insertarCompra($data);
    header('Location: indexadmin.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Compra</title>
    <style>
        

        /* Estilos Generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h2 {
            color: #333;
            margin-bottom: 10px;
        }
        .btn-retroceder {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #6c757d;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .btn-retroceder:hover {
            background-color: #5a6268;
        }
        .formulario {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .formulario input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .formulario button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .formulario button:hover {
            background-color: #0056b3;
        }
    </style>
   
</head>
<body>
    <a href="indexadmin.php" class="btn-retroceder">Retroceder</a>
    <h2>Agregar Nueva Compra</h2>

    <form method="POST" action="insertar.php">
        <label for="id_producto">Producto:</label>
        <select name="id_producto" required>
            <?php foreach ($productos as $producto): ?>
                <option value="<?php echo $producto['id']; ?>"><?php echo $producto['nombre']; ?></option>
            <?php endforeach; ?>
        </select>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required>

        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" required>

        <label for="id_trabajador">Trabajador:</label>
        <select name="id_trabajador" required>
            <?php foreach ($trabajadores as $trabajador): ?>
                <option value="<?php echo $trabajador['id']; ?>"><?php echo $trabajador['nombre']; ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>


