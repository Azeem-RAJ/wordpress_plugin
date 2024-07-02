jQuery(document).ready(function($) {
    console.log('CRM script loaded');

    $('#setActionButton').on('click', function() {
        console.log('Button clicked');
        var form = $('#my-plugin-form');
        var selectedStatus = $('.top_status').val();
        var actionUrl = '';

        if (selectedStatus === 'Publish') {
            actionUrl = 'publish_action_url.php';
        } else if (selectedStatus === 'Active') {
            actionUrl = 'active_action_url.php';
        }

        console.log('Form action set to:', actionUrl);
        form.attr('action', actionUrl);
        form.submit();
    });

    // Existing validation code
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
        }
    });

    // Hide the success message after 5 seconds
    function hideSuccessMessage() {
        setTimeout(function() {
            $('#form-message').fadeOut('slow');
        }, 5000);
    }

    // Check if the success message exists on page load
    if ($('#form-message').length) {
        hideSuccessMessage();
    }
});