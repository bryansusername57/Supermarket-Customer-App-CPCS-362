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
		if ($user_points < 349){
			header ("Location: homepage.php?error=NOT ENOUGH POINTS");
			exit();
		}
		$user_points -= 349;
		break;
	case "banana":
		if ($user_points < 49){
			header ("Location: homepage.php?error=NOT ENOUGH POINTS");
			exit();
		}
		$user_points -= 49;
		break;
	case "onion":
		if ($user_points < 99){
			header ("Location: homepage.php?error=NOT ENOUGH POINTS");
			exit();
		}
		$user_points -= 99;
		break;
	case "chicken":
		if ($user_points < 1100){
			header ("Location: homepage.php?error=NOT ENOUGH POINTS");
			exit();
		}
		$user_points -= 1100;
		break;
	case "orange":
		if ($user_points < 199){
			header ("Location: homepage.php?error=NOT ENOUGH POINTS");
			exit();
		}
		$user_points -= -199;
		break;
	case "avacado":
		if ($user_points < 199){
			header ("Location: homepage.php?error=NOT ENOUGH POINTS");
			exit();
		}
		$user_points -= 199;
		break;
	case "carrots":
		if ($user_points < 99){
			header ("Location: homepage.php?error=NOT ENOUGH POINTS");
			exit();
		}
		$user_points -= 99;
		break;
	case "limes":
		if ($user_points < 49){
			header ("Location: homepage.php?error=NOT ENOUGH POINTS");
			exit();
		}
		$user_points -= 49;
		break;
	case "sweetpotato":
		if ($user_points < 49){
			header ("Location: homepage.php?error=NOT ENOUGH POINTS");
			exit();
		}
		$user_points -= 49;
		break;
	case "lettuce":
		if ($user_points < 299){
			header ("Location: homepage.php?error=NOT ENOUGH POINTS");
			exit();
		}
		$user_points -= 299;
		break;
}

$query = "UPDATE person SET points = $user_points WHERE username = '$user_name'";
$result = mysqli_query($conn, $query);
if($result) {
	header ("Location: homepage.php#username");
	exit();
}
?>