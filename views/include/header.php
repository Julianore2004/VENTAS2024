<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrito de Compras</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <style>
    body {
      font-family: sniglet;
      background: #E0F7FA;
    }



    .card {
      background-color: #B2EBF2;
    }

    .btn-custom {
      background-color: #0288D1;
      color: rgb(0, 0, 0);
    }

    #cantidad i {

      color: red;

    }

    .discount {
      color: white;
      background: red;
    }
  </style>
  <script>
    const base_url = '<?php echo BASE_URL; ?>';
  </script>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary p-0 text-center">
    <div class="container-fluid" style="background: #0288D1;">
      <img class="imgl me-3" src="./views/plantilla/img/logo.png" alt="" style="height: 60px;">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="Ofer col-1" style="width: 80px;">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item" style="background: white; border-radius: 10px;">
              <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL ?>ofertas">Ofertas</a>
            </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="Ofer col-2 mr-0" style="width: 105px;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item" style="background: white; border-radius: 10px;">
                <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL ?>novedades">Novedades</a>
              </li>
            </ul>
          </div>
          <form class="d-flex w-75 mr-0" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
            <button class="btn btn-light" type="submit" style="border:none;  ">Buscar</button>
          </form>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div style="gap: 5px; margin-left: 20px; display: flex;">
            <a href="<?php echo BASE_URL ?>carrito">
              <img src="./views/plantilla/img/carrito.png" alt="" style="height: 40px;">
            </a>           
            <div class="dropdown ms-3"  style="margin-right: 15px;">
              <button class="btn btn-light dropdown-toggle" type="button" id="userMenuButton" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="./views/plantilla/img/perfil.png" alt="" style="height: 20px;">
                <?php echo isset($_SESSION['sesion_venta_nombres']) ? $_SESSION['sesion_venta_nombres'] : 'Usuario'; ?>
              </button>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenuButton">
                <li><a class="dropdown-item" href="<?php echo BASE_URL ?>miperfil">Mi Perfil</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#" onclick="cerrar_sesion();">Cerrar Sesión</a></li>
              </ul>
            </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
            <div class="Ofer mr-0" >
              <ul class="navbar-nav me-auto  mb-2 mb-lg-0">
                <li class="nav-item text-center" style="background: white; border-radius: 10px;">
                  <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL ?>principal">Inicio</a>
                </li>
              </ul>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar -->