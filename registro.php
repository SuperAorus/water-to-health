<?php
require_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $direccion = $_POST["direccion"];
    $numero_telefono = $_POST["numero_telefono"];
    $dueño = $_POST["dueño"] == "Sí"? "Sí" : "No";
    $tipo_agua = $_POST["tipo_agua"];
    $fecha = $_POST["fecha"];

    // Verificar si el correo electrónico existe
    $sql = "SELECT correo FROM captacion WHERE correo = '$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "El correo electrónico ya existe en la base de datos.";
    } else {
        // Registrar los datos del formulario
        $sql = "INSERT INTO captacion (nombre, correo, direccion, numero_telefono, dueño, tipo_agua, fecha)
                VALUES ('$nombre', '$correo', '$direccion', '$numero_telefono', '$dueño', '$tipo_agua', '$fecha')";

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