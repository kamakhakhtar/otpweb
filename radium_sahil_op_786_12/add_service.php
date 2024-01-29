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
  <title>Add Service - @radiumsahil</title>
<?php include("include/head.php"); ?>  
</head>
<script>
        $(document).ready(function() {
            // Remove "active" class from all <a> elements
            $('#dashboard').removeClass("active");
            
            // Add "active" class to the specific element with ID "faq"
            $("#add_service").addClass("active");
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
              <li class="breadcrumb-item active" aria-current="page">Add Service</li>
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
                      <label for="exampleInputEmail1">Select Server </label>
                   <?php
              $query = "SELECT * FROM otp_server";
            $statement = mysqli_query($conn,$query);
                                            ?>  
                  <select name="server_id" id="server_id" class="form-control mb-3">
                      <?php
                                                   while($row=mysqli_fetch_array($statement))
 
                                                    {
                                                        ?>
                                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['server_name']; ?></option>
                                                        <?php
                                                    }
                                                ?>
                  </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Service Price</label>
                      <input type="number" class="form-control" id="service_price"  placeholder="Service Price">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Service Name</label>
                      <input type="text" class="form-control" id="service_name"  placeholder="Service Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Service ID</label>
                      <input type="text" class="form-control" id="service_id"  placeholder="Service ID">
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
    var price = $("#service_price").val();
    var name = $("#service_name").val();
    var service_code = $("#service_id").val();
    var server_id = $("#server_id").val();
        var params = {
        price: price,
        name: name,
        service_code: service_code,
        server_id: server_id,
        };

        $.ajax({
            type: "POST",
            url: "ajax/add_service.php",
            data: params,
            error: function (e) {
                console.log(e);
            },
            success: function (data) {
                   Notiflix.Block.Remove('#loading');
             $('#update').html(data);
                $('#update').html("Add Service");

            }
        });
    });
});
</script>


</body>

</html>