<?php
session_start();
if(!isset($_SESSION['admin'])){
	header('location: ../index');
	return;
}
include("auth.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Add Api - @radiumsahil</title>
<?php include("include/head.php"); ?>  
</head>
<script>
        $(document).ready(function() {
            // Remove "active" class from all <a> elements
            $('#dashboard').removeClass("active");
            
            // Add "active" class to the specific element with ID "faq"
            $("#add_api").addClass("active");
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
              <li class="breadcrumb-item active" aria-current="page">Add Api</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4" id="loading">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add Service</h6>
                </div>
                <div class="card-body">
                     <div class="form-group">
                      <label for="exampleInputPassword1">Api Name</label>
                      <input type="text" class="form-control" id="api_name"  placeholder="Enter Api Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Api Url</label>
                      <input type="text" class="form-control" id="api_url"  placeholder="Enter Api Url">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputPassword1">Api Key</label>
                      <input type="text" class="form-control" id="api_key"  placeholder="Enter Api Key">
                    </div>
                   <button type="submit" id="update" class="btn btn-primary w-100 mb-2">Submit</button><br>
                </div>
              
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
<?php // include("include/copyright.php");
 ?>
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
    var api_name = $("#api_name").val();
    var api_url = $("#api_url").val();
    var api_key = $("#api_key").val();
        var params = {
        api_name: api_name,
        api_url: api_url,
        api_key: api_key,
        };

        $.ajax({
            type: "POST",
            url: "ajax/add_api.php",
            data: params,
            error: function (e) {
                console.log(e);
            },
            success: function (data) {
                   Notiflix.Block.Remove('#loading');
             $('#update').html(data);
                $('#update').html("Add Api");

            }
        });
    });
});
</script>




</body>

</html>