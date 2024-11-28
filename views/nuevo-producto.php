
<div class="formulario-producto">
    <p>FORMULARIO PARA INSERTAR PRODUCTO</p>
    <form action="" id="frmRegistrar">
        <div class="campo-contenedor">
            <label for="codigo" class="etiqueta-flotante">Código:</label>
            <input type="text" name="codigo" id="codigo" class="entrada-destacada">
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
            <label for="stock" class="etiqueta-flotante">Stock:</label>
            <input type="number" name="stock" id="stock" class="entrada-destacada">
        </div>
        <div class="campo-contenedor">
            <label for="categoria" class="etiqueta-flotante">Categoría:</label>
            <select name="categoria" id="categoria"  class="entrada-destacada">
                <option  class="entrada-destacada" >Seleccione</option>
            </select>
        </div>
        <div class="campo-contenedor">
            <label for="img" class="etiqueta-flotante">Imagen del Producto:</label>
            <input type="file" name="img" id="img" class="form-control">
        </div>
        <div class="campo-contenedor">
            
            <label for="proveedor" class="etiqueta-flotante">Proveedor:</label>
            <select name="proveedor" id="proveedor"  class="entrada-destacada">
                <option  class="entrada-destacada" >Seleccione</option>
            </select>
        </div>
        <button type="button" class="boton-registro" onclick="registrar_producto();">Registrar</button>
    </form>
</div>


<script src="<?php echo BASE_URL?>views/js/functions_productos.js"></script>
<script>listar_categorias();</script>
<script>listar_proveedores();</script>

