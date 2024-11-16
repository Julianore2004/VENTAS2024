<!DOCTYPE html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Login</title>

  <style>
    /* From Uiverse.io by mahbowal */
    .bodylogin {
      
      background: linear-gradient(to right, #B3E5FC, #0288D1);
      font-family: Arial, sans-serif;
    }

    .cardlogin {
      display: flex;
      justify-content: center;
      /* Centra horizontalmente */
      align-items: center;
      /* Centra verticalmente */
      height: 100vh;
      /* Asegura que ocupe la altura completa de la pantalla */
    }

    .containerlogin {
      max-width: 350px;
      background: #f8f9fd;
      background: linear-gradient(0deg,
          rgb(255, 255, 255) 0%,
          rgb(244, 247, 251) 100%);
      border-radius: 40px;
      padding: 25px 35px;
      border: 5px solid rgb(255, 255, 255);
      box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;
      margin: 20px;

    }

    .heading {
      text-align: center;
      font-weight: 900;
      font-size: 30px;
      color: rgb(16, 137, 211);
    }

    .form {
      margin-top: 20px;
    }

    .form .input {
      width: 100%;
      background: white;
      border: none;
      padding: 15px 20px;
      border-radius: 20px;
      margin-top: 15px;
      box-shadow: #cff0ff 0px 10px 10px -5px;
      border-inline: 2px solid transparent;
    }

    .form .input::-moz-placeholder {
      color: rgb(170, 170, 170);
    }

    .form .input::placeholder {
      color: rgb(170, 170, 170);
    }

    .form .input:focus {
      outline: none;
      border-inline: 2px solid #12b1d1;
    }

    .form .forgot-password {
      display: block;
      margin-top: 10px;
      margin-left: 10px;
    }

    .form .forgot-password a {
      font-size: 11px;
      color: #0099ff;
      text-decoration: none;
    }

    .form .login-button {
      display: block;
      width: 100%;
      font-weight: bold;
      background: linear-gradient(45deg,
          rgb(16, 137, 211) 0%,
          rgb(18, 177, 209) 100%);
      color: white;
      padding-block: 15px;
      margin: 20px auto;
      border-radius: 20px;
      box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
      border: none;
      transition: all 0.2s ease-in-out;
    }

    .form .login-button:hover {
      transform: scale(1.03);
      box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
    }

    .form .login-button:active {
      transform: scale(0.95);
      box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 15px 10px -10px;
    }

    /* QUITAR SCROLL */
    body::-webkit-scrollbar {
      display: none;
    }
    /* img */
   #LR {
    background-image: url("https://i.pinimg.com/564x/22/5d/71/225d71576031e09383aedd5225f48f63.jpg");
    background-color: #f7f7f7;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    max-width: 100%;
    padding: 0%;
    margin: 0%;
  }
  </style>
  <script>
    const base_url = '<?php echo BASE_URL; ?>';
  </script>
</head>

<body class="bodylogin" style=" background-color: #E0F7FA;">
  <div class="containerlgn ">
    <div id="LR" class="cardlogin  d-flex justify-content-center ">

      <div class="containerlogin">
        <div class="heading">INICIAR SESION</div>
        <form id="frmLogin" class="form" action="">
          <input placeholder="Usuario" id="usuario" name="usuario" type="text" class="input" id="usuario" required="" />
          <input placeholder="Password" id="password" name="password" type="password" class="input" required="" />

          <span class="forgot-password"><a href="<?php echo BASE_URL ?>registrarse">Registrarme</a></span>

          <button value="" type="submit" class="login-button">Entrar</button>

        </form>

      </div>

    </div>

</body>

<script src="<?php echo BASE_URL ?>views/js/functions_login.js"></script>

</html>