<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "combi";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para obtener la información de los asientos reservados
$sql = "SELECT numAsiento, idTransporte FROM asientos";
$result = $conn->query($sql);

// Verificar si se obtuvieron resultados
if ($result->num_rows > 0) {
    // Crear un array para almacenar la información de los asientos reservados
    $asientosReservados = array();

    // Obtener cada fila de resultados y agregarla al array
    while($row = $result->fetch_assoc()) {
        $asientosReservados[] = $row['numAsiento'] . ' (ID Transporte: ' . $row['idTransporte'] . ')';
    }

    // Devolver la información en formato JSON
    echo json_encode($asientosReservados);
} else {
    // Si no hay resultados, devolver un array vacío
    echo json_encode(array());
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
