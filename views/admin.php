<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo</title>
    <link rel="stylesheet" href="./css/style.css">

</head>

<body class="bodyadmin">
    <div class="admin-sidebar">
        <h2>Admin Panel</h2>

        <!-- Menú de Categorías -->
        <div class="admin-menu-item" onclick="toggleMenu('categorias')">
            <span class="admin-menu-icon">📁</span>Categorías
        </div>
        <div class="admin-submenu" id="categorias">
            <a href="/Ventas2024/views/admin/categoria/listar.php">Ver Categorías</a>
            <a href="#" onclick="mostrarFormulario('nueva-categoria.php')">Registrar Categoría</a>
        </div>
        <!-- Menú de Compras -->
        <div class="admin-menu-item" onclick="toggleMenu('compras')">
            <span class="admin-menu-icon">🛒</span>Compras
        </div>
        <div class="admin-submenu" id="compras">
            <a href="/Ventas2024/views/admin/compras/listar.php">Ver Compras</a>
            <a href="#" onclick="mostrarFormulario('nueva-compra.php')">Registrar Compra</a>
        </div>

        <!-- Menú de Ventas -->
        <div class="admin-menu-item" onclick="toggleMenu('ventas')">
            <span class="admin-menu-icon">📊</span>Ventas
        </div>
        <div class="admin-submenu" id="ventas">
            <a href="/Ventas2024/views/admin/venta/listar.php">Ver Ventas</a>
            <a href="/Ventas2024/views/admin/venta/insertar.php">Registrar Venta</a>
        </div>

        <!-- Menú de Pagos -->
        <div class="admin-menu-item" onclick="toggleMenu('pagos')">
            <span class="admin-menu-icon">💳</span>Pagos
        </div>
        <div class="admin-submenu" id="pagos">
            <a href="/Ventas2024/views/admin/pagos/listar.php">Ver Pagos</a>
            <a href="/Ventas2024/views/admin/pagos/insertar.php">Registrar Pago</a>
        </div>

        <!-- Menú de Personas -->
        <div class="admin-menu-item" onclick="toggleMenu('personas')">
            <span class="admin-menu-icon">👥</span>Personas
        </div>
        <div class="admin-submenu" id="personas">
            <a href="/Ventas2024/views/admin/persona/listar.php">Ver Personas</a>
            <a href="#" onclick="mostrarFormulario('nueva-persona.php')">Registrar Persona</a>

        </div>

        <!-- Menú de Productos -->
        <div class="admin-menu-item" onclick="toggleMenu('productos')">
            <span class="admin-menu-icon">📦</span>Productos
        </div>
        <div class="admin-submenu" id="productos">
            <a href="/Ventas2024/views/admin/producto/listar.php">Ver Productos</a>
            <a href="#" onclick="mostrarFormulario('nuevo-producto.php')">Registrar Producto</a>
        </div>

        <!-- Menú de Sesiones -->
        <div class="admin-menu-item" onclick="toggleMenu('sesiones')">
            <span class="admin-menu-icon">🔒</span>Sesiones
        </div>
        <div class="admin-submenu" id="sesiones">
            <a href="/Ventas2024/views/admin/sesiones/listar.php">Ver Sesiones</a>
            <a href="/Ventas2024/views/admin/sesiones/insertar.php">Registrar Sesión</a>
        </div>
    </div>

    <div class="fondo-opaco" style="display:none;"></div>

    <div class="admin-content">
        <h1>Bienvenido al Panel Administrativo</h1>
        <p>Selecciona una opción en el menú de la izquierda para comenzar.</p>
    </div>

    <!-- Fondo opaco y contenedor del formulario -->
    <div id="fondo-opaco" class="fondo-opaco" onclick="ocultarFormulario()"></div>
    <div id="contenedor-formulario" class="contenedor-formulario">

        <div id="contenido-formulario"></div>
        <button class="boton-cancelar" onclick="ocultarFormulario()">Cancelar</button>
    </div>

    <script>
        function mostrarFormulario(url) {
            fetch(`/Ventas2024/views/${url}`)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('contenido-formulario').innerHTML = data;
                    document.getElementById('fondo-opaco').style.display = 'block';
                    document.getElementById('contenedor-formulario').style.display = 'block';

                    // Ahora que el formulario está cargado, ejecutamos las funciones para listar productos y trabajadores
                    listar_productos();  // Llamada para cargar los productos
                    listar_trabajadores();  // Llamada para cargar los trabajadores

                    listar_categorias();
                    listar_proveedores();
                })
                .catch(error => console.error("Error al cargar el formulario:", error));
        }
        function ocultarFormulario() {
            document.getElementById('fondo-opaco').style.display = 'none';
            document.getElementById('contenedor-formulario').style.display = 'none';
        }
    </script>

    <script>
        // Función para mostrar y ocultar submenús con animación suave
        function toggleMenu(id) {
            var submenu = document.getElementById(id);
            submenu.classList.toggle("admin-submenu-active");
        }
    </script>


</body>

<script>
    const base_url = "/Ventas2024/"; // Asegúrate de ajustar esta ruta según tu proyecto
</script>
<script src="/Ventas2024/views/js/functions_categorias.js"></script>

<script src="/Ventas2024/views/js/functions_compras.js"></script>
<script src="<?php echo BASE_URL ?>views/js/functions_personas.js"></script>
<script src="/Ventas2024/views/js/functions_productos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>