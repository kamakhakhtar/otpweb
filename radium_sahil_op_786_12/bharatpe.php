<?php
session_start();
if(!isset($_SESSION['admin'])){
	header('location: ../index');
	return;
}
include("auth.php");
$sql=mysqli_query($conn,"SELECT * FROM settings WHERE id='1'");
$data=mysqli_fetch_assoc($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Find User - @radiumsahil</title>
<?php include("include/head.php"); ?>  
</head>
<script>
        $(document).ready(function() {
            // Remove "active" class from all <a> elements
            $('#dashboard').removeClass("active");
            
            // Add "active" class to the specific element with ID "faq"
            $("#bharatpe").addClass("active");
        });
    </script>
<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
<?php include ("include/slidebar.php"); ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
<?php include ("include/topbar.php"); ?>              
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Bharatpe</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4" id="loading">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Bharatpe</h6>
                </div>
                <div class="card-body">
                     <div class="form-group">
                      <label for="exampleInputEmail1">Enter Upi Id</label>
                      <input type="text" class="form-control" id="upi_id"  value="<?php echo $data['upi_id'];?>" >
                    </div>
                       <div class="form-group">
                      <label for="exampleInputEmail1">Enter Qr Url</label>
                      <input type="text" class="form-control" id="qr_url" value="<?php echo $data['upi_qr'];?>" >
                    </div>
                         <div class="form-group">
                      <label for="exampleInputEmail1">Enter Merchant Id</label>
                      <input type="text" class="form-control" id="mechant_id"  value="<?php echo $data['upi_merchant_id'];?>">
                    </div>
                            <div class="form-group">
                      <label for="exampleInputEmail1">Enter Token</label>
                      <input type="text" class="form-control" id="token"  value="<?php echo $data['upi_merchant_token'];?>">
                    </div> 
                         <div class="form-group">
                      <label for="exampleInputEmail1">Enter Minimum Recharge</label>
                      <input type="number" class="form-control" id="minimum_recharge"  value="<?php echo $data['upi_min_recharge'];?>">
                    </div> 
                        <button type="submit" id="update" class="btn btn-primary w-100 mb-2">Submit</button><br>
                </div>
              
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
<?php // include("include/copyright.php"); ?>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<?php include("include/script.php"); ?>
<script>
$(document).ready(function() {
    // Attach a click event handler to the button

    $("#update").click(function() {
        Notiflix.Block.Dots('#loading', 'Please Wait');
    var payment_qr = $("#qr_url").val();
    var payment_upi = $("#upi_id").val();
    var minimum_add = $("#minimum_recharge").val();
    var mechant_id = $("#mechant_id").val();
    var token = $("#token").val();
        
         var params = {
        token: token,
        mechant_id: mechant_id,
       payment_qr: payment_qr,
        payment_upi: payment_upi,
        minimum_add: minimum_add,  
        };

        $.ajax({
            type: "POST",
            url: "ajax/update_settings.php",
            data: params,
            error: function (e) {
                console.log(e);
            },
            success: function (data) {
                   Notiflix.Block.Remove('#loading');
             $('#update').html(data);
                $('#update').html("Update");

            }
        });
    });
});
</script>

</body>

</html>