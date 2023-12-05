document.addEventListener('DOMContentLoaded', () => {
    // ... Código existente ...

    // Variable para almacenar el último asiento seleccionado
    let ultimoAsientoSeleccionado = null;

    // Manejar clic en un asiento
    $('.btnAsiento').click(function () {
        const numeroAsiento = $(this).data('numero');

        // Verificar si ya hay un asiento seleccionado
        if (ultimoAsientoSeleccionado !== null) {
            // Restaurar color del asiento anterior
            $(ultimoAsientoSeleccionado).removeClass('seleccionado');
        }

        // Cambiar color del asiento actual
        $(this).addClass('seleccionado');

        // Actualizar el último asiento seleccionado
        ultimoAsientoSeleccionado = this;

        // Actualizar el formulario con el asiento seleccionado
        $('#asientoSeleccionado').val(numeroAsiento);
    });
});

function guardarAsientosEnBaseDeDatos(idTransporte) {
    // Obtener el id del usuario y otros datos necesarios desde tu HTML o JavaScript
    const idUsuario = obtenerIdUsuario(); // Implementa esta función según tus necesidades

    // Obtener el número del asiento seleccionado desde el formulario
    const numeroAsiento = $('#asientoSeleccionado').val();

    // Realizar una solicitud AJAX para guardar la información en la base de datos
    $.ajax({
        type: 'POST',
        url: 'guardar_asiento.php',
        data: {
            idTransporte: idTransporte,
            idUsuario: idUsuario,
            numeroAsiento: numeroAsiento
        },
        success: function (response) {
            // Manejar la respuesta del servidor (puedes mostrar un mensaje, redirigir, etc.)
            console.log(response);
        },
        error: function (error) {
            console.error('Error al guardar el asiento:', error);
        }
    });
}


function obtenerInformacionTransporte(idTransporte) {
    // Realizar una solicitud AJAX para obtener la información del transporte
    fetch('asientos.php?idTransporte=' + idTransporte)
        .then(response => response.json())
        .then(data => {
            // Actualizar la información del transporte en la interfaz
            document.getElementById('infoIdTransporte').innerText = data.idTransporte;
            document.getElementById('infoDestino').innerText = data.destino;
            document.getElementById('infoHoraSalida').innerText = data.horaSalida;

            // Puedes agregar más líneas para otras propiedades del transporte según sea necesario

            // Llamada a la función para actualizar colores, pasa un array de asientos ocupados si es posible
            // Aquí deberías tener la información de la base de datos sobre los asientos ocupados
            const asientosOcupados = data.asientosOcupados || [];
            actualizarColoresAsientos(asientosOcupados);
        })
        .catch(error => console.error('Error al obtener información del transporte:', error));
}

function obtenerIdTransporteDeURL() {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get('idTransporte');
}

// Función para obtener el id del usuario (debes implementarla según tus necesidades)
function obtenerIdUsuario() {
    // Implementa la lógica para obtener el id del usuario según tus necesidades
    // Puede ser desde una cookie, una sesión, etc.
    return 1; // Ejemplo: Devuelve el id 1
}

// Asegúrate de que esta función esté definida antes de llamarla
function actualizarColoresAsientos(asientosOcupados) {
    // Implementa la lógica para actualizar los colores de los asientos
    // Utiliza la información de asientosOcupados para determinar qué asientos están ocupados
    // Recorre los botones y actualiza sus colores según sea necesario
    $('.btnAsiento').each(function () {
        const numeroAsiento = $(this).data('numero');
        if (asientosOcupados.includes(numeroAsiento)) {
            // Asiento ocupado, cambia el estilo según tus necesidades
            $(this).addClass('ocupado');
        } else {
            // Asiento libre, restaura el estilo predeterminado
            $(this).removeClass('ocupado');
        }
    });
}
