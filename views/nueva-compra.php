
<div class="formulario-producto">
    <p>FORMULARIO PARA INSERTAR COMPRA</p>
    <form action="" id="frmRegistrar">
    <div class="campo-contenedor">   
            <label for="producto" class="etiqueta-flotante">Producto:</label>
            <select name="producto" id="producto"  class="entrada-destacada">
                <option  class="entrada-destacada" >Seleccione</option>
            </select>
        </div>
        <div class="campo-contenedor">
            <label for="cantidad" class="etiqueta-flotante">Cantidad:</label>
            <input type="int" name="cantidad" id="cantidad" class="entrada-destacada">
        </div>
        <div class="campo-contenedor">
            <label for="precio" class="etiqueta-flotante">Precio:</label>
            <input type="number" name="precio" id="precio" class="entrada-destacada">
        </div>
        <div class="campo-contenedor">
            <label for="fecha_compra" class="etiqueta-flotante">Fecha_compra:</label>
            <input type="date" name="fecha_compra" id="fecha_compra" class="entrada-destacada">
        </div>
        <div class="campo-contenedor">   
            <label for="trabajador" class="etiqueta-flotante">Trabajador:</label>
            <select name="trabajador" id="trabajador"  class="entrada-destacada">
                <option  class="entrada-destacada" >Seleccione</option>
            </select>
        </div>
        <button type="button" class="boton-registro" onclick="registrar_compras();">Registrar</button>
    </form>
</div>

<script src="<?php echo BASE_URL?>views/js/functions_compras.js"></script>
<script>listar_trabajadores();</script>
<script>listar_productos();</script>

