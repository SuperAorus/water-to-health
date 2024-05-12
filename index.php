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

                <a href="nosotros.html" class="navegacion__enlace">Nosotros</a>

                <a href="contacto.html" class="navegacion__enlace">Contactanos</a>

                <a href="mostrar_datos.php" class="navegacion__enlace">Mostrar Datos</a>

            </nav>
        </div>
    

</header>


<section class="hero">
</section>

    <div class="formh1">
        <h1>Formulario de captación</h1>
    </div>

    <form action="registro.php" method="post" class="container">
        <!-- campos del formulario -->
        <div class="field">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div class="field">
            <label for="correo">Correo:</label>
            <input type="email" name="correo" id="correo" required>
        </div>
        <div class="field">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion" required>
        </div>
        <div class="field">
            <label for="numero_telefono">Número de teléfono:</label>
            <input type="tel" name="numero_telefono" id="numero_telefono" required>
        </div>
        <div class="field">
            <label for="dueño">Dueño:</label>
            <input type="checkbox" name="dueño" id="dueño" value="Sí">
        </div>
        <div class="field">
            <label for="tipo_agua">Tipo de agua:</label>
            <input type="checkbox" name="tipo_agua" id="tipo_agua" value="Agua de la llave"> Agua de la llave
            <input type="checkbox" name="tipo_agua" id="tipo_agua" value="Comprada"> Agua comprada
        </div>
        <div class="field">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" required>
        </div>
        <div class="button">
            <input type="submit" value="Enviar">
        </div>


    </form>
</body>
</html>