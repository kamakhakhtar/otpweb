$(document).ready(function() {

    $("#buy-numbers").click(function() {
        var server = $("#server-id option:selected").val();
        var service = $("#service-id option:selected").val();
        var token = $("#token").val();
        if (server == "") {

            toastr.clear(), NioApp.Toast("Please Choose Server", "error", {
                position: "top-right"
            })
            return;
        }

        if (service == '') {
            toastr.clear(), NioApp.Toast("Choose Service", "error", {
                position: "top-right"
            })
            return; // Stop execution if email or password is blank
        }


        $('#buy-numbers').prop("disabled", true);
        $('#buy-numbers').html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span><span>Generating Number...</span> ');

        var params = {
            server: server,
            service: service,
            token: token,
        };
        $.ajax({
            type: "GET",
            url: "api/service/buynumber",
            data: params,
            error: function(e) {
                console.log(e);
                toastr.clear(), NioApp.Toast("This is a note for success toast message.", "error", {
                    position: "top-right"
                })
                // toast.error('An error occurred .');
                $('#buy-numbers').html('<span>Generate Number</span><em class="icon ni ni-arrow-right"></em>');
                $('#buy-numbers').prop("disabled", false);
            },
            success: function(data) {
                console.log(data);

                $('#buy-numbers').html('<span>Generate Number</span><em class="icon ni ni-arrow-right"></em>');
                $('#buy-numbers').prop("disabled", false);
                var json = JSON.parse(data);
                if (json.status === "200") {
                    // toast.success(json.message);
                    toastr.clear(), NioApp.Toast(json.message, "success", {
                        position: "top-right"
                    })
                    checkOrder();
                    //  user_balance(token);    
                } else {
                    toast.error(json.message);
                }
            }
        });
    });




});
var settime = 0;