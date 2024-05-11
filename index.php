<!DOCTYPE html>
<html>
<head>
    <title>Formulario de captación</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <header>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="sobre_nosotros.php">Sobre nosotros</a></li>
                <li><a href="contactanos.php">Contáctanos</a></li>
            </ul>
        </nav>
    </header>


</body>
</html>

    <h1>Formulario de captación</h1>
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
            <input type="submit" value="Captar">
            <button onclick="location.href='mostrar_datos.php'">Mostrar datos</button>
        </div>
    </form>
</body>
</html>