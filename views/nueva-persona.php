
<div class="formulario-producto">
    <p>FORMULARIO PARA INSERTAR PERSONA</p>
    <form action="" id="frmRegistrar">
        <div class="campo-contenedor">
            <label for="nro_identidad" class="etiqueta-flotante">Nro_identidad:</label>
            <input type="text" name="nro_identidad" id="nro_identidad" class="entrada-destacada">
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
            <!-- <label for="rol" class="etiqueta-flotante">Rol:</label>
            <input type="text" name="rol" id="rol" class="entrada-destacada"> -->
            <select name="rol" id="rol"  class="entrada-destacada">
                
                <option  class="entrada-destacada" >Proveedor</option>
                <option  class="entrada-destacada" >Trabajador</option>
                <option  class="entrada-destacada" >Administrador</option>
            </select>
        </div>
         <!-- Campo de contraseña con opción de mostrar -->
         <div class="campo-contenedor">
            <label for="password" class="etiqueta-flotante">Contraseña:</label>
            <div class="input-group">
                <input type="password" name="password" id="password" class="entrada-destacada">
                <button type="button" onclick="togglePassword()" id="togglePasswordButton" class="toggle-password">👁️</button>
            </div>
        </div>

<style>
    .campo-contenedor {
        position: relative;
        margin-bottom: 20px;
    }

    .input-group {
        display: flex;
        align-items: center;
        position: relative;
    }

    .entrada-destacada {
        width: 100%;
        padding-right: 40px; /* Espacio para el botón */
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .toggle-password {
        position: absolute;
        right: 10px;
        background: transparent;
        border: none;
        font-size: 16px;
        cursor: pointer;
        padding: 0 5px;
        color: #555;
    }

    .toggle-password:hover {
        color: #333;
    }
</style>

<script>
function togglePassword() {
    const passwordField = document.getElementById('password');
    const toggleButton = document.getElementById('togglePasswordButton');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleButton.textContent = '🙈';
    } else {
        passwordField.type = 'password';
        toggleButton.textContent = '👁️';
    }
}
</script>
 
        <button type="button" class="boton-registro" onclick="registrar_personas();">Registrar</button>
    </form>
</div>

<script src="<?php echo BASE_URL?>views/js/functions_personas.js"></script>
