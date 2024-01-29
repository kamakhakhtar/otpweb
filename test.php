<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Bootstrap Toast Example</title>
</head>
<body>

<button id="showToastButton" class="btn btn-primary">Show Toast</button>

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

</body>
</html>
