
<div class="formulario-producto">
    <p>FORMULARIO PARA INSERTAR CATEGORIA</p>
    <form action="" id="frmRegistrar">
        <div class="campo-contenedor">
            <label for="nombre" class="etiqueta-flotante">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="entrada-destacada">
        </div>
        <div class="campo-contenedor">
            <label for="detalle" class="etiqueta-flotante">Detalle:</label>
            <input type="text" name="detalle" id="detalle" class="entrada-destacada">
        </div>
        <button type="button" class="boton-registro" onclick="registrar_categoria();">Registrar</button>
    </form>
</div>
<script src="<?php echo BASE_URL?>views/js/functions_categorias.js"></script>

