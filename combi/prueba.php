<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chomby";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener datos del transporte (cambiar según tu estructura de base de datos)
$sql = "SELECT destino, hora_salida, disponible FROM transportes WHERE id = 1"; // Cambiar 'idTransporte = 1' según tu estructura de base de datos

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Obtener datos del primer registro
    $row = $result->fetch_assoc();

    // Crear un array asociativo con los datos
    $datos = array(
        "destino" => $row['destino'],
        "hora_salida" => $row['hora_salida'],
        "disponible" => $row['disponible']
    );

    // Devolver los datos como JSON
    echo json_encode($datos);
} else {
    echo "No se encontró información del transporte";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>