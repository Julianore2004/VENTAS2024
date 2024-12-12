<link rel="stylesheet" href="../css/style.css">
<div class="formulario-producto">
<a href="<?php echo BASE_URL ?>personas">
    <button class="buttonatras">
      <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
        <path
          d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z">
        </path>
      </svg>
      <span>Back</span>
    </button>
  </a>
    <p>FORMULARIO PARA EDITAR PERSONA</p>
    <form action="" id="frm_editar">
        <input type="hidden" name="id_persona" id="id_persona">
        <div class="fp">
            <div class="fp1">
                <div class="campo-contenedor">
                    <label for="nro_identidad" class="etiqueta-flotante">Nro_identidad:</label>
                    <input type="number" name="nro_identidad" id="nro_identidad" class="entrada-destacada" readonly>
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
