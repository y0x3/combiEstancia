document.addEventListener('DOMContentLoaded', () => {
    // Realizar solicitud AJAX para obtener datos del servidor
    fetch('prueba.php')
        .then(response => response.json())
        .then(data => {
            // Actualizar el contenido del HTML con los datos obtenidos
            document.getElementById('destinoTransporte').innerText = data.destino;
            document.getElementById('horaSalidaTransporte').innerText = data.hora_salida;
            document.getElementById('lugaresDisponibles').innerText = data.disponible;
        })
        .catch(error => console.error('Error al obtener datos:', error));
});
