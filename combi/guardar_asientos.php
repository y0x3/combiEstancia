<?php
// Obtener los datos del formulario
$idTransporte = $_POST['idTransporte'];
$idUsuario = $_POST['idUsuario'];
$numeroAsiento = $_POST['numeroAsiento'];

// Realizar la inserción en tu tabla de asientos (adapta la consulta según tu estructura)
$sql = "INSERT INTO asientos (NumAsiento, IdUsuario, IdTransporte) VALUES ('$numeroAsiento', '$idUsuario', '$idTransporte')";

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

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Asiento guardado exitosamente";
} else {
    echo "Error al guardar el asiento: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
