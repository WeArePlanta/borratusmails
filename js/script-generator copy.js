jQuery(document).ready(function ($) {
    $('#email-script-form').on('submit', function (event) {
        event.preventDefault(); // Evita el comportamiento por defecto del formulario

        // Recopilar las palabras clave seleccionadas
        var keywords = [];
        $('input[name="keywords[]"]:checked').each(function () {
            keywords.push($(this).val());
        });

        // Recopilar las palabras clave adicionales
        var additionalKeywords = [];
        $('input[name="additionalKeyword[]"]').each(function () {
            var value = $(this).val();
            if (value) {
                additionalKeywords.push(value); // Solo agregar si tiene valor
            }
        });

        // Enviar la solicitud Ajax
        $.ajax({
            url: emailScriptAjax.ajax_url, // Usamos la URL localizada
            type: 'POST',
            dataType: 'json',
            data: {
                action: 'generate_email_script',
                security: emailScriptAjax.ajax_nonce, // Nonce para verificar la solicitud
                keywords: keywords, // Las palabras clave seleccionadas
                additionalKeywords: additionalKeywords // Las palabras clave adicionales
            },
            success: function (response) {
                if (response.success) {
                    // Mostrar el script generado
                    $('#generated-script').val(response.data);
                    $('#generated-script').addClass('generated');
                    $('#horabuena').text('¡Enhorabuena! Has generado tu script');
                    $('#text-viva').text('Viva');
                    $('#text-viva-card').text('Ya has creado tu script, ahora vamos a pegarlo en tu mail');
                    $('#copy-script-button').addClass('copy-btn-generated');

                    // Asociar funcionalidad al botón de copiado
                    $('#copy-script-button').on('click', function () {
                        var scriptContent = $('#generated-script').val();
                        navigator.clipboard.writeText(scriptContent).then(function () {
                            // Mostrar mensaje de éxito
                            $('#copy-success-message').text('Tu script se ha copiado con éxito');
                        }).catch(function (error) {
                            console.error('Error al copiar el texto: ', error);
                        });
                    });
                } else {
                    alert('Error: ' + response.data);
                }
            },
            error: function (xhr, status, error) {
                console.log('Error en la solicitud Ajax:', error);
            }
        });
    });
});