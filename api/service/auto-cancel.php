<?php
require_once __DIR__ . '/../../include/config.php';

// Get the current date in the format 'Y-m-d'
$currentDate = date('Y-m-d');

// SQL query to select records where active_status is '2' and buy_time is within the last 20 minutes
$sql = "SELECT * FROM active_number 
        WHERE active_status = '2' and status='2' and user_id=47
        AND buy_time >= NOW() - INTERVAL 20 MINUTE 
        ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

if ($result === false) {
    $response = array('status' => '500', 'message' => 'Database Query Error: ' . mysqli_error($conn));
    echo json_encode($response);
} else {
    // Check if there are rows in the result set
    if ($result instanceof mysqli_result) {
        
        
        foreach ($result as $row) {
            $givenTime = strtotime($row['buy_time']);
            $currentTime = time();
            $twentyMinutesInSeconds = 1 * 60;
            $user_id = $row['user_id'];

            if (($givenTime + $twentyMinutesInSeconds) <= $currentTime) {
                // Additional logic for processing canceled status

                $sql3 = mysqli_query($conn, "SELECT * FROM otp_server WHERE id='" . $row['server_id'] . "'");
                if ($sql3 === false || ($server_data = mysqli_fetch_assoc($sql3)) === null) {
                    // Handle the case where the query fails or no data is found
                    continue; // Skip to the next iteration
                }

                $api_id = $server_data['api_id'];

                $sql4 = mysqli_query($conn, "SELECT * FROM api_detail WHERE id='" . $api_id . "'");
                if ($sql4 === false || ($api_data = mysqli_fetch_assoc($sql4)) === null) {
                    // Handle the case where the query fails or no data is found
                    continue; // Skip to the next iteration
                }

                $sql5 = mysqli_query($conn, "SELECT * FROM user_wallet WHERE user_id='" . $user_id . "'");
                if ($sql5 === false || ($user_data = mysqli_fetch_assoc($sql5)) === null) {
                    // Handle the case where the query fails or no data is found
                    continue; // Skip to the next iteration
                }

                $api_url = $api_data['api_url'];
                $api_key = $api_data['api_key'];
                $number_id = $row['number_id'];

                // Check sms text through API
                $url = "{$api_url}/stubs/handler_api.php?api_key={$api_key}&action=getStatus&id={$number_id}";
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($ch);

                if ($response === false) {
                    // Handle the case where curl_exec() fails
                    continue; // Skip to the next iteration
                }
                
                // Check if the cURL response contains 'STATUS_OK'
                // Check if the cURL response contains 'STATUS_OK'
                if (strpos($response, 'STATUS_OK') !== false) {
                    
                    // Extract SMS text
                    $sms = explode('STATUS_OK:', $response)[1];
                
                    // Check if the extracted SMS text is different from the existing one
                    if ($active_data['sms_text'] != $sms) {
                        
                        // Update the active_number table with the new SMS text and set status to '1'
                        $sqlUpdate = "UPDATE active_number SET sms_text='" . $sms . "', status='1' WHERE number_id='" . $number_id . "'";
                        $resultUpdate = mysqli_query($conn, $sqlUpdate);
                
                        if ($resultUpdate === false) {
                            // Handle the case where the update query fails
                            continue; // Skip to the next iteration
                        }
                    }
                }
                elseif($response == "STATUS_WAIT_CODE")
                {
                    // Canccel STATUS_WAIT_CODE
                    $url = "{$api_url}/stubs/handler_api.php?api_key={$api_key}&action=setStatus&id={$number_id}&status=8";
                    $ch = curl_init($url);
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    $result = curl_exec($ch);
                    curl_close($ch);
                    
                     if ($result == 'STATUS_CANCEL') 
                     {
                        // Handle canceled status
                        $add_balance = $user_data['balance'] + $row['service_price'];
                        $cut_otp = $user_data['total_otp'] - 1;
                        $sql6 = mysqli_query($conn, "UPDATE active_number SET active_status='1', status='3' WHERE id='" . $row['id'] . "'");
                        $sql7 = mysqli_query($conn, "UPDATE user_wallet SET balance='$add_balance', total_otp='$cut_otp' WHERE user_id='" . $user_id . "'");
                     }
                }
                
               
                
                

                // Return the number_id and cURL response
                $resultArray = array(
                    'number_id' => $number_id,
                    'curl_response' => $response
                );

                echo json_encode($resultArray) . PHP_EOL;
                continue; // Skip the rest of the loop
            }
        }
    } else {
        $response = array('status' => '500', 'message' => 'Error fetching rows: ' . mysqli_error($conn));
        echo json_encode($response);
    }

    mysqli_close($conn);
}
?>
