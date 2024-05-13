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
        <label for="nombre_completo">Nombre completo:</label>
        <input type="text" name="nombre_completo" id="nombre_completo" required><br>

        <label for="correo">Correo electrónico:</label>
        <input type="email" name="correo" id="correo" required><br>

        <label for="numero_telefono">Número telefónico:</label>
        <input type="tel" name="numero_telefono" id="numero_telefono" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" required><br>

        <label for="vivienda">Estatus de vivienda:</label>
        <input type="radio" name="vivienda" id="vivienda" value="Propietario">
        <label for="propietario">Propietario</label>
        <input type="radio" name="vivienda" id="vivienda" value="Alquilo">
        <label for="alquilo">Alquilo</label>
        <input type="radio" name="vivienda" id="vivienda" value="Buscando para comprar">
        <label for="buscando_para_comprar">Buscando para comprar</label>
        <input type="radio" name="vivienda" id="vivienda" value="Vivo con otros">
        <label for="vivo_con_otros">Vivo con otros</label><br>

        <label for="tipo_agua">Tipo de agua:</label>
        <input type="radio" name="tipo_agua" id="tipo_agua" value="Agua de llave">
        <label for="agua_llave">Agua de llave</label>
        <input type="radio" name="tipo_agua" id="tipo_agua" value="Agua comprada">
        <label for="agua_comprada">Agua comprada</label><br>

        <label for="menores">Hay menores de edad en el hogar:</label>
        <input type="radio" name="menores" id="menores_si" value="si">
        <label for="menores_si">Si</label>
        <input type="radio" name="menores" id="menores_no" value="no">
        <label for="menores_no">No</label><br>

        <label for="mayores">Hay mayores de 60 años en el hogar:</label>
        <input type="radio" name="mayores" id="mayores_si" value="si">
        <label for="mayores_si">Si</label>
        <input type="radio" name="mayores" id="mayores_no" value="no">
        <label for="mayores_no">No</label><br>

        <label for="mascota">Tiene mascotas en el hogar:</label>
        <input type="radio" name="mascota" id="mascota_si" value="si">
        <label for="mascota_si">Si</label>
        <input type="radio" name="mascota" id="mascota_no" value="no">
        <label for="mascota_no">No</label><br>
        
        <input type="submit" value="Crear petición">
    </form>
    
</body>
</html>