<?php
session_start();
if(!isset($_SESSION['admin'])){
	header('location: ../index');
	return;
}
include("auth.php");
$id=$_GET['id'];
$sql=mysqli_query($conn,"SELECT * FROM service WHERE server_id='$id' ORDER BY id DESC");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>View Service - @radiumsahil</title>
<?php include("include/head.php"); ?>  
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  
</head>
<script>
        $(document).ready(function() {
            // Remove "active" class from all <a> elements
            $('#dashboard').removeClass("active");
            
            // Add "active" class to the specific element with ID "faq"
            $("#show_service").addClass("active");
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
              <li class="breadcrumb-item active" aria-current="page">View Service</li>
            </ol>
          </div>

        <!---Container Fluid-->
                  <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">View Service</h6>
                </div>
                <div class="table-responsive p-3">
<?php


if (isset($_POST['delete'])) {
    $unban = $_POST['id'];
$sql2=mysqli_query($conn,"DELETE FROM `service` WHERE `id` ='".$unban."'");
echo'<div class="alert alert-success" role="alert">
       Delete success
    </div>';
echo"<meta http-equiv='refresh' content='0'>";
    
}
?>                      
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                                                 <th>Service Name</th>
                                                <th>Service Id</th>
                                                <th>Service Price</th>
                                                <th>Status</th>
                                                <th>Delete</th>
                                                <th>Action</th>
                      </tr>
                    </thead>
                     <tbody>
                                                                   <?php
        $i=1;
        while($data=mysqli_fetch_array($sql)){
         if($data['status'] =="1"){
        $status = "badge badge-success";
        $status1 = "Active";
        }else{
          $status = "badge badge-danger";  
           $status1 = "invactive";   
        }    
        ?>
          <tr>
           <td><?php echo $data['service_name'];?></td>
           <td><?php echo $data['service_id'];?></td>
           <td><?php echo $data['service_price'];?></td>
          <td><span class="<?php echo $status;?>"><?php echo $status1;?></span></td>                 
        <td><form method="post"><input type="hidden" name="id" value="<?php echo $data['id'];?>"><button class="btn btn-sm btn-danger" type="submit" name="delete" >Delete</button></form></td>                                                                
            <td><a href="edit_service?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-primary">Edit</a></td>                                                                
         </tr>                                       
         <?php
          $i++;
          }
          ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
      </div>
      <!-- Footer -->
<?php //include("include/copyright.php");
 ?>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<?php include("include/script.php"); ?>
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>  
</body>

</html>