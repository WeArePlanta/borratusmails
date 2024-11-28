
document.getElementById('form-petitorio').addEventListener('submit', function(e) {
    e.preventDefault();

    const nombre = document.getElementById('nombre').value;
    const email = document.getElementById('email').value;

    fetch(ajax_obj.ajax_url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            action: 'procesar_formulario_firma',
            nombre: nombre,
            email: email
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log(data.mensaje);
            // Actualizar contador en el frontend
            const contadorElement = document.getElementById('contador-firmas');
            if (contadorElement) {
                let currentCount = parseInt(contadorElement.innerText) || 0;
                contadorElement.innerText = 'Ya firmaron el petitorio ' + (currentCount + 1) + ' personas';
            }
        } else {
            console.error(data.mensaje);
        }
    })
    .catch(error => console.error('Error:', error));
});