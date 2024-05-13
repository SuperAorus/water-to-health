<?php
require_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $numero_telefono = $_POST['numero_telefono'];
    $direccion = $_POST['direccion'];
    $vivienda = $_POST['vivienda'];
    $tipo_agua = $_POST['tipo_agua'];
    $menores = $_POST['menores'];
    $mayores = $_POST['mayores'];
    $mascota = $_POST['mascota'];

    // Verificar si el correo electrónico existe
    $sql = "SELECT correo FROM peticiones WHERE correo = '$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "El correo electrónico ya existe en la base de datos.";
    } else {
        // Registrar los datos del formulario
        $sql = "INSERT INTO peticiones (nombre_completo, correo, numero_telefono, direccion, vivienda, tipo_agua, menores, mayores, mascota, fecha) 
        VALUES ('$nombre_completo', '$correo', '$numero_telefono', '$direccion', '$vivienda', '$tipo_agua', '$menores', '$mayores', '$mascota')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro exitoso.";
            header('Location: index.php');
        } else {
            echo "Error al registrar los datos: ". $conn->error;
        }
    }
}

$conn->close();
?>