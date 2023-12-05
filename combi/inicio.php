
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
echo '<!DOCTYPE html>';
echo '<html lang="es">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<link rel="stylesheet" href="inicio.css">';
echo '<title>Transportes</title>';
echo '</head>';
echo '<body>';
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "combi";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los transportes
$sql = "SELECT idTransporte, destino, horaSalida, disponibilidad FROM transporte";
$result = $conn->query($sql);


// Mostrar cada transporte
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="CompCombi">';
        echo '<p id="infoTransporte">Destino: <span id="destinoTransporte">' . $row['destino'] . '</span> Hora de Salida: <span id="horaSalidaTransporte">' . $row['horaSalida'] . '</span></p>';
        
        // Enlace con el idTransporte en la URL
        echo '<a href="asiento.html?idTransporte=' . $row['idTransporte'] . '" class="button-link">'; 
        echo '<img src="img/combi.webp" alt="Imagen del transporte" class="boton-imagen">';
        echo '</a>';
        
        // Mostrar el idTransporte
        echo '<p>Unidad: <span id="idTransporte">' . $row['idTransporte'] . '</span></p>';
    
        // Mostrar lugares disponibles
        echo '<p>Lugares disponibles: <span id="lugaresDisponibles">' . ($row['disponibilidad'] == 1 ? 'Disponibles' : 'No disponibles') . '</span></p>';
        echo '</div>';
    }
} else {
    echo "No se encontraron registros de transporte.";
}





// Cerrar la conexión a la base de datos
$conn->close();

echo '<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>';
echo '<script src="inicio.js"></script>'; // Si tienes un script adicional

echo '</body>';
echo '</html>';
?>
