<?php
session_start();

include("functions.php");
$conn = mysqli_connect('localhost','root','','market');

$user_data = check_login($conn);
$user_name = $user_data['username'];
$user_points = $user_data['points'];

if(isset($_GET['item'])) {
	$item = $_GET['item'];
}

switch($item) {
	case "watermelon":
		$user_points -= 349;
		break;
	case "banana":
		$user_points -= 49;
		break;
	case "onion":
		$user_points -= 99;
		break;
	case "chicken":
		$user_points -= 1100;
		break;
	case "orange":
		$user_points -= -199;
		break;
	case "avacado":
		$user_points -= 199;
		break;
	case "carrots":
		$user_points -= 99;
		break;
	case "limes":
		$user_points -= 49;
		break;
	case "sweetpotato":
		$user_points -= 49;
		break;
	case "lettuce":
		$user_points -= 299;
		break;
}

if ($user_points < 0) {
	header ("Location: homepage.php?error=NOT ENOUGH POINTS");
	exit();
}

$query = "UPDATE person SET points = $user_points WHERE username = '$user_name'";
$result = mysqli_query($conn, $query);
if($result) {
	header ("Location: homepage.php");
	exit();
}
?>