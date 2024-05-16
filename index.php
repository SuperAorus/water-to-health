<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preload" href="css/normalize.css" as="style"> 
    <title>WaterToHealth</title>

</head>
<body>
    <!--   HEADER  -->

    <header class="header header--transparente  header--scroll" id="header">
        <div class="barra">
            <a class="logo" href="#">
                <h1 class="logo__nombre no-margin centrar-texto">Water <span class="logo__bold">To Health</span></h1>
                <img src="img/logo.png" alt="logo" class="logo__img">
              </a>
        
            <nav class="navegacion">
                <button id="btn-menu" class="navegacion__boton">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
        
                <ul id="menu" class="navegacion__lista">
                    <li class="navegacion__enlace"><a href="#galeria">Galeria</a></li>
                    <li class="navegacion__enlace"><a href="#testimonios">Testimonios</a></li>
                    <li class="navegacion__enlace"><a href="#servicios">Servicios</a></li>
                    <li class="navegacion__enlace"><a href="#formulario">Contacta con nosotros</a></li>
                    <li class="navegacion__enlace cerrar-menu"><a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M18 6l-12 12" />
                        <path d="M6 6l12 12" />
                      </svg></a></li>
                </ul>
            </nav>
        </div>
    </header>

<!--  Boton whatsapp  -->

    <a href="http://wa.me/50671382752" target="blank" class="float">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
          </svg>
    </a>

<!-- SECTION -->
<!-- Galeria -->
<section class="galeria" id="galeria">
    <div class="borderr">
        

          </div>  
        <div class="contenedor-imagenes">
            <img src="img/IMG_8057.jpg" alt="Imagen 1" class="imagen-grande">
            <img src="img/IMG_8058.jpg" alt="Imagen 2" class="imagen-pequeña">
            <img src="img/IMG_8059.jpg" alt="Imagen 3" class="imagen-pequeña">
            <img src="img/IMG_8060.jpg" alt="Imagen 4" class="imagen-pequeña">
        </div>
    </div>
</section>

<!--Testimonios-->
<section class="testimonios". id="testimonios">
    <div class="padding">
        <h2>Testimonios</h2>
        <div class="contenedor-testimonios">
            <div class="testimonio">
                <p>"lorem100 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor."</p>
                <cite>- Juan Pérez</cite>
            </div>
            <div class="testimonio">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor."</p>
                <cite>- María García</cite>
            </div>
            <div class="testimonio">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor."</p>
                <cite>- Pedro López</cite>
            </div>
        </div>
    </div>
</section>

 <!-- Servicios -->
<section class="servicios" id="servicios">
    <div class="contenedor padding">
        <h2>Nuestros servicios</h2>
        <div class="contenedor-servicios">
            <div class="servicio">
                <img src="img/servicio1.jpg" alt="Servicio 1">
                <h3>Servicio 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
            </div>
            <div class="servicio">
                <img src="img/servicio2.jpg" alt="Servicio 2">
                <h3>Servicio 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
            </div>
            <div class="servicio">
                <img src="img/servicio3.jpg" alt="Servicio 3">
                <h3>Servicio 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
            </div>
        </div>
    </div>
</section>

    <!-- Form -->

    <section class="wrapper " id="formulario">

        <div id="background-video">
            <video autoplay muted loop playsinline webkit-playsinline>
              <source src="video/1.mp4" type="video/mp4">
            </video>
          </div>    

        <form  class="formulario" action="registro.php" method="post" >
            <fieldset class="pd-sm">
            <legend> Aplica llenando todos los campos</legend>
            <div class="contenedor-campos">
                <div class="form-group">
                    <label for="nombre_completo">Nombre completo:</label>
                    <input type="text" name="nombre_completo" id="nombre_completo" required placeholder="Ejemplo: Juan Pérez">
                </div>

                <div class="form-group">
                    <label for="numero_telefono">Número telefónico:</label>
                    <input type="tel" name="numero_telefono" id="numero_telefono" required placeholder="Ejemplo: 555-555-5555">
                </div>

                <div class="form-group">
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" name="correo" id="correo" required placeholder="Ejemplo: juan.perez@example.com">
                </div>



                <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" name="direccion" id="direccion" required placeholder="Ejemplo: Calle 123, Colonia, Ciudad">
                </div>

                <div class="form-group">
                    <label for="vivienda">Estatus de vivienda:</label>
                    <select name="vivienda" id="vivienda" required>
                        <option value="selecciona">Selecciona</option>
                        <option value="1">Vivienda propia</option>
                        <option value="2">Vivienda de alquiler</option>
                        <option value="3">Vivienda de familiares</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tipo_agua">Tipo de agua:</label>
                    <select name="tipo_agua" id="tipo_agua" required>
                        <option value="selecciona">Selecciona</option>
                        <option value="1">Agua potable</option>
                        <option value="2">Agua de pozo</option>
                        <option value="3">Agua de manantial</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="menores">Hay menores de edad en el hogar:</label>
                    <select name="menores" id="menores" required>
                        <option value="selecciona">Selecciona</option>
                        <option value="1">Si</option>
                        <option value="2">No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="mayores">Hay mayores de 60 años en el hogar:</label>
                    <select name="mayores" id="mayores" required>
                        <option value="selecciona">Selecciona</option>
                        <option value="1">Si</option>
                        <option value="2">No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="mascota">Tiene mascotas en el hogar:</label>
                    <select name="mascota" id="mascota" required>
                        <option value="selecciona">Selecciona</option>
                        <option value="1">Si</option>
                        <option value="2">No</option>
                    </select>
                </div>
            </div>
            <div class="submit-button">
                <input type="submit" value="Crear petición">
            </div>
            </fieldset>
        </form>
    </section>

    <script>
        const imagenes = document.querySelectorAll('.contenedor-imagenes img');
        let indice = 0;
    
        function cambiarImagen() {
            imagenes.forEach((imagen, i) => {
                if (i === indice) {
                    imagen.classList.add('imagen-grande');
                } else {
                    imagen.classList.remove('imagen-grande');
                }
            });
    
            indice = (indice + 1) % imagenes.length;
        }
    
        setInterval(cambiarImagen, 3000);
    </script>


    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/801497830f.js" crossorigin="anonymous"></script>
</body>
</html>