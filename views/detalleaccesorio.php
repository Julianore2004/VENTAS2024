<div class="container mt-1">
  <div class="menun col-12 mb-1 ">
    <button class="btn btn-info"> <a class="dropdown-item" href="<?php echo BASE_URL ?>index">Inicio/</a></button>
    <button class="btn btn-info"> <a class="dropdown-item" href="<?php echo BASE_URL ?>accesorios">Catalogo/</a></button>
    <button class="btn btn-info"> <a href="">Detalles</a></button>

  </div>
  <div class="row p-3" style="border-radius: 10px; background: white;">
    <div class=" col-md-5 product-images ">
      <div class="product-images col-12">
        <div class="thumbnail-images d-flex flex-column justify-content-between" style="padding: 5px;">
          <img src="https://media-prod-use-1.mirakl.net/SOURCE/9b4140d2a8b246b3bc8d3a65a69bd959"
            onclick="changeImage('https://media-prod-use-1.mirakl.net/SOURCE/9b4140d2a8b246b3bc8d3a65a69bd959')"
            alt="thumb1">
          <img src="https://media-prod-use-1.mirakl.net/SOURCE/71449ab4245b4e8290b2261b33910d80"
            onclick="changeImage('https://media-prod-use-1.mirakl.net/SOURCE/71449ab4245b4e8290b2261b33910d80')"
            alt="thumb2">
          <img src="https://media-prod-use-1.mirakl.net/SOURCE/fbf5235819264e0990e56c9c47600a6b"
            onclick="changeImage('https://media-prod-use-1.mirakl.net/SOURCE/fbf5235819264e0990e56c9c47600a6b')"
            alt="thumb3">
          <img src="https://media-prod-use-1.mirakl.net/SOURCE/97c5b60fd34541b081f5d719ed7d2fcd"
            onclick="changeImage('https://media-prod-use-1.mirakl.net/SOURCE/97c5b60fd34541b081f5d719ed7d2fcd')"
            alt="thumb4">
        </div>
        <div class="main-image-container">
          <img id="mainImage" src="https://media-prod-use-1.mirakl.net/SOURCE/9b4140d2a8b246b3bc8d3a65a69bd959"
            class="main-image  w-100 h-100" alt="Producto">
        </div>
      </div>
    </div>
    <div class="col-md-7">
      <h2>GATILLOS PARA CELULAR BLUE SHARK</h2>
      <p>SE EL MVP DE TU EQUIPO Y MEJORA TUS PARTIDAS CON ESTOS GATILLOS GAMER</p>
      <div style="display: flex;">
        <p class="card-text" style="margin-right: 10px;">Color: </p>
        <div class="color-box" style="background-color: rgb(102, 121, 202); margin-right: 10px;">
        </div>

      </div>
      <span style="font-size: 20px;">
        S/ 29 <span class="discount">-28%</span>
        <span style="font-size: 15px;"><s>S/ 40</s></span>
      </span>

      <div class="d-flex">
        <div class="m-3">
          <a href="<?php echo BASE_URL ?>comentarios" style=" color: rgb(24, 175, 245); font-size: 20px;">
            <button class="btn btn-primary">Comentar</button>
          </a>
        </div>
      </div>
      <div class="d-flex">
        <div class="" style="margin-right: 10px;">
          <a href="<?php echo BASE_URL ?>carrito">
            <button class="btn btn-primary mr-2">Agregar al carrito</button>
          </a>
        </div>
        <div>
          <a href="<?php echo BASE_URL ?>carrito">
            <button class="btn btn-success">Comprar ahora</button></a>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-5">
    <h4>Productos relacionados</h4>
    <!-- Contenido -->
    <div id="productCarousel2" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-3 col-6 mb-4">
              <div class="card h-100">
                <a href="detalleaccesorio.html" style="cursor: pointer;">
                  <img
                    src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/127001295_01/w=800,h=800,fit=pad"
                    class="card-img-top" alt="Producto 1">
                </a>
                <div class="card-body " style="text-align: start;">
                  <p class="text-muted mb-1">GENERICO</p>
                  <h5 class="card-title mb-2">Cargador inalámbrico 3 en 1 de 15W Qi compatible con MagSafe</h5>
                  <p class="card-text">S/ 199<span class="discount">-50%</span></p>
                  <s class="text-muted">S/ 400</s>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
              <div class="card h-100">
                <a href="detalleaccesorio.html" style="cursor: pointer;">
                  <img
                    src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/132241209_01/w=800,h=800,fit=pad"
                    class="card-img-top" alt="Producto 2">
                </a>
                <div class="card-body " style="text-align: start;">
                  <p class="text-muted mb-1">APPLE</p>
                  <h5 class="card-title mb-2">Cable Cargador Apple Tipo C a Lightning 2m iPhone</h5>
                  <p class="card-text">S/ 80<span class="discount">-60%</span></p>
                  <s class="text-muted">S/ 200</s>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
              <div class="card h-100">
                <a href="detalleaccesorio.html" style="cursor: pointer;">
                  <img
                    src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/120861298_02/w=800,h=800,fit=pad"
                    class="card-img-top" alt="Producto 3">
                </a>
                <div class="card-body " style="text-align: start;">
                  <p class="text-muted mb-1">SAMSUNG</p>
                  <h5 class="card-title mb-2">Cargador samsung 45w super fast charging usb-c galaxy s22 s21 not20</h5>
                  <p class="card-text">S/ 99 <span class="discount">-23%</span></p>
                  <s class="text-muted">S/ 129</s>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
              <div class="card h-100">
                <a href="detalleaccesorio.html" style="cursor: pointer;">
                  <img
                    src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/117015992_01/w=800,h=800,fit=pad"
                    class="card-img-top" alt="Producto 4">
                </a>
                <div class="card-body " style="text-align: start;">
                  <p class="text-muted mb-1">KINGSTON</p>
                  <h5 class="card-title mb-2">Memoria Micro SD Kingston 128GB Plus</h5>
                  <p class="card-text">S/ 49.80 <span class="discount">-30%</span></p>
                  <s class="text-muted">S/ 71</s>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-3 col-6 mb-4">
              <div class="card h-100">
                <a href="detalleaccesorio.html" style="cursor: pointer;">

                  <img src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/18179736_1/w=800,h=800,fit=pad"
                    class="card-img-top" alt="Producto 5">
                </a>
                <div class="card-body " style="text-align: start;">
                  <p class="text-muted mb-1">XIAOMI</p>
                  <h5 class="card-title mb-2">Power Bank Xiaomi Redmi 10000 mAh Carga Rápida 2.4A 4 Puertos</h5>
                  <p class="card-text">S/ 89 <span class="discount">-10%</span></p>
                  <s class="text-muted">S/ 99</s>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
              <div class="card h-100">
                <a href="detalleaccesorio.html" style="cursor: pointer;">
                  <img src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/17592855_1/w=800,h=800,fit=pad"
                    class="card-img-top" alt="Producto 6">
                </a>
                <div class="card-body " style="text-align: start;">
                  <p class="text-muted mb-1">APLLE</p>
                  <h5 class="card-title mb-2">Case iPhone 6S Rojo</h5>
                  <p class="card-text">S/ 10 <span class="discount">-50%</span></p>
                  <s class="text-muted">S/ 20</s>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
              <div class="card h-100">
                <a href="detalleaccesorio.html" style="cursor: pointer;">
                  <img
                    src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/114369081_01/w=800,h=800,fit=pad"
                    class="card-img-top" alt="Producto 7">
                </a>
                <div class="card-body " style="text-align: start;">
                  <p class="text-muted mb-1">SKULLCANDY</p>
                  <h5 class="card-title mb-2">Skullcandy Jib True Wireless Audifonos Bluetooth 5.0</h5>
                  <p class="card-text">S/ 119<span class="discount">-48%</span></p>
                  <s class="text-muted">S/ 229</s>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
              <div class="card h-100">
                <a href="detalleaccesorio.html" style="cursor: pointer;">
                  <img
                    src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/118000645_01/w=800,h=800,fit=pad"
                    class="card-img-top" alt="Producto 8">
                </a>
                <div class="card-body " style="text-align: start;">
                  <p class="text-muted mb-1">XIAOMI</p>
                  <h5 class="card-title mb-2">REDMI BUDS 4 COLOR BLANCO</h5>
                  <p class="card-text">S/ 119<span class="discount">-40%</span></p>
                  <s class="text-muted">S/ 199</s>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Controles -->
      <button style="width: 30px; background: rgb(236, 230, 230);" class="carousel-control-prev" type="button"
        data-bs-target="#productCarousel2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button style="width: 30px; background: rgb(236, 230, 230);" class="carousel-control-next" type="button"
        data-bs-target="#productCarousel2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>
<script>
  function changeImage(imageSrc) {
    document.getElementById('mainImage').src = imageSrc;
  }
</script>
<script>
  function changeImage(src) {
    document.getElementById('mainImage').src = src;
  }
  function addToCart() {
    alert("Producto agregado");
  }
</script>

<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>