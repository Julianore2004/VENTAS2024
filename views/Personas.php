<style>
.bodyverproducTBC {
  background: #f4f4f9;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 100vh; /* Ajusta la altura al 100% de la pantalla */
  overflow: hidden; /* Evita scroll no deseado */
}

/* Contenedor de la tabla */
.tbc_table-container {
  width: 90%;
  max-width: 1200px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  background-color: #f9f9f9;
  padding: 10px;
  margin: 0;
  overflow-x: auto; /* Permite desplazamiento horizontal */
}

/* Tabla responsive */
table.tbc_table {
  width: 100%;
  border-collapse: collapse;
  font-family: Arial, sans-serif;
  font-size: 0.9rem;
  table-layout: fixed; /* Fuerza distribución uniforme */
}

table.tbc_table thead {
  position: sticky; /* Mantiene el encabezado fijo al hacer scroll */
  top: 0;
  background: #42a5f5;
  color: white;
  z-index: 1;
}

table.tbc_table th,
table.tbc_table td {
  padding: 10px;
  text-align: left;
  border: 1px solid #ddd;
  overflow: hidden; /* Esconde contenido desbordado */
  text-overflow: ellipsis; /* Muestra "..." si el texto es largo */
  white-space: nowrap; /* Evita que el texto se rompa */
}

table.tbc_table th {
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

table.tbc_table tbody tr {
  transition: background 0.3s ease, transform 0.2s ease;
}

table.tbc_table tbody tr:hover {
  background-color: #e8f0fe;
}

table.tbc_table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

.tbc_table td img {
  max-width: 50px;
  height: auto;
  border-radius: 5px;
}

@media (max-width: 768px) {
  table.tbc_table th, 
  table.tbc_table td {
    font-size: 0.8rem;
    padding: 8px;
  }
}


</style>
<div class="bodyverproducTBC">
  <div class="tbc_table-container">
    <table class="tbc_table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nro Identidad</th>
          <th>Razón Social</th>
          <th>Teléfono</th>
          <th>Correo</th>
          <th>Departamento</th>
          <th>Provincia</th>
          <th>Distrito</th>
          <th>Código Postal</th>
          <th>Dirección</th>
          <th>Rol</th>
          <th>Fecha Registro</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody id="tbl_personas">
        <!-- Aquí se generarán las filas de datos dinámicamente -->
      </tbody>
    </table>
  </div>
</div>
<script src="<?php echo BASE_URL ?>views/js/functions_personas.js"></script>
