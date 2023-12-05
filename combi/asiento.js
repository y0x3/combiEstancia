$(document).ready(function () {
    // Agregar un manejador de clic para todos los botones con la clase "btnAsiento"
    $('.btnAsiento').on('click', function () {
        // Cambiar el color del botón al hacer clic
        $(this).toggleClass('asientoSeleccionado');

        // Obtener el número del asiento
        var numeroAsiento = $(this).data('numero');

        // Mostrar el número del asiento en la consola (puedes cambiar esto según tus necesidades)
        console.log('Asiento seleccionado: ' + numeroAsiento);
    });

    // Función para guardar la información de los asientos en la base de datos
    window.guardarAsientosEnBaseDeDatos = function (idTransporte) {
        // Aquí puedes implementar la lógica para enviar la información al servidor
        // Puedes usar AJAX para enviar los datos al servidor PHP por ejemplo

        // Ejemplo de cómo podrías enviar los datos al servidor
        var asientosSeleccionados = $('.asientoSeleccionado').map(function () {
            return $(this).data('numero');
        }).get();

        // Enviar los datos al servidor usando AJAX
        $.ajax({
            type: 'POST',
            url: 'guardar_asientos.php', // Reemplaza esto con la URL correcta de tu servidor
            data: { idTransporte: idTransporte, asientos: asientosSeleccionados },
            success: function (response) {
                // Mostrar una alerta indicando que la reserva se realizó correctamente
                alert('Reserva exitosa. Asientos reservados: ' + asientosSeleccionados.join(', '));

                // Redirigir a inicio.html después de aceptar la alerta
                window.location.href = 'inicio.html';
            },
            error: function (error) {
                console.error('Error en la solicitud AJAX:', error);
            }
        });
    };
});

