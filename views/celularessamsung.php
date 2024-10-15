
<div class="container">
        <div class="menun col-12 mt-1 ">
            <button class="btn btn-info"> <a href="PPsesioninicida.html">Inicio/</a></button>
            <button class="btn btn-info"> <a href="#">Catalogo/</a></button>

          </div>
        <div class="row ">
            <!-- Filtros -->
            <div style="border: none; background-color: #E0F7FA;" class="col-12 col-md-4 col-lg-3 card filter-card mt-3">
                <h5 class="card-title filter-header text-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-funnel" viewBox="0 0 16 16">
                        <path
                            d="M1.5 1.5a.5.5 0 0 1 .5-.5h12a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.146.354L9.5 8.207V12.5a.5.5 0 0 1-.276.447l-3 1.5A.5.5 0 0 1 6 14.5v-6.293L1.646 2.854A.5.5 0 0 1 1.5 2.5v-1z" />
                    </svg> FILTROS
                </h5>
                <div class="accordion" id="filtersAccordion">
                    <!-- Marca -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingMarca">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseMarca" aria-expanded="false" aria-controls="collapseMarca">
                                Marca
                            </button>
                        </h2>
                        <div style="margin-left: 50px;">
                        <input class="ml-3 mb-2 col-9" style="height: 25px; border-radius: 10px; font-size: 15px;"type="search" value="Samsung">
                    </div>
                        <div id="collapseMarca" class="accordion-collapse collapse" aria-labelledby="headingMarca"
                            data-bs-parent="#filtersAccordion">
                            <div class="accordion-body">
                                <a class="dropdown-item" href="#">Xiaomi</a>
                                <a class="dropdown-item" href="#">Samsung</a>
                                <a class="dropdown-item" href="#">Apple</a>
                                <a class="dropdown-item" href="#">Motorola</a>
                                <a class="dropdown-item" href="#">Google</a>
                                <a class="dropdown-item" href="#">Honor</a>
                            </div>
                        </div>
                    </div>
                    <!-- Precio -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingPrecio">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsePrecio" aria-expanded="false" aria-controls="collapsePrecio">
                                Precio
                            </button>
                        </h2>
                        <div id="collapsePrecio" class="accordion-collapse collapse" aria-labelledby="headingPrecio"
                            data-bs-parent="#filtersAccordion">
                            <div class="accordion-body d-flex flex-column align-items-sm-start">
                                <a class="dropdown-item" href="#">S/500-S/ 1000</a>
                                <a class="dropdown-item" href="#">S/1000-S/ 1500</a>
                                <a class="dropdown-item" href="#">S/1500-S/2000</a>
                            </div>
                        </div>
                    </div>

                    <!-- Color -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingColor">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseColor" aria-expanded="false" aria-controls="collapseColor">
                                Color
                            </button>
                        </h2>
                        <div id="collapseColor" class="accordion-collapse collapse" aria-labelledby="headingColor"
                            data-bs-parent="#filtersAccordion">
                            <div class="accordion-body">
                                <a class="dropdown-item" href="#">Negro</a>
                                <a class="dropdown-item" href="#">Blanco</a>
                                <a class="dropdown-item" href="#">Azul</a>
                            </div>
                        </div>
                    </div>
                    <!-- RAM -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingRam">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseRam" aria-expanded="false" aria-controls="collapseRam">
                                Memoria RAM
                            </button>
                        </h2>
                        <div id="collapseRam" class="accordion-collapse collapse" aria-labelledby="headingRam"
                            data-bs-parent="#filtersAccordion">
                            <div class="accordion-body">
                                <a class="dropdown-item" href="#">4GB</a>
                                <a class="dropdown-item" href="#">8GB</a>
                                <a class="dropdown-item" href="#">12GB</a>
                            </div>
                        </div>
                    </div>
                    <!-- SIM -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSim">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSim" aria-expanded="false" aria-controls="collapseSim">
                                SIM
                            </button>
                        </h2>
                        <div id="collapseSim" class="accordion-collapse collapse" aria-labelledby="headingSim"
                            data-bs-parent="#filtersAccordion">
                            <div class="accordion-body">
                                <a class="dropdown-item" href="#">Dual SIM</a>
                                <a class="dropdown-item" href="#">Single SIM</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tamaño de pantalla -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingPantalla">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsePantalla" aria-expanded="false"
                                aria-controls="collapsePantalla">
                                Tamaño de pantalla
                            </button>
                        </h2>
                        <div id="collapsePantalla" class="accordion-collapse collapse" aria-labelledby="headingPantalla"
                            data-bs-parent="#filtersAccordion">
                            <div class="accordion-body">
                                <a class="dropdown-item" href="#">5" - 5.5"</a>
                                <a class="dropdown-item" href="#">5.5" - 6"</a>
                                <a class="dropdown-item" href="#">6" - 6.5"</a>
                            </div>
                        </div>
                    </div>
                    <!-- Resistente al agua -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingAgua">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseAgua" aria-expanded="false" aria-controls="collapseAgua">
                                Resistente al agua
                            </button>
                        </h2>
                        <div id="collapseAgua" class="accordion-collapse collapse" aria-labelledby="headingAgua"
                            data-bs-parent="#filtersAccordion">
                            <div class="accordion-body">
                                <a class="dropdown-item" href="#">Sí</a>
                                <a class="dropdown-item" href="#">No</a>
                            </div>
                        </div>
                    </div>
                    <!-- Entrada de audio -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingAudio">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseAudio" aria-expanded="false" aria-controls="collapseAudio">
                                Entrada de audio
                            </button>
                        </h2>
                        <div id="collapseAudio" class="accordion-collapse collapse" aria-labelledby="headingAudio"
                            data-bs-parent="#filtersAccordion">
                            <div class="accordion-body">
                                <a class="dropdown-item" href="#">Sí</a>
                                <a class="dropdown-item" href="#">No</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mt-3 w-100">Aplicar filtros</button>
            </div>
            <!-- Productos -->
            <div class="col-12 col-md-8 col-lg-9 mt-3">
                <div class="row ">
                <div class="row mb-3">
                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/2832/PMP20000153816/imagen3-1.jpeg"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">SAMSUNG</p>
                                <h5 class="card-title">CELULAR SAMSUNG GALAXY S24 ULTRA 256GB 12GB RAM GRIS</h5>
                                <s class="text-muted">S/ 5,699</s>
                                <p class="card-text">S/ 4,499<span class="discount">-21%</span></p>

                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box"
                                        style="background-color: rgb(179, 179, 179); margin-right: 10px;">
                                    </div>

                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>


                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detallesproducto.html">
                                <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detallesproducto.html">
                                <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>


                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detallesproducto.html">
                                        <button class="btn btn-primary btn-sm">Ver </button>
                                <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detallesproducto.html">
                                        <button class="btn btn-primary btn-sm">Ver </button>
                                <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detallesproducto.html">
                                        <button class="btn btn-primary btn-sm">Ver </button>
                                <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detallesproducto.html">
                                        <button class="btn btn-primary btn-sm">Ver </button>
                                <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detallesproducto.html">
                                        <button class="btn btn-primary btn-sm">Ver </button>
                                <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detallesproducto.html">
                                        <button class="btn btn-primary btn-sm">Ver </button>
                                <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>

                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detallesproducto.html">
                                <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>


                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detallesproducto.html">
                                <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detallesproducto.html">
                                <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>


                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detallesproducto.html">
                                        <button class="btn btn-primary btn-sm">Ver </button>
                                <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detallesproducto.html">
                                        <button class="btn btn-primary btn-sm">Ver </button>
                                <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detallesproducto.html">
                                        <button class="btn btn-primary btn-sm">Ver </button>
                                <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detallesproducto.html">
                                        <button class="btn btn-primary btn-sm">Ver </button>
                                <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detallesproducto.html">
                                        <button class="btn btn-primary btn-sm">Ver </button>
                                <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detallesproducto.html">
                                        <button class="btn btn-primary btn-sm">Ver </button>
                                <a href="<?php echo BASE_URL ?>detalleproducto">
                                        <button class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    <a href="carrito.html">
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Agrega más tarjetas de productos aquí -->
                </div>
            </div>
            </div>
        </div>
    </div>
