<?php
// Assuming you have a database connection established

// Your database credentials
$servername = "localhost";
$username = "fastsmso_zf";
$password = "@#Fatmamylove.2907";
$dbname = "fastsmso_zf";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Calculate the time threshold (180 seconds ago)
$timeThreshold = date('Y-m-d H:i:s', strtotime('-180 seconds'));

// Select records to cancel
$sql = "SELECT * FROM active_number WHERE buy_time < '$timeThreshold'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Perform cancellation logic here
        $numberId = $row['number_id'];
        $api_key = "your_api_key";

        // Send a request to cancel the number
        $url = "https://fastsms.su/stubs/handler_api.php?api_key={$api_key}&action=setStatus&id={$numberId}&status=8";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        // Optionally, you can update the database to reflect the cancellation
        // For example, you might set 'active_status' to a value indicating cancellation
        // $updateSql = "UPDATE active_number SET active_status = 'canceled' WHERE number_id = '$numberId'";
        // $conn->query($updateSql);
    }
}

// Close the database connection
$conn->close();
?>
