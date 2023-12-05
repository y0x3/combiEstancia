<?php
// Obtener el idTransporte de la solicitud GET
$idTransporte = $_GET['idTransporte'];

// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "combi";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta preparada para obtener información del transporte
$sql = "SELECT idTransporte, destino, horaSalida FROM transporte WHERE idTransporte = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idTransporte);

$stmt->execute();

// Obtener resultados
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Obtener la fila de resultados
    $row = $result->fetch_assoc();

    // Crear un array asociativo con la información del transporte
    $infoTransporte = array(
        'idTransporte' => $row['idTransporte'],
        'destino' => $row['destino'],
        'horaSalida' => $row['horaSalida']
        // Puedes agregar más campos según sea necesario
    );

    // Devolver los resultados en formato JSON
    header('Content-Type: application/json');
    echo json_encode($infoTransporte);
} else {
    // Manejar el caso en que no se encuentre el transporte
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'Transporte no encontrado'));
}

// Cerrar la conexión a la base de datos
$stmt->close();
$conn->close();
?>
