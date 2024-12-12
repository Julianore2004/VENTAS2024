<style>
  .bodyverproduc {
    background: #f4f4f9;
    margin: 0;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
  }

  /* Contenedor de la tabla */
  .table-container {
    width: auto;
    max-width: 1200px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9;
    padding: 20px;
    margin-bottom: 20px;
  }

  /* Tabla de productos */
  table.verproduct {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    font-size: 0.95rem;
  }

  table.verproduct thead {
    background: #42a5f5;
    color: #fff;
  }

  table.verproduct th,
  table.verproduct td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  table.verproduct th {
    text-transform: uppercase;
    letter-spacing: 0.1em;
  }

  table.verproduct tbody tr {
    transition: background 0.3s ease, transform 0.2s ease;
  }

  table.verproduct tbody tr:hover {
    background: #e8f0fe;
    transform: scale(1.02);
  }

  table.verproduct tbody tr:nth-child(even) {
    background: #f9f9f9;
  }

  table.verproduct td img {
    max-width: 50px;
    height: auto;
    border-radius: 5px;
  }

  table.verproduct .codigo {
    font-weight: bold;
    color: #3f51b5;
  }

  table.verproduct .precio {
    color: #4caf50;
    font-weight: bold;
  }

  table.verproduct .stock {
    font-size: 0.9em;
    color: #ff5722;
  }


</style>
<link rel="stylesheet" href="../css/style.css">
<div class="bodyverproduc">
<button class="btnregistrar"> 
<a href="<?php echo BASE_URL ?>nueva-persona">
    <span>REGISTRAR NUEVA PERSONA</span>
  </a></button>
<br>
 
  <div class="table-container">

    <table class="verproduct">
      <thead>
        <tr>
          <th >Id</th>
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