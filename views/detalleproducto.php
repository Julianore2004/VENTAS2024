  
  <style>
      /* DETALLE PRODUCTO */
   .thumbnail-images img {
    cursor: pointer;
    width: 60px;
    margin: 5px 0;
  }

  .main-image-container {
    text-align: center;
  }

  .product-images {
    display: flex;

  }

  .thumbnail-images {
    margin-right: 5px;
  }

  .discount {
    color: white;
    background: red;
  }


  .color-box {
    width: 30px;
    height: 30px;
    border: 1px solid #ccc;
    display: inline-block;
  }

  .discount {
    color: white;
    background: red;
  }

  .menun a {
    text-decoration: none;
    color: black;
  }
  </style>
  <div class="container mt-1">
    <div class="menun col-12 mb-1 ">
      <button class="btn btn-info">  <a class="dropdown-item" href="<?php echo BASE_URL ?>index">Inicio/</a></button>
      <button class="btn btn-info">  <a class="dropdown-item" href="<?php echo BASE_URL ?>celularessamsung">Catalogo/</a></button>

      <button class="btn btn-info"> <a href="#">Detalles</a></button>

    </div>
    <div class="row p-3" style="border-radius: 10px; background: white;">
      <div class=" col-md-5 product-images ">
        <div class="thumbnail-images d-flex flex-column justify-content-between"
          style="padding: 5px; background-color: #E0F7FA; ">
          <img src="https://home.ripley.com.pe/Attachment/WOP_5/2065329981971/2065329981971_2.jpg"
            onclick="changeImage('https://home.ripley.com.pe/Attachment/WOP_5/2065329981971/2065329981971_2.jpg')"
            alt="thumb1">
          <img src="https://home.ripley.com.pe/Attachment/WOP_5/2065329981971/2065329981971-1.jpg"
            onclick="changeImage('https://home.ripley.com.pe/Attachment/WOP_5/2065329981971/2065329981971-1.jpg')"
            alt="thumb2">
          <img src="https://home.ripley.com.pe/Attachment/WOP_5/2065329981971/2065329981971-4.jpg"
            onclick="changeImage('https://home.ripley.com.pe/Attachment/WOP_5/2065329981971/2065329981971-4.jpg')"
            alt="thumb3">
          <img src="https://home.ripley.com.pe/Attachment/WOP_5/2065329981971/2065329981971-9.jpg"
            onclick="changeImage('https://home.ripley.com.pe/Attachment/WOP_5/2065329981971/2065329981971-9.jpg')"
            alt="thumb1">

        </div>
        <div class="main-image-container ">
          <img id="mainImage" src="https://home.ripley.com.pe/Attachment/WOP_5/2065329981971/2065329981971_2.jpg"
            class="main-image w-100 h-100" alt="Producto">
        </div>
      </div>
      <div class="col-md-7 pt-4">
        <h2>CELULAR XIAOMI REDMI NOTE 13 PRO 256GB 8GB RAM LAVANDER PURPLE</h2>
        <p>256GB 8GB RAM - LAVANDER PURPLE</p>
        <div style="display: flex;">
          <p class="card-text" style="margin-right: 10px;">Color: </p>
          <div class="color-box" style="background-color: rgb(185, 143, 233); margin-right: 10px;">
          </div>

        </div>
        <span style="font-size: 20px;">
          S/ 1,199<span class="discount">-15%</span>
          <span style="font-size: 15px;"><s>S/ 1,299</s></span>
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
      <div class="ml-4">
        <h3>Productos relacionados:</h3>
      </div>

      <div id="productCarousel1" class="carousel slide col-12 " data-bs-ride="carousel" data-bs-interval="9000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row ">
              <div class="col-md-3 col-6 mb-4">
                <div class="card h-100 " style="background-color: white;">
                <a href="<?php echo BASE_URL ?>detalleproducto" style="cursor: pointer;">
                  <img src="https://www.falabella.com.pe/cdn-cgi/imagedelivery/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/20178935_02/width=170,height=170,quality=70,format=webp,fit=pad"
                    class="card-img-top" alt="Producto 1">
                  </a>
                    <div class="card-body " style="text-align: start;">
                    <p class="text-muted mb-1">Samsung</p>
                    <h5 class="card-title mb-2">Celular Galaxy S24 256GB</h5>
                    <p class="card-text">S/ 3,299 <span class="discount">-21%</span></p>
                    <s class="text-muted">S/ 4,199</s>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6 mb-4">
                <div class="card h-100" style="background-color: white;">
                  <a href="<?php echo BASE_URL ?>detalleproducto"  style="cursor: pointer;">
                  <img
                    src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/20185279_01/w=800,h=800,fit=pad"
                    class="card-img-top" alt="Producto 2">
                  </a>
                    <div class="card-body " style="text-align: start;">
                    <p class="text-muted mb-1">Samsung</p>
                    <h5 class="card-title mb-2">Celular Samsung Galaxy A15 8GB RAM 256GB</h5>
                    <p class="card-text">S/ 779 </span></p>
                    <s class="text-muted">S/ 799</s>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6 mb-4">
                <div class="card h-100" style="background-color: white;">
                  <a href="<?php echo BASE_URL ?>detalleproducto"  style="cursor: pointer;">
                  <img src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/20181323_1/w=800,h=800,fit=pad"
                    class="card-img-top" alt="Producto 3">
                  </a>
                    <div class="card-body " style="text-align: start;">
                    <p class="text-muted mb-1">XIAOMI</p>
                    <h5 class="card-title mb-2">Celular Xiaomi Redmi Note 13 8GB 256GB</h5>
                    <p class="card-text">S/ 899 <span class="discount">-5%</span></p>
                    <s class="text-muted">S/ 949</s>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6 mb-4">
                <div class="card h-100" style="background-color: white;">
                  <a href="<?php echo BASE_URL ?>detalleproducto"  style="cursor: pointer;">
                  <img src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/19316356_1/w=800,h=800,fit=pad"
                    class="card-img-top" alt="Producto 4">
                  </a>
                    <div class="card-body " style="text-align: start;">
                    <p class="text-muted mb-1">APPLE</p>
                    <h5 class="card-title mb-2">Apple Iphone 14 128gb</h5>
                    <p class="card-text">S/ 3,799<span class="discount">-24%</span></p>
                    <s class="text-muted">S/ 4,999</s>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row ">
              <div class="col-md-3 col-6 mb-4">
                <div class="card h-100" style="background-color: white;">
                  <a href="<?php echo BASE_URL ?>detalleproducto"  style="cursor: pointer;">
                  <img src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/20154189_1/w=800,h=800,fit=pad"
                    class="card-img-top" alt="Producto 5">
                  </a>
                    <div class="card-body " style="text-align: start;">
                    <p class="text-muted mb-1">HONOR</p>
                    <h5 class="card-title mb-2">Celular Honor X8b 8GB 256GB.</h5>
                    <p class="card-text">S/ 899<span class="discount">-18%</span></p>
                    <s class="text-muted">S/ 1,099</s>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6 mb-4">
                <div class="card h-100" style="background-color: white;">
                  <a href="<?php echo BASE_URL ?>detalleproducto"  style="cursor: pointer;">
                  <img src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/tottusPE/43260237_2/w=800,h=800,fit=pad"
                    class="card-img-top" alt="Producto 6">
                  </a>
                    <div class="card-body " style="text-align: start;">
                    <p class="text-muted mb-1">MOTOROLA</p>
                    <h5 class="card-title mb-2">Smartphone Moto G24 4+256 Gris</h5>
                    <p class="card-text">S/ 499<span class="discount">-9%</span></p>
                    <s class="text-muted">S/ 549</s>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6 mb-4">
                <div class="card h-100" style="background-color: white;">
                  <a href="<?php echo BASE_URL ?>detalleproducto"  style="cursor: pointer;">
                  <img
                    src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/128025704_01/w=800,h=800,fit=pad"
                    class="card-img-top" alt="Producto 7">
                  </a>
                    <div class="card-body " style="text-align: start;">
                    <p class="text-muted mb-1">XIAOMI</p>
                    <h5 class="card-title mb-2">POCO X6 Pro 5G 12GB512GB - Gris</h5>
                    <p class="card-text">S/ 1,549<span class="discount">-14%</span></p>
                    <s class="text-muted">S/ 1,799</s>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6 mb-4">
                <div class="card h-100" style="background-color: white;">
                  <a href="<?php echo BASE_URL ?>detalleproducto" style="cursor: pointer;">
                  <img
                    src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/128397919_01/w=800,h=800,fit=pad"
                    class="card-img-top" alt="Producto 8">
                  </a>
                    <div class="card-body " style="text-align: start;">
                    <p class="text-muted mb-1">XIAOMI</p>
                    <h5 class="card-title mb-2">POCO X6 Pro 5G Black 12GB RAM 512GB ROM </h5>
                    <p class="card-text">S/ 1,499<span class="discount">-17%</span></p>
                    <s class="text-muted">S/ 1,799</s>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Controles -->
        <button style="width: 30px; background: rgb(236, 230, 230);" class="carousel-control-prev" type="button"
          data-bs-target="#productCarousel1" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button style="width: 30px; background: rgb(212, 212, 212);" class="carousel-control-next" type="button"
          data-bs-target="#productCarousel1" data-bs-slide="next">
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




<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
