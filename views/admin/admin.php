<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
 
   <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>
    <style>
        /* Estilos generales */
        .bodyadmin {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            margin: 0;
            display: flex;
            height: 100vh;
            color: #333;
        }

        /* Barra lateral */
        .admin-sidebar {
            width: 260px;
            background: #42A5F5;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1), -5px -5px 15px rgba(255, 255, 255, 0.7);
            border-radius: 15px;
            margin: 20px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .admin-sidebar h2 {
            font-size: 1.6em;
            margin-bottom: 30px;
            color: #B3E5FC;
            letter-spacing: 1px;
            font-weight: 600;
        }

        .admin-menu-item {
            width: 100%;
            padding: 15px 20px;
            cursor: pointer;
            color: #FFF;
            font-weight: 500;
            font-size: 1em;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            transition: background 0.3s, padding-left 0.3s;
            text-decoration: none;
        }

        .admin-menu-item:hover, .admin-menu-item.active {
            background-color: #B3E5FC;
            color: #333;
            padding-left: 30px;
        }

        .admin-menu-icon {
            margin-right: 10px;
            font-size: 1.2em;
        }

        /* Contenedor principal */
        .admin-content {
            flex-grow: 1;
            padding: 40px;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1), -5px -5px 15px rgba(255, 255, 255, 0.7);
            margin: 20px;
            border-radius: 15px;
           
        }
        .admintablas{
            margin-top: 80px;
        }

        h1 {
            color: #333;
            font-size: 2em;
            font-weight: 700;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            font-size: 1.1em;
            max-width: 600px;
            text-align: center;
            line-height: 1.6;
        }

        /* Estilo de enlaces */
        a {
            color: inherit;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #ffcc80;
            font-weight: bold;
        }

    </style>
</head>
<body class="bodyadmin">
    <div class="admin-sidebar">
        <a href="<?php echo BASE_URL ?>principal">
            <button class="buttonatras">
                <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
                    <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
                </svg>
                <span>Back</span>
            </button>
        </a>
        <h2>Admin Panel</h2>

        <a href="<?php echo BASE_URL ?>categorias" class="admin-menu-item">
            <span class="admin-menu-icon">📁 Categorías</span>
        </a>

        <a href="<?php echo BASE_URL ?>compras" class="admin-menu-item">
            <span class="admin-menu-icon">🛒 Compras</span>
        </a>

        <a href="<?php echo BASE_URL ?>personas" class="admin-menu-item">
            <span class="admin-menu-icon">👥 Personas</span>
        </a>

        <a href="<?php echo BASE_URL ?>productos" class="admin-menu-item">
            <span class="admin-menu-icon">📦 Productos</span>
        </a>
    </div>

    <div class="admin-content">
      <div class="admintablas">
        <?php
        if (isset($_GET['views'])) {
            $ruta = explode("/", $_GET['views']);
            if (in_array($ruta[0], ['categorias', 'editar-categoria', 'nueva-categoria', 'compras', 'productos','personas','nuevo-producto','nueva-compra','nueva-persona', 'editar-producto','editar-persona','editar-compra'])) {
                include "./views/admin/" . $ruta[0] . ".php";
            }
        }
        ?>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo BASE_URL?>views/js/functions_login.js"></script>


</html>
