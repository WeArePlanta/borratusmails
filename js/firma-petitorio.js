// Mostrar el contador inicial cuando se carga la página
document.addEventListener('DOMContentLoaded', function () {
    const contadorElement = document.getElementById('contador-firmas');
    if (contadorElement) {
        contadorElement.innerText =
            'Ya firmaron el petitorio ' + ajax_obj.contador_firmas + ' personas';
    }
});

// Asegúrate de que el script solo se ejecute en el front-end
if (!window.location.pathname.includes('/wp-admin')) {
    document.getElementById('form-petitorio').addEventListener('submit', function (e) {
        e.preventDefault();

        // Limpia los mensajes previos
        document.getElementById('mensaje-exito').style.display = 'none';
        document.getElementById('mensaje-error').style.display = 'none';

        // Obtén los valores del formulario
        const nombre = document.getElementById('nombre').value;
        const email = document.getElementById('email').value;

        console.log('Formulario enviado con:', { nombre, email });

        fetch(ajax_obj.ajax_url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({
                action: 'procesar_formulario_firma',
                nombre: nombre,
                email: email,
            }),
        })
        .then((response) => response.json())
        .then((data) => {
            console.log('Respuesta del servidor:', data);

            if (data.success) {
                // Mostrar mensaje de éxito
                const mensajeExito = document.getElementById('mensaje-exito');
                mensajeExito.innerHTML = '<p class="succes-one">¡Petitorio firmado con éxito!</p> <br> <p class="succes-two">Gracias por tu apoyo.</p>';
                mensajeExito.style.display = 'block'; // Muestra el mensaje de éxito

                // Actualizar el contador de firmas si existe
                const contadorElement = document.getElementById('contador-firmas');
                if (contadorElement) {
                    contadorElement.innerText = 
                        'Ya firmaron el petitorio ' + data.data.contador_firmas + ' personas';
                }
            } else {
                // Mostrar mensaje de error
                const mensajeError = document.getElementById('mensaje-error');
                mensajeError.innerText = 'Ocurrió un error. Inténtalo nuevamente.';
                mensajeError.style.display = 'block'; // Muestra el mensaje de error
            }
        })
        .catch((error) => {
            console.error('Error en la solicitud AJAX:', error);

            // Mostrar mensaje de error si ocurre un fallo en la solicitud
            const mensajeError = document.getElementById('mensaje-error');
            mensajeError.innerText = 'No se pudo procesar la solicitud. Intenta más tarde.';
            mensajeError.style.display = 'block'; // Muestra el mensaje de error
        });
    });
}
