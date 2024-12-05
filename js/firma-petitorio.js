// Mostrar el contador inicial cuando se carga la página
document.addEventListener('DOMContentLoaded', function () {
    const contadorElement = document.getElementById('contador-firmas');
    if (contadorElement) {
        contadorElement.innerText =
            'Ya firmaron el petitorio ' + ajax_obj.contador_firmas + ' personas';
    }
});

// Manejo del formulario
document.getElementById('form-petitorio').addEventListener('submit', function (e) {
    e.preventDefault();

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
                // Actualizar el contador con el valor recibido del servidor
                const contadorElement = document.getElementById('contador-firmas');
                if (contadorElement) {
                    contadorElement.innerText =
                        'Ya firmaron el petitorio ' + data.data.contador_firmas + ' personas';
                }
            } else {
                console.error('Error en la respuesta:', data.data.mensaje);
            }
        })
        .catch((error) => {
            console.error('Error en la solicitud AJAX:', error);
        });
});
