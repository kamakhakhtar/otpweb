<?php
session_start();
$server_id = $_POST['server_id'];
$service_id = $_POST['service_id'];
$waiting_sec = $_POST['waiting_sec'];
 
include("../auth.php");
if(isset($_SESSION['admin']) =="") {
        
echo"<script>  setTimeout(function(){
            window.location.href = 'index.php';
         }, 100;
</script>"; 
}else{
if($server_id !="" && $service_id !="" && $waiting_sec !=""){
if(is_numeric($waiting_sec)){
$sql=mysqli_query($conn,"SELECT * FROM time_wait WHERE service_id='$service_id' and server_id='$server_id'");
if(mysqli_num_rows($sql) ==0){
    $sql3 = mysqli_query($conn,"INSERT INTO time_wait (server_id, service_id, wait_sec) VALUES ('$server_id','$service_id','$waiting_sec')");

echo'<script>
    $(document).ready(function() {
        Swal.fire({
            title: "Success",
            text: "Details Added Successful",
            icon: "success",
            button: "Ok",
            
        });
    });
</script>';  
}else{
echo'<script>
    $(document).ready(function() {
        Swal.fire({
            title: "Warning!",
            text: "Service id Waiting Already Added",
            icon: "warning",
            button: "Ok",
            
        });
    });
</script>';   
}
}else {
echo'<script>
    $(document).ready(function() {
        Swal.fire({
            title: "Warning!",
            text: "Please Enter Numerical Values",
            icon: "warning",
            button: "Ok",
            
        });
    });
</script>';   
}
}else{
echo'<script>
    $(document).ready(function() {
        Swal.fire({
            title: "Warning!",
            text: "Please fill all the fields first",
            icon: "warning",
            button: "Ok",
            
        });
    });
</script>';   
}
}
?>