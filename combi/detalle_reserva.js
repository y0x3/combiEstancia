$(document).ready(function () {
    // Recuperar la información de la reserva desde el servidor (puedes usar AJAX aquí)
    obtenerAsientosReservados();

    // Función para obtener la información de los asientos reservados desde la base de datos
    function obtenerAsientosReservados() {
        $.ajax({
            type: 'GET',
            url: 'reserva.php', // Reemplaza esto con la URL correcta de tu servidor
            success: function (data) {
                // 'data' contiene la respuesta del servidor, que debería ser un array de asientos reservados
                var asientosReservados = [];

                // Parsear la respuesta del servidor (suponiendo que es un JSON)
                try {
                    asientosReservados = JSON.parse(data);
                } catch (error) {
                    console.error('Error al parsear la respuesta del servidor:', error);
                }

                // Mostrar la información en la página
                $('#infoAsientosReservados').text(asientosReservados.join(', '));
                // Agrega más líneas según la información que deseas mostrar
            },
            error: function (error) {
                console.error('Error en la solicitud AJAX:', error);
            }
        });
    }
});
