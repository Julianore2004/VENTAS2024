<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="./views/plantilla/style.css ">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Login</title>
 
</head>
<body style=" background-color: #E0F7FA;">
  <div id="LR" class="container vh-100 d-flex justify-content-center align-items-center position-relative">
   
    <div class="cardlogin p-4">
      <div class="text-center mb-3" style="color: #42a5f5;">
        <h2>Hola</h2>
      </div>
      <form>
        <div class="form-group">
          <label for="email" class="font-weight-bold">Correo electrónico:</label>
          <input type="email" class="form-control" id="email" placeholder="Correo electrónico">
        </div>
        <div class="form-group mb-3">
          <label for="password" class="font-weight-bold">Contraseña:</label>
          <input type="password" class="form-control" id="password" placeholder="Contraseña">
        </div>
        <div class="text-center mb-2">
          <a href="<?php echo BASE_URL ?>index" class="btn-custom" style="color: #e3f2fd; text-decoration: none;">Entrar</a>
        </div>
      </form>
      <div class="text-center mb-2">
      <a href="<?php echo BASE_URL ?>registrarse" class="" style="font-size: 20px;">Registrarme</a>
      </div>
      <div class="text-center mb-3" style="color: #0d47a1;">
        <span>También puedes acceder con:</span>
      </div>
      <div class="d-flex justify-content-center">
        <a href="https://www.facebook.com" class="pr-4">
          <img src="./views/plantilla/img/facebook.png" alt="facebook" class="img-fluid" style="width: 40px; height: 40px; border-radius: 50%;">
        </a>
        <a href="https://myaccount.google.com/" class="ml-4">
          <img src="./views/plantilla/img/GOOGLE.png" alt="google" class="img-fluid" style="width: 40px; height: 40px; border-radius: 50%;">
        </a>
      </div>
    </div>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>