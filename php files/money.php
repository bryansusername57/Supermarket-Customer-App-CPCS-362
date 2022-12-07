<?php
session_start();

include("functions.php");
$conn = mysqli_connect('localhost','root','','market');

$user_data = check_login($conn);
$user_money = $user_data['money'];
$user_name = $user_data['username'];
$user_points = $user_data['points'];

if(isset($_GET['item'])) {
	$item = $_GET['item'];
}

switch($item) {
	case "watermelon":
		$user_money -= 3.49;
		$user_points += 35;
		break;
	case "banana":
		$user_money -= 0.49;
		$user_points += 5;
		break;
	case "onion":
		$user_money -= 0.99;
		$user_points += 10;
		break;
	case "chicken":
		$user_money -= 10.99;
		$user_points += 110;
		break;
	case "orange":
		$user_money -= 1.99;
		$user_points += 20;
		break;
	case "avacado":
		$user_money -= 1.99;
		$user_points += 20;
		break;
	case "carrots":
		$user_money -= 0.99;
		$user_points += 10;
		break;
	case "limes":
		$user_money -= 0.49;
		$user_points += 5;
		break;
	case "sweetpotato":
		$user_money -= 0.49;
		$user_points += 5;
		break;
	case "lettuce":
		$user_money -= 2.99;
		$user_points += 30;
		break;
}

if ($user_money < 0) {
	$user_money += 50;
}


$query = "UPDATE person SET money = $user_money, points = $user_points WHERE username = '$user_name'";
$result = mysqli_query($conn, $query);
if($result) {
	header ("Location: homepage.php");
	exit();
}
?>