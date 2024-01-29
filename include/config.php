<?php
//error_reporting(0);

date_default_timezone_set('Asia/Kolkata');


// define('DB_SERVER', 'localhost'); //localhost
// define('DB_USERNAME', 'phpmyadmin'); // db username
// define('DB_PASSWORD', 'Arshad@7312'); // db password
// define('DB_DATABASE', 'otpninja'); // db name


define('DB_SERVER', 'localhost'); //localhost
define('DB_USERNAME', 'root'); // db username
define('DB_PASSWORD', '007akhtar'); // db password
define('DB_DATABASE', 'fastsmso_zf'); // db name



require_once __DIR__ . '/connect.php';
require_once __DIR__ . '/session.php';
require_once __DIR__ . '/../class/class.control.php';
$site_sql = $conn->query("SELECT * FROM settings WHERE id='1'");
$site_data = $site_sql->fetch_assoc();
$theam = $site_data['theam'];
$website_url = 'https://otp-ninja.com/';
$web_name=$site_data['web_name'];

define("THEAM", $theam);
define("WEBSITE_URL", $website_url);

?>