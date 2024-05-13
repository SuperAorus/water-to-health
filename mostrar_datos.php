<?php
require_once 'conexion.php';

// Consulta SQL para seleccionar todos los registros de la tabla captacion
$sql = "SELECT * FROM peticiones ORDER BY fecha DESC";
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Número de teléfono</th>
                <th>Dirección</th>
                <th>Vivienda</th>
                <th>Tipo de agua</th>
                <th>Menores</th>
                <th>Mayores</th>
                <th>Mascota</th>
                <th>Fecha</th>
            </tr>";

    // Bucle while para recorrer los resultados
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>". $row["nombre_completo"]. "</td>";
        echo "<td>". $row["correo"]. "</td>";
        echo "<td>". $row["numero_telefono"]. "</td>";
        echo "<td>". $row["direccion"]. "</td>";
        echo "<td>". $row["vivienda"]. "</td>";
        echo "<td>". $row["tipo_agua"]. "</td>";
        echo "<td>". $row["menores"]. "</td>";
        echo "<td>". $row["mayores"]. "</td>";
        echo "<td>". $row["mascota"]. "</td>";
        echo "<td>". $row["fecha"]. "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay registros en la base de datos.";
}

$conn->close();
?>