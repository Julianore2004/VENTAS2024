<?php
require_once '../../../config/config.php';
require_once '../../../controller/producto_control.php';

$productoControl = new ProductoControl();
$productos = $productoControl->listarProductos();
?>

<h2>Lista de Productos</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Código</th>
        <th>Nombre</th>
        <th>Detalle</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>ID Categoría</th>
        <th>ID Proveedor</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($productos as $producto): ?>
    <tr>
        <td><?php echo $producto['id']; ?></td>
        <td><?php echo $producto['codigo']; ?></td>
        <td><?php echo $producto['nombre']; ?></td>
        <td><?php echo $producto['detalle']; ?></td>
        <td><?php echo $producto['precio']; ?></td>
        <td><?php echo $producto['stock']; ?></td>
        <td><?php echo $producto['id_categoria']; ?></td>
        <td><?php echo $producto['id_proveedor']; ?></td>
        <td>
            <a href="actualizar.php?id=<?php echo $producto['id']; ?>">Actualizar</a>
            <a href="eliminar.php?id=<?php echo $producto['id']; ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
