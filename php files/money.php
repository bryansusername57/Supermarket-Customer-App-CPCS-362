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
	case "addMoney":
		$user_money += 20.00;
		break;
	case "watermelon":
		if ($user_money < 3.49){
			header ("Location: homepage.php?error=NOT ENOUGH MONEY");
			exit();
		}
		$user_money -= 3.49;
		$user_points += 35;
		break;
	case "banana":
		if ($user_money < 0.49){
			header ("Location: homepage.php?error=NOT ENOUGH MONEY");
			exit();
		}
		$user_money -= 0.49;
		$user_points += 5;
		break;
	case "onion":
		if ($user_money < 0.99){
			header ("Location: homepage.php?error=NOT ENOUGH MONEY");
			exit();
		}
		$user_money -= 0.99;
		$user_points += 10;
		break;
	case "chicken":
		if ($user_money < 10.99){
			header ("Location: homepage.php?error=NOT ENOUGH MONEY");
			exit();
		}
		$user_money -= 10.99;
		$user_points += 110;
		break;
	case "orange":
		if ($user_money < 1.99){
			header ("Location: homepage.php?error=NOT ENOUGH MONEY");
			exit();
		}
		$user_money -= 1.99;
		$user_points += 20;
		break;
	case "avacado":
		if ($user_money < 1.99){
			header ("Location: homepage.php?error=NOT ENOUGH MONEY");
			exit();
		}
		$user_money -= 1.99;
		$user_points += 20;
		break;
	case "carrots":
		if ($user_money < 0.99){
			header ("Location: homepage.php?error=NOT ENOUGH MONEY");
			exit();
		}
		$user_money -= 0.99;
		$user_points += 10;
		break;
	case "limes":
		if ($user_money < 0.49){
			header ("Location: homepage.php?error=NOT ENOUGH MONEY");
			exit();
		}
		$user_money -= 0.49;
		$user_points += 5;
		break;
	case "sweetpotato":
		if ($user_money < 0.49){
			header ("Location: homepage.php?error=NOT ENOUGH MONEY");
			exit();
		}
		$user_money -= 0.49;
		$user_points += 5;
		break;
	case "lettuce":
		if ($user_money < 2.99){
			header ("Location: homepage.php?error=NOT ENOUGH MONEY");
			exit();
		}
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
	header ("Location: homepage.php#username");
	exit();
}
?>