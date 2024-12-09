<link rel="stylesheet" href="../css/style.css">
<div class="formulario-producto">
    <p>FORMULARIO PARA EDITAR PRODUCTO</p>
    <form action="" id="frmEditar">
        <div class="campo-contenedor">
            <input type="hidden" name="id_producto" id="id_producto">
        </div>
        <div class="campo-contenedor">
            <input type="hidden" name="img" id="img">
        </div>
        <div class="campo-contenedor">
            <label for="codigo" class="etiqueta-flotante">Código:</label>
            <input type="text" name="codigo" id="codigo" class="entrada-destacada" readonly>
        </div>
        <div class="campo-contenedor">
            <label for="nombre" class="etiqueta-flotante">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="entrada-destacada">
        </div>
        <div class="campo-contenedor">
            <label for="detalle" class="etiqueta-flotante">Detalle:</label>
            <input type="text" name="detalle" id="detalle" class="entrada-destacada">
        </div>
        <div class="campo-contenedor">
            <label for="precio" class="etiqueta-flotante">Precio:</label>
            <input type="number" name="precio" id="precio" class="entrada-destacada">
        </div>
        <div class="campo-contenedor">
            <label for="categoria" class="etiqueta-flotante">Categoría:</label>
            <select name="categoria" id="categoria" class="entrada-destacada">
                <option class="entrada-destacada">Seleccione</option>
            </select>
        </div>
        <div class="campo-contenedor">
            <label for="img" class="etiqueta-flotante">Imagen del Producto:</label>
            <input type="file" name="img" id="img" class="form-control">
        </div>
        <div class="campo-contenedor">

            <label for="proveedor" class="etiqueta-flotante">Proveedor:</label>
            <select name="proveedor" id="proveedor" class="entrada-destacada">
                <option class="entrada-destacada" value="Seleccione"></option>
            </select>
        </div>
        <button type="button" class="boton-registro" onclick="actualizar_producto();">Actualizar</button>
    </form>
</div>


<script src="<?php echo BASE_URL ?>views/js/functions_productos.js"></script>
<script>
    listar_categorias();
</script>
<script>
    listar_proveedores();
</script>
<script>
    //localhost/VENTAS2024/editar-producto/3
    const id_p = <?php $pagina = explode("/", $_GET['views']);
    echo $pagina['1']; ?>;
    ver_producto(id_p);
</script>