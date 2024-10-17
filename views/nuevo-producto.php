<div>
    <p>
        FORMULARIO PARA INSERTAR PRODUCTO</p>
</div>
<form action="">

    <div>
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo" class="form-control" required>
    </div>
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required>
    </div>
    <div>
        <label for="detalle">Detalle:</label>
        <input type="text" name="detalle" id="detalle" class="form-control" required>
    </div>
    <div>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" class="form-control" required>
    </div>
    <div>
        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" class="form-control" required>
    </div>
    <div>
        <label for="categoria">Categoría:</label>
        <input type="number" name="categoria" id="categoria" class="form-control" required>
    </div>
    <div>
        <label for="img">Imagen del Producto:</label>
        <input type="text" name="img" id="img" class="form-control" required>
    </div>
    <div>
        <label for="proveedor">Proveedor:</label>
        <input type="number" name="proveedor" id="proveedor" class="form-control" required>
    </div>
<button type="submit" class="">Registrar</button>
</form>

<script src="<?php echo BASE_URL?>views/js/functions_productos.js">
</script>