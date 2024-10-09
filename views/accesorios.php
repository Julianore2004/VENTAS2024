<div class="container">
        <div class="menun col-12 mt-1 " > 
            <button class="btn btn-info" > <a class="dropdown-item" href="<?php echo BASE_URL ?>index">Inicio/</a></button>
            <button class="btn btn-info"> <a href="accesorios.html">Catalogo</a></button>
        </div>
        <div class="row ">
            <!-- Filtros -->
            <div  style=" background-color: #E0F7FA; border: none; " class=" col-12 col-md-4 col-lg-3 card filter-card mt-3">
                <div class="p-2 " style="background: #ffffff; border-radius: 10px;">
                    <h5 class="card-title filter-header">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-funnel" viewBox="0 0 16 16">
                            <path
                                d="M1.5 1.5a.5.5 0 0 1 .5-.5h12a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.146.354L9.5 8.207V12.5a.5.5 0 0 1-.276.447l-3 1.5A.5.5 0 0 1 6 14.5v-6.293L1.646 2.854A.5.5 0 0 1 1.5 2.5v-1z" />
                        </svg> FILTROS
                    </h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="filter1" checked>
                        <label class="form-check-label" for="filter1">Funda</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="filter2" checked>
                        <label class="form-check-label" for="filter2">Protector de pantalla</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="filter3" checked>
                        <label class="form-check-label" for="filter3">Auriculares</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="filter4" checked>
                        <label class="form-check-label" for="filter4">Cargador</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="filter5" checked>
                        <label class="form-check-label" for="filter5">Soportes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="filter6" checked>
                        <label class="form-check-label" for="filter6">Tarjetas de memoria</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="filter7" checked>
                        <label class="form-check-label" for="filter7">Adaptadores y cables</label>
                    </div>
                </div>
                <button class="btn btn-primary mt-3 w-100">Aplicar filtros</button>
            </div>
            <!-- Productos -->
            <div class="col-12 col-md-8 col-lg-9 mt-3">
                <div class="row mb-3 "  >
                    <div class="col-12 col-sm-6 col-lg-4 mb-3 " >
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://media-prod-use-1.mirakl.net/SOURCE/9b4140d2a8b246b3bc8d3a65a69bd959"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">GENÉRICO</p>
                                <h5 class="card-title">GATILLOS PARA CELULAR BLUE SHARK</h5>
                                <s class="text-muted">S/ 40</s>
                                <p class="card-text">S/ 29 <span class="discount">-28%</span></p>

                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box"
                                        style="background-color: rgb(3, 105, 240); margin-right: 10px;">
                                    </div>
                                    
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="<?php echo BASE_URL ?>detalleaccesorio">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://home.ripley.com.pe/Attachment/WOP_5/2065327966390/2065327966390_2.jpg"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">APPLE</p>
                                <h5 class="card-title">CABLE APPLE DE CARGA USB-C 240 W - 2 METROS</h5>
                                <s class="text-muted"></s>
                                <p class="card-text">S/ 169 <span class="discount"></span></p>

                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box"
                                        style="background-color: rgb(255, 255, 255); margin-right: 10px;">
                                    </div>

                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo BASE_URL ?>detalleaccesorio">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/1735/PMP20000036887/full_image-3.jpeg"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">Samsung</p>
                                <h5 class="card-title">SAMSUNG GALAXY BUDS2 WIRELESS EARBUDS</h5>
                                <s class="text-muted">S/ 669</s>
                                <p class="card-text">S/ 559 <span class="discount">-16%</span></p>

                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box"
                                        style="background-color: rgb(184, 184, 184); margin-right: 10px;">
                                    </div>
                                    <div class="color-box" style="background-color: rgb(18, 18, 22);"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo BASE_URL ?>detalleaccesorio">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Agrega más tarjetas de productos aquí -->
                </div>
                <div class="row  mb-3">
                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/3943/PMP20000073518/imagen2-1.jpeg"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">GENÉRICO</p>
                                <h5 class="card-title">CONTROL JOYSTICK INALAMBRICO PARA CELULAR-TABLET</h5>
                                <s class="text-muted">S/ 120</s>
                                <p class="card-text">S/ 99 <span class="discount">-18%</span></p>

                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box" style="background-color: rgb(0, 0, 0); margin-right: 10px;">
                                    </div>
                                    
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo BASE_URL ?>detalleaccesorio">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://media-prod-use-1.mirakl.net/SOURCE/7af7555bc4c944bfa9c74f0393c4fe23"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">GENÉRICO</p>
                                <h5 class="card-title">VENTILADOR COOLER PARA CELULAR RECARGABLE</h5>
                                <s class="text-muted">S/ 49</s>
                                <p class="card-text">S/ 39 <span class="discount">-20%</span></p>

                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box" style="background-color: rgb(255, 255, 255); margin-right: 10px;">
                                    </div>
                                    <div class="color-box" style="background-color: rgb(0, 0, 0);"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo BASE_URL ?>detalleaccesorio">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/2213/PMP00002889605/full_image-1.jpeg"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">NEXUS</p>
                                <h5 class="card-title">ADAPTADOR OTG MICRO USB PARA CELULARES</h5>
                                <s class="text-muted"></s>
                                <p class="card-text">S/ 28<span class="discount"></span></p>

                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box" style="background-color: rgb(0, 0, 0); margin-right: 10px;">
                                    </div>
                                    <div class="color-box" style="background-color: rgb(255, 255, 255);"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo BASE_URL ?>detalleaccesorio">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Agrega más tarjetas de productos aquí -->
                </div>
                <div class="row  mb-3">
                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/2958/PMP00003461122/full_image-1.jpg"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">MEMO</p>
                                <h5 class="card-title">COOLER PARA CELULAR VENTILADOR PARA CELULAR Y DEDALES DLA2 MEMO</h5>
                                <s class="text-muted">S/ 99.90</s>
                                <p class="card-text">S/ 79.90<span class="discount">-20%</span></p>

                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box" style="background-color: rgb(0, 0, 0); margin-right: 10px;">
                                    </div>
                                    <div class="color-box" style="background-color: blue;"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo BASE_URL ?>detalleaccesorio">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/3846/PMP20000121748/full_image-1.jpeg"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">GENÉRICO</p>
                                <h5 class="card-title">USB MEMORIA DE 16 GB - YODA</h5>
                                <s class="text-muted">S/ 75</s>
                                <p class="card-text">S/ 49<span class="discount">-35%</span></p>
                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box" style="background-color: forestgreen; margin-right: 10px;">
                                    </div>
                                   </div>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo BASE_URL ?>detalleaccesorio">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/373/PMP00001607428/full_image-1.jpeg"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">XIAOMI</p>
                                <h5 class="card-title">XIAOMI CARGADOR INALAMBRICO VERTICAL DE 20W (SOLO PARA CELULARES COMPATIBLES)</h5>
                                <s class="text-muted">S/ 129</s>
                                <p class="card-text">S/ 69 <span class="discount">-47%</span></p>

                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box" style="background-color: rgb(248, 248, 248); margin-right: 10px;">
                                    </div>
                                    <div class="color-box" style="background-color: rgb(0, 0, 0);"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo BASE_URL ?>detalleaccesorio">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Agrega más tarjetas de productos aquí -->
                </div>
                <div class="row mb-4">
                    <div class="col-12 col-sm-6 col-lg-4  mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://media-prod-use-1.mirakl.net/SOURCE/9b4140d2a8b246b3bc8d3a65a69bd959"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">GENÉRICO</p>
                                <h5 class="card-title">GATILLOS PARA CELULAR BLUE SHARK</h5>
                                <s class="text-muted">S/ 40</s>
                                <p class="card-text">S/ 29 <span class="discount">-28%</span></p>

                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box"
                                        style="background-color: rgb(3, 105, 240); margin-right: 10px;">
                                    </div>
                                    
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo BASE_URL ?>detalleaccesorio">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://home.ripley.com.pe/Attachment/WOP_5/2065327966390/2065327966390_2.jpg"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">APPLE</p>
                                <h5 class="card-title">CABLE APPLE DE CARGA USB-C 240 W - 2 METROS</h5>
                                <s class="text-muted"></s>
                                <p class="card-text">S/ 169 <span class="discount"></span></p>

                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box"
                                        style="background-color: rgb(255, 255, 255); margin-right: 10px;">
                                    </div>

                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo BASE_URL ?>detalleaccesorio">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/1735/PMP20000036887/full_image-3.jpeg"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">Samsung</p>
                                <h5 class="card-title">SAMSUNG GALAXY BUDS2 WIRELESS EARBUDS</h5>
                                <s class="text-muted">S/ 669</s>
                                <p class="card-text">S/ 559 <span class="discount">-16%</span></p>

                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box"
                                        style="background-color: rgb(184, 184, 184); margin-right: 10px;">
                                    </div>
                                    <div class="color-box" style="background-color: rgb(18, 18, 22);"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo BASE_URL ?>detalleaccesorio">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Agrega más tarjetas de productos aquí -->
                </div>
                <div class="row  mb-3">
                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/3943/PMP20000073518/imagen2-1.jpeg"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">GENÉRICO</p>
                                <h5 class="card-title">CONTROL JOYSTICK INALAMBRICO PARA CELULAR-TABLET</h5>
                                <s class="text-muted">S/ 120</s>
                                <p class="card-text">S/ 99 <span class="discount">-18%</span></p>

                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box" style="background-color: rgb(0, 0, 0); margin-right: 10px;">
                                    </div>
                                    
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo BASE_URL ?>detalleaccesorio">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://media-prod-use-1.mirakl.net/SOURCE/7af7555bc4c944bfa9c74f0393c4fe23"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">GENÉRICO</p>
                                <h5 class="card-title">VENTILADOR COOLER PARA CELULAR RECARGABLE</h5>
                                <s class="text-muted">S/ 49</s>
                                <p class="card-text">S/ 39 <span class="discount">-20%</span></p>

                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box" style="background-color: rgb(255, 255, 255); margin-right: 10px;">
                                    </div>
                                    <div class="color-box" style="background-color: rgb(0, 0, 0);"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo BASE_URL ?>detalleaccesorio">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/2213/PMP00002889605/full_image-1.jpeg"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">NEXUS</p>
                                <h5 class="card-title">ADAPTADOR OTG MICRO USB PARA CELULARES</h5>
                                <s class="text-muted"></s>
                                <p class="card-text">S/ 28<span class="discount"></span></p>

                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box" style="background-color: rgb(0, 0, 0); margin-right: 10px;">
                                    </div>
                                    <div class="color-box" style="background-color: rgb(255, 255, 255);"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="detalleaccesorio.html">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
                                    <a href="carrito.html">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Agrega más tarjetas de productos aquí -->
                </div>
                <div class="row  mb-3">
                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/2958/PMP00003461122/full_image-1.jpg"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">MEMO</p>
                                <h5 class="card-title">COOLER PARA CELULAR VENTILADOR PARA CELULAR Y DEDALES DLA2 MEMO</h5>
                                <s class="text-muted">S/ 99.90</s>
                                <p class="card-text">S/ 79.90<span class="discount">-20%</span></p>

                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box" style="background-color: rgb(0, 0, 0); margin-right: 10px;">
                                    </div>
                                    <div class="color-box" style="background-color: blue;"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo BASE_URL ?>detalleaccesorio">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/3846/PMP20000121748/full_image-1.jpeg"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">GENÉRICO</p>
                                <h5 class="card-title">USB MEMORIA DE 16 GB - YODA</h5>
                                <s class="text-muted">S/ 75</s>
                                <p class="card-text">S/ 49<span class="discount">-35%</span></p>
                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box" style="background-color: forestgreen; margin-right: 10px;">
                                    </div>
                                   </div>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo BASE_URL ?>detalleaccesorio">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
                                    <a href="<?php echo BASE_URL ?>carrito">
                                        <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card product-card card h-100 " style="background-color: white;">
                            <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/373/PMP00001607428/full_image-1.jpeg"
                                class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <p class="text-muted mb-1">XIAOMI</p>
                                <h5 class="card-title">XIAOMI CARGADOR INALAMBRICO VERTICAL DE 20W (SOLO PARA CELULARES COMPATIBLES)</h5>
                                <s class="text-muted">S/ 129</s>
                                <p class="card-text">S/ 69 <span class="discount">-47%</span></p>

                                <div style="display: flex;">
                                    <p class="card-text" style="margin-right: 10px;">Color: </p>
                                    <div class="color-box" style="background-color: rgb(248, 248, 248); margin-right: 10px;">
                                    </div>
                                    <div class="color-box" style="background-color: rgb(0, 0, 0);"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo BASE_URL ?>detalleaccesorio">
                                        <button class="btn btn-primary btn-sm">Ver Detalles</button>
                                    </a>
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