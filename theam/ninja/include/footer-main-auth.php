<script>
$(document).ready(function() {
    $('#showToastButton').on('click', function() {
        
        // Create a new toast element
        var toast = $('<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">' +
            '<div class="toast-header">' +
            '<strong class="me-auto text-primary">Bootstrap</strong>' +
            '<small class="text-muted">just now</small>' +
            '<button type="button" class="close" data-dismiss="toast" aria-label="Close">' +
            '<span aria-hidden="true">&times;</span>' +
            '</button>' +
            '</div>' +
            '<div class="toast-body">See? Just like this.</div>' +
            '</div>');

        // Append the toast to the body
        $('body').append(toast);
        // Show the toast
        toast.toast('show');

        // Remove the toast after it has been hidden
        toast.on('hidden.bs.toast', function() {
            $(this).remove();
        });
    });
});
</script>
<script src="<?php echo WEBSITE_URL; ?>/theam/ninja/assets/js/bundle.js?ver=3.2.3"></script>
<script src="<?php echo WEBSITE_URL; ?>/theam/ninja/assets/js/scripts.js?ver=3.2.3"></script>