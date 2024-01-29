
<a class="pmo-st pmo-dark active" target="_blank" href="<?php echo $site_data['support_url'];?>"><div class="pmo-st-img"><img src="<?php echo WEBSITE_URL; ?>/theam/ninja/images/icons/support.png" alt="Investorm"></div><div class="pmo-st-text">For Assistance, <br> We’re here to help you.</div></a>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

<!-- Bootstrap Selectpicker JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script> -->


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>

 // Your other scripts
$(document).ready(function() {
    // Prevent default behavior for all anchor tags
    //  $('a').on('click', function(e) {
    //     e.preventDefault();
    //     // Additional actions or logic can be added here if needed
    // });
    $('.js-example-basic-single').select2();
    // Set min-height dynamically
    $('.btn.dropdown-toggle').css('min-height', 'calc(2.125rem + 2px)');

    $('#server-id').change(function() {
        var selectedServerId = $(this).val();
        if (!selectedServerId) {
            // If no server is selected, clear and disable the service dropdown
            // $("#service-id").empty().prop("disabled", true);
            // $('#service-id').selectpicker('refresh'); // Refresh the selectpicker
            return;
        }
        var token = $("#token").val();

        var params = {
            token: token,
            server: selectedServerId
        };

        // AJAX call to fetch services based on selected server
        $.ajax({
            type: "GET",
            url: "api/service/getService",
            data: params,
            dataType: "json",
            error: function(e) {
                console.log("AJAX error:", e);
            },
            success: function(data) {
                // Clear existing options
                $("#service-id").empty();

                // Add a default option
                // $("#service-id").append('<option value="" selected disabled>Select Service</option>');

                // Iterate through the data and add options
                data['service'].forEach(service => {
                    var option = "<option value=" + service['id'] + ">" + service['service_name'] + ' - ₹' + service['service_price'] + "</option>";
                    $("#service-id").append(option);
                });

            }
        });
    });
});
</script>

<script src="<?php echo WEBSITE_URL; ?>/theam/ninja/assets/js/bundle.js?ver=3.2.3"></script>
<script src="<?php echo WEBSITE_URL; ?>/theam/ninja/assets/js/scripts.js?ver=3.2.3"></script>


