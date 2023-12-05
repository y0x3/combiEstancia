document.addEventListener('DOMContentLoaded', () => {
    // Realizar solicitud AJAX para obtener datos del servidor
    fetch('inicio.php')
        .then(response => response.json())
        .then(data => {
            // Verificar si hay datos en la respuesta
            if (data.length > 0) {
                // Obtener el primer elemento del array
                const firstRow = data[0];

                // Actualizar el contenido del HTML con los datos obtenidos
                document.getElementById('destinoTransporte').innerText = firstRow.destino;
                document.getElementById('horaSalidaTransporte').innerText = firstRow.horaSalida;
                document.getElementById('lugaresDisponibles').innerText = firstRow.disponibilidad;
                
                // Mostrar el idTransporte si está presente
                if ('idTransporte' in firstRow) {
                    console.log('ID del Transporte:', firstRow.idTransporte);
                    // Actualizar el contenido del HTML con el idTransporte
                    document.getElementById('idTransporte').innerText = firstRow.idTransporte;
                }
            } else {
                console.error('No se encontraron datos en la respuesta.');
            }
        })
        .catch(error => console.error('Error al obtener datos:', error));
});
