<!DOCTYPE html>
<html>
<head>
    <title>Formulario de captación</title>
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/normalize.css">
</head>
<body>


<header class="header">
    <div class="barra">
        <a class="logo" href="index.php">
            <h1 class="logo__nombre no-margin centrar-texto">Water <span class="logo__bold">To Health</span></h1>
        </a>

        <nav class="navegacion">
            <button id="btn-menu" class="navegacion__boton">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <ul id="menu" class="navegacion__lista">
                <li class="navegacion__enlace"><a href="nosotros.html">Nosotros</a></li>
                <li class="navegacion__enlace"><a href="contacto.html">Contactanos</a></li>
                <li class="navegacion__enlace"><a href="mostrar_datos.php">Mostrar Datos</a></li>
                <li class="navegacion__enlace cerrar-menu"><a href="#">Cerrar menú</a></li>
            </ul>
        </nav>
    </div>
</header>


<section class="hero">
    <div>
        <a href="index.php"><img src="img/logo.webp" alt=""></a>
    </div>
</section>



    <div class="formh1">
        <h1>Formulario de captación</h1>
    </div>

    <div class="form-container grip-order">
        <form action="registro.php" method="post">
            <div class="form-group">
                <label for="nombre_completo">Nombre completo:</label>
                <input type="text" name="nombre_completo" id="nombre_completo" required placeholder="Ejemplo: Juan Pérez">
            </div>

            <div class="form-group">
                <label for="correo">Correo electrónico:</label>
                <input type="email" name="correo" id="correo" required placeholder="Ejemplo: juan.perez@example.com">
            </div>

            <div class="form-group">
                <label for="numero_telefono">Número telefónico:</label>
                <input type="tel" name="numero_telefono" id="numero_telefono" required placeholder="Ejemplo: 555-555-5555">
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

            <div class="submit-button">
                <input type="submit" value="Crear petición">
            </div>
        </form>
    </div>   
    <script src="script.js"></script>
</body>
</html>