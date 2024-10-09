
   <!-- Footer -->
   <footer class="footer bg-light text-center text-lg-start">
    <div class="container p-4">
      <div class="row">
        <!-- Social media section -->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <div>
            <h5 class="d-flex justify-content-center">¡Síguenos!</h5>
          </div>
          <div class="d-flex justify-content-center">
            <a href="https://www.facebook.com/"><img class="mx-2" style="width: 50px;" src="./views/plantilla/img/facebook.png" alt="Facebook"></a>
            <a href="https://www.x.com/"><img class="mx-2" style="width: 80px;" src="./views/plantilla/img/X.png" alt="Twitter"></a>
            <a href="https://www.Instagram.com/"><img class="mx-2" style="width: 50px;" src="./views/plantilla/img/insta.png" alt="Instagram"></a>
          </div>
        </div>

        <!-- Contact information section -->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contacto</h5>
          <p>© 2024 Sakura. Todos los derechos reservados.</p>
          <p>Sakura es una marca registrada.</p>
          <p>Teléfono: 982120236</p>
          <p>Correo electrónico: julianore79@gmail.com</p>
        </div>

        <!-- Help section -->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0 text-center">
          <h5 class="text-uppercase">Ayuda</h5>
          
          <a href="<?php echo BASE_URL ?>centroayuda" style=" cursor: pointer;
      color: rgb(0, 174, 255);">Centro de Ayuda</a>
        </div>
      </div>
    </div>

    <div class="text-center p-3 bg-dark text-white">
      <a href="#" class="text-white">Política de privacidad</a> |
      <a href="#" class="text-white">Términos y condiciones</a>
    </div>
  </footer>
</body>

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
</html>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    function updateQuantity(button, increment) {
      const container = button.closest('.d-flex');
      const input = container.querySelector('input[type="number"]');
      let value = parseInt(input.value, 10);
      value = isNaN(value) ? 0 : value;
      value += increment;
      if (value < 1) value = 1;
      if (value > 10) value = 10;
      input.value = value;
    }

    document.querySelectorAll('.d-flex button').forEach(button => {
      button.addEventListener('click', function () {
        if (this.textContent === '-') {
          updateQuantity(this, -1);
        } else {
          updateQuantity(this, 1);
        }
      });
    });
  });
</script>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
