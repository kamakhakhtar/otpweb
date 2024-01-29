<?php
require_once __DIR__ . '/include/config.php';
if(!isset($_SESSION['token'])){
	header('location: index');
}
$wallet = new radiumsahil();
$data = $wallet->balancedata();
$userdata = $wallet->userdata();
$userwallet = $wallet->userwallet();
$referwallet = $wallet->refer_data();
$recent_history = $wallet->recent_history();
if($data===false){
unset($_SESSION['token']);
session_destroy();
	header('location: index');	
return;	
}

$wallet->closeConnection();
include_once __DIR__ . '/theam/' . THEAM . '/dashboard.php';
?>