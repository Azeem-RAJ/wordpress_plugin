$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});

jQuery(document).ready(function($) {
    // Form validation (existing code)
    $('#my-plugin-form').on('submit', function(e) {
        var isValid = true;

        $('.api_cred input, .api_cred select').each(function() {
            if ($(this).val() === '') {
                isValid = false;
                $(this).css('border-color', 'red');
            } else {
                $(this).css('border-color', '');
            }
        });

        if (!isValid) {
            e.preventDefault();
            alert('Please fill in all required fields.');
        }
    });

    // Hide the success message after 5 seconds
    setTimeout(function() {
        $('#form-message').fadeOut('slow');
    }, 5000);
});