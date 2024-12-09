<!-- Incluye estilos en línea para una solución rápida o un archivo CSS externo para mantener el código ordenado -->
<style>
  /* Estilo del contenedor de la tabla */
  .bodyverproducTBC {
    padding: 20px;
    background: linear-gradient(135deg, #f0f0f0, #e6e6e6);
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  /* Estilo del contenedor responsivo */
  .tbc_table-container {
    overflow-x: auto;
    width: auto;
    max-width: 100%;
  
  }
 
  /* Estilo de la tabla */
  .tbc_table {
    width: 100%;
    border-collapse: collapse;
    margin: 0 auto;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
  }

  /* Estilo de la cabecera */
  .tbc_table thead tr {
    background: linear-gradient(135deg, #0078d7, #00b0ff);
    color: #fff;
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
  }

  .tbc_table thead th {
    padding: 12px;
    text-align: left;
    border-bottom: 2px solid #e0e0e0;
  }

  /* Estilo de las celdas del cuerpo */
  .tbc_table tbody tr {
    transition: background 0.3s ease, transform 0.2s ease;
  }

  .tbc_table tbody tr:nth-child(odd) {
    background: #f9f9f9;
  }

  .tbc_table tbody tr:hover {
    background: #d4f0ff;
    transform: scale(1.01);
  }

  .tbc_table tbody td {
    padding: 10px 12px;
    border-bottom: 1px solid #e0e0e0;
    font-size: 0.95rem;
    color: #333;
  }

  /* Estilo para celdas con acciones */
  .tbc_table tbody td:last-child {
    text-align: center;
  }

  /* Responsividad */
  @media screen and (max-width: 768px) {
    .tbc_table thead {
      display: none;
    }

    .tbc_table tbody td {
      display: block;
      text-align: right;
      padding: 10px 8px;
      border-bottom: 1px solid #e0e0e0;
    }

    .tbc_table tbody td::before {
      content: attr(data-label);
      float: left;
      font-weight: bold;
      color: #0078d7;
    }
  }

</style>
<link rel="stylesheet" href="../css/style.css"> 
<div class="bodyverproducTBC">

  <div class="tbc_table-container">
  <a href="<?php echo BASE_URL ?>nueva-persona">
 
      </svg>
      <span>REGISTRAR NUEVA PERSONA</span>
   
  
  </a>
    <table class="tbc_table">
      <thead>
        <tr>
          <th class="asas">Id</th>
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
