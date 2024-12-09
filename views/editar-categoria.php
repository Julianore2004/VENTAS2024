<link rel="stylesheet" href="../css/style.css">
<div class="formulario-producto">
    <p>FORMULARIO PARA EDITAR CATEGORÍA</p>
    <form action="" id="frm_editar">
        <input type="hidden" name="id_categoria" id="id_categoria">
        <div class="campo-contenedor">
            <label for="nombre" class="etiqueta-flotante">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="entrada-destacada">
        </div>
        <div class="campo-contenedor">
            <label for="detalle" class="etiqueta-flotante">Detalle:</label>
            <input type="text" name="detalle" id="detalle" class="entrada-destacada">
        </div>
        <button type="button" class="boton-registro" onclick="actualizar_categoria();">Actualizar</button>
    </form>
</div>
<script src="<?php echo BASE_URL ?>views/js/functions_categorias.js"></script>
<script>
    const id_p = <?php $pagina = explode("/", $_GET['views']); echo $pagina['1']; ?>;
    ver_categoria(id_p);
</script>
