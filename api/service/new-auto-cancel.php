<?php
require_once __DIR__ . '/../../include/config.php';

// Get the current date in the format 'Y-m-d'
$currentDate = date('Y-m-d');

// SQL query to select records where active_status is '2' and buy_time is within the last 20 minutes
$sql = "(
    SELECT an.*, os.api_id, ad.api_url, ad.api_key, uw.balance, uw.total_otp
    FROM active_number an
    JOIN otp_server os ON an.server_id = os.id
    JOIN api_detail ad ON os.api_id = ad.id
    JOIN user_wallet uw ON an.user_id = uw.user_id
    WHERE an.active_status = '2' AND an.status='2'
    AND an.buy_time >= NOW() - INTERVAL 20 MINUTE
)
ORDER BY id DESC";

$result = mysqli_query($conn, $sql);


if ($result === false) {
    $response = array('status' => '500', 'message' => 'Database Query Error: ' . mysqli_error($conn));
    echo json_encode($response);
} else {
    
    if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $givenTime = strtotime($row['buy_time']);
        $currentTime = time();
        $twentyMinutesInSeconds = 15 * 60;
        $user_id = $row['user_id'];

        if (($givenTime + $twentyMinutesInSeconds) <= $currentTime) {
            // Additional logic for processing canceled status

            $api_url = $row['api_url'];
            $api_key = $row['api_key'];
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
            if (strpos($response, 'STATUS_OK') !== false) {
                // Extract SMS text
                $sms = explode('STATUS_OK:', $response)[1];

                // Check if the extracted SMS text is different from the existing one
                if ($row['sms_text'] != $sms) {
                    // Update the active_number table with the new SMS text and set status to '1'
                    $sqlUpdate = "UPDATE active_number SET sms_text='" . $sms . "', status='1' WHERE number_id='" . $number_id . "'";
                    $resultUpdate = mysqli_query($conn, $sqlUpdate);

                    if ($resultUpdate === false) {
                        // Handle the case where the update query fails
                        continue; // Skip to the next iteration
                    }
                }
            } elseif ($response == "STATUS_WAIT_CODE") {
                // Cancel STATUS_WAIT_CODE
                $url = "{$api_url}/stubs/handler_api.php?api_key={$api_key}&action=setStatus&id={$number_id}&status=8";
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $result = curl_exec($ch);
                curl_close($ch);

                if ($result == 'STATUS_CANCEL') {
                    // Handle canceled status
                    $add_balance = $row['balance'] + $row['service_price'];
                    $cut_otp = $row['total_otp'] - 1;
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
    }
    
    mysqli_close($conn);
}
?>
