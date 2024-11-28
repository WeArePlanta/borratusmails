jQuery(document).ready(function($) {
    function updateFormCount() {
        $.ajax({
            url: customAjax.ajaxurl,
            type: 'post',
            data: {
                action: 'count_forms'
            },
            success: function(response) {
                $('#form-count').text(response);
            }
        });
    }

    // Llama a la función inicialmente
    updateFormCount();

    // Si quieres actualizar el contador periódicamente:
    setInterval(updateFormCount, 1000); // Actualiza cada minuto
});