<style>
  .bodyverproduc {
    background: #f4f4f9;
    margin: 0;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: auto !important;;
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

<div class="bodyverproduc">
    <a href="<?php echo BASE_URL ?>nueva-categoria">
        <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
            <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
        </svg>
        <span>REGISTRAR NUEVA CATEGORIA</span>
    </a>
    <!-- Tabla de productos -->
    <div class="table-container">
        <table class="verproduct">
            <thead>
                <tr>
                    <th>Nro</th>
                    <th>Nombre</th>
                    <th>Detalle</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="tbl_categoria">
                <!-- Aquí se generarán las filas de datos dinámicamente -->
            </tbody>
        </table>
    </div>
</div>
<script src="<?php echo BASE_URL ?>views/js/functions_categorias.js"></script>
