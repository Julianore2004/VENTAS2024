<link rel="stylesheet" href="../css/style.css">
<div class="formulario-producto">
    <p>FORMULARIO PARA EDITAR PERSONA</p>
    <form action="" id="frm_editar">
        <input type="hidden" name="id_persona" id="id_persona">
        <div class="fp">
            <div class="fp1">
                <div class="campo-contenedor">
                    <label for="nro_identidad" class="etiqueta-flotante">Nro_identidad:</label>
                    <input type="text" name="nro_identidad" id="nro_identidad" class="entrada-destacada" readonly>
                </div>
                <div class="campo-contenedor">
                    <label for="razon_social" class="etiqueta-flotante">Razon_social:</label>
                    <input type="text" name="razon_social" id="razon_social" class="entrada-destacada">
                </div>
                <div class="campo-contenedor">
                    <label for="telefono" class="etiqueta-flotante">Telefono:</label>
                    <input type="text" name="telefono" id="telefono" class="entrada-destacada">
                </div>
                <div class="campo-contenedor">
                    <label for="correo" class="etiqueta-flotante">Correo:</label>
                    <input type="text" name="correo" id="correo" class="entrada-destacada">
                </div>
                <div class="campo-contenedor">
                    <label for="departamento" class="etiqueta-flotante">Departamento:</label>
                    <input type="text" name="departamento" id="departamento" class="entrada-destacada">
                </div>
            </div>
            <div class="fp2">
                <div class="campo-contenedor">
                    <label for="provincia" class="etiqueta-flotante">Provincia:</label>
                    <input type="text" name="provincia" id="provincia" class="entrada-destacada">
                </div>
                <div class="campo-contenedor">
                    <label for="distrito" class="etiqueta-flotante">Distrito:</label>
                    <input type="text" name="distrito" id="distrito" class="entrada-destacada">
                </div>
                <div class="campo-contenedor">
                    <label for="codigo_postal" class="etiqueta-flotante">Codigo_postal:</label>
                    <input type="number" name="codigo_postal" id="codigo_postal" class="entrada-destacada">
                </div>
                <div class="campo-contenedor">
                    <label for="direccion" class="etiqueta-flotante">Direccion:</label>
                    <input type="text" name="direccion" id="direccion" class="entrada-destacada">
                </div>
                <div class="campo-contenedor">
                    <label for="rol" class="etiqueta-flotante">Rol:</label>
                    <select name="rol" id="rol" class="entrada-destacada">
                        <option value="Proveedor">Proveedor</option>
                        <option value="Trabajador">Trabajador</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                </div>
            </div>
        </div>
        <div>
            <button type="button" class="boton-registro" onclick="actualizar_persona();">Actualizar</button>
        </div>
    </form>
</div>
<script src="<?php echo BASE_URL ?>views/js/functions_personas.js"></script>
<script>
    const id_p = <?php $pagina = explode("/", $_GET['views']); echo $pagina['1']; ?>;
    ver_persona(id_p);
</script>
