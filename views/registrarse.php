 <div id="LR" class="container vh-100 d-flex justify-content-center align-items-center position-relative">
   <div class="card p-4">
      <div class="text-center mb-1" style="color: #42a5f5;">
        <h2>Registrarse </h2>
      </div>
      <form>
        <div class="form-group">
          <label for="name" class="font-weight-bold">Nombre:</label>
          <input type="text" class="form-control" id="name" placeholder="Nombre completo">
        </div>
        <div class="form-group">
          <label for="email" class="font-weight-bold">Correo electrónico:</label>
          <input type="email" class="form-control" id="email" placeholder="Correo electrónico">
        </div>
        <div class="form-group">
          <label for="password" class="font-weight-bold">Contraseña:</label>
          <input type="password" class="form-control" id="password" placeholder="Contraseña">
        </div>
        <div class="form-group">
          <label for="confirm-password" class="font-weight-bold">Confirmar Contraseña:</label>
          <input type="password" class="form-control" id="confirm-password" placeholder="Confirmar Contraseña">
        </div>
        <div class="text-center mb-2">
          <a href="PPsesioninicida.html" class="btn-custom" style="color: #e3f2fd; text-decoration: none; margin-top: 10px;">Registrarse</a>
        </div>
      </form>
      <div class="text-center mb-2">
      <a href="<?php echo BASE_URL ?>login"  class="">Volver a Login</a>
      </div>
    </div>
  </div>