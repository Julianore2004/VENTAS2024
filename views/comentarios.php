<style>
    .star-rating {
        direction: rtl;
        display: inline-block;
        padding: 20px;
    }
    .star-rating input[type="radio"] {
        display: none;
    }
    .star-rating label {
        color: #bbb;
        font-size: 25px;
        padding: 0;
        cursor: pointer;
        transition: all .3s ease-in-out;
    }
    .star-rating input[type="radio"]:checked ~ label,
    .star-rating label:hover,
    .star-rating label:hover ~ label {
        color: #f2b600;
    }
    .comment-item {
        margin-bottom: 15px;
    }
    .comment-item .rating {
        color: #f2b600;
    }
    .comment-section {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .comment-list {
        width: 75%;
    }
    .container-custom {
        margin-top: 40px;
       
       
        display: flex;
        justify-content: center;
    }
    .row-custom {
        display: flex;
        flex-wrap: wrap;
        
    }
    .col-custom {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .text-center-custom {
        text-align: center;
    }
    .mb-4-custom {
        margin-bottom: 24px;
        
      
    }
    .card-custom {
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 24px;
        background: white;
      
    }
    .card-body-custom {
        padding: 16px;
    }
    .card-title-custom {
        font-size: 1.25rem;
        margin-bottom: 16px;
    }
    .form-group-custom {
        margin-bottom: 16px;
    }
    .form-control-custom {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .btn-custom {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .btn-custom:hover {
        background-color: #0056b3;
    }
    .d-flex-custom {
        display: flex;
        justify-content: space-between;
    }
      /* From Uiverse.io by LeonKohli */ 
.radio {
  display: flex;
  justify-content: center;
  gap: 10px;
  flex-direction: row-reverse;
}

.radio > input {
  position: absolute;
  appearance: none;
}

.radio > label {
  cursor: pointer;
  font-size: 30px;
  position: relative;
  display: inline-block;
  transition: transform 0.3s ease;
}

.radio > label > svg {
  fill: #666;
  transition: fill 0.3s ease;
}

.radio > label::before,
.radio > label::after {
  content: "";
  position: absolute;
  width: 6px;
  height: 6px;
  background-color: #ff9e0b;
  border-radius: 50%;
  opacity: 0;
  transform: scale(0);
  transition:
    transform 0.4s ease,
    opacity 0.4s ease;
  animation: particle-explosion 1s ease-out;
}

.radio > label::before {
  top: -15px;
  left: 50%;
  transform: translateX(-50%) scale(0);
}

.radio > label::after {
  bottom: -15px;
  left: 50%;
  transform: translateX(-50%) scale(0);
}

.radio > label:hover::before,
.radio > label:hover::after {
  opacity: 1;
  transform: translateX(-50%) scale(1.5);
}

.radio > label:hover {
  transform: scale(1.2);
  animation: pulse 0.6s infinite alternate;
}

.radio > label:hover > svg,
.radio > label:hover ~ label > svg {
  fill: #ff9e0b;
  filter: drop-shadow(0 0 15px rgba(255, 158, 11, 0.9));
  animation: shimmer 1s ease infinite alternate;
}

.radio > input:checked + label > svg,
.radio > input:checked + label ~ label > svg {
  fill: #ff9e0b;
  filter: drop-shadow(0 0 15px rgba(255, 158, 11, 0.9));
  animation: pulse 0.8s infinite alternate;
}

@keyframes pulse {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(1.1);
  }
}

@keyframes particle-explosion {
  0% {
    opacity: 0;
    transform: scale(0.5);
  }
  50% {
    opacity: 1;
    transform: scale(1.2);
  }
  100% {
    opacity: 0;
    transform: scale(0.5);
  }
}

@keyframes shimmer {
  0% {
    filter: drop-shadow(0 0 10px rgba(255, 158, 11, 0.5));
  }
  100% {
    filter: drop-shadow(0 0 20px rgba(255, 158, 11, 1));
  }
}

.radio > input:checked + label:hover > svg,
.radio > input:checked + label:hover ~ label > svg {
  fill: #e58e09;
}

.radio > label:hover > svg,
.radio > label:hover ~ label > svg {
  fill: #ff9e0b;
}

.radio input:checked ~ label svg {
  fill: #ffa723;
}

</style>

<body style="font-family: 'Sniglet', cursive; background: #e0f7fa;">
<div class="menun col-12 mt-1 ">
    <button class="btn btn-info"> <a class="dropdown-item" href="<?php echo BASE_URL ?>detalleaccesorio">Atras</a></button>
   
  </div>
<div class="container-custom">
    
    <div class="row-custom">
        <div class="col-custom">
            <h1 class="text-center-custom mb-4-custom">Gracias por tu comentario y calificación</h1>
            <div class="card-custom mb-4-custom">
                <div class="card-body-custom">
                    <h5 class="card-title-custom">GATILLOS PARA CELULAR BLUE SHARK</h5>
                    <form>
                        <div class="form-group-custom">
                            <label for="rating">Calificación:</label>
                           
                           
<div class="radio">
  <input id="rating-5" type="radio" name="rating" value="5" />
  <label for="rating-5" title="5 stars">
    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
      ></path>
    </svg>
  </label>

  <input id="rating-4" type="radio" name="rating" value="4" />
  <label for="rating-4" title="4 stars">
    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
      ></path>
    </svg>
  </label>

  <input id="rating-3" type="radio" name="rating" value="3" />
  <label for="rating-3" title="3 stars">
    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
      ></path>
    </svg>
  </label>

  <input id="rating-2" type="radio" name="rating" value="2" />
  <label for="rating-2" title="2 stars">
    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
      ></path>
    </svg>
  </label>

  <input id="rating-1" type="radio" name="rating" value="1" />
  <label for="rating-1" title="1 star">
    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
      ></path>
    </svg>
  </label>
</div>

                          
                        </div>
                        <div class="form-group-custom">
                            <label for="comment">Comentario:</label>
                            <textarea class="form-control-custom" id="comment" rows="3" placeholder="Escribe tu comentario aquí"></textarea>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn-custom">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="comment-section mt-4">
                <div>
                    <h4>Comentarios</h4>
                </div>
                <div class="comment-list">
                    <div class="card-custom comment-item">
                        <div class="card-body-custom">
                            <div class="d-flex-custom">
                                <span><strong>Juan Pérez:</strong> Excelente celular, muy recomendable.</span>
                                <span class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-custom comment-item">
                        <div class="card-body-custom">
                            <div class="d-flex-custom">
                                <span><strong>Ana García:</strong> Buen rendimiento, pero la batería dura poco.</span>
                                <span class="rating">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-custom comment-item">
                        <div class="card-body-custom">
                            <div class="d-flex-custom">
                                <span><strong>Carlos López:</strong> La cámara es increíble, fotos de alta calidad.</span>
                                <span class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-custom comment-item">
                        <div class="card-body-custom">
                            <div class="d-flex-custom">
                                <span><strong>María Rodríguez:</strong> El diseño es muy elegante y moderno.</span>
                                <span class="rating">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-custom comment-item">
                        <div class="card-body-custom">
                            <div class="d-flex-custom">
                                <span><strong>Pedro Hernández:</strong> Precio un poco alto para las características.</span>
                                <span class="rating">&#9733;&#9733;&#9733;&#9734;&#9734;</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-custom comment-item">
                        <div class="card-body-custom">
                            <div class="d-flex-custom">
                                <span><strong>Laura Martínez:</strong> Muy satisfecho con la compra, lo volvería a comprar.</span>
                                <span class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-custom comment-item">
                        <div class="card-body-custom">
                            <div class="d-flex-custom">
                                <span><strong>Jorge González:</strong> El servicio al cliente fue excelente.</span>
                                <span class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-custom comment-item">
                        <div class="card-body-custom">
                            <div class="d-flex-custom">
                                <span><strong>Sofía Ramírez:</strong> Buena relación calidad-precio.</span>
                                <span class="rating">&#9733;&#9733;&#9733;&#9734;&#9734;</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-custom comment-item">
                        <div class="card-body-custom">
                            <div class="d-flex-custom">
                                <span><strong>Andrés Sánchez:</strong> La batería se descarga rápido, pero funciona bien.</span>
                                <span class="rating">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>