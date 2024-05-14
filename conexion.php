<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "water_to_health";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Conexión fallida: ". mysqli_connect_error());
}


?>