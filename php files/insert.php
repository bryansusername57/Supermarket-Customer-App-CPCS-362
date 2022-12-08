<?php

include("functions.php");
$conn = mysqli_connect('localhost','root','','market');

if(isset($_POST['username'],$_POST['password'],$_POST['email'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	$num = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM person WHERE username = '$username'"));
	if ($num > 0) {
		header ("Location: signuppage.php?error=USERNAME HAS BEEN TAKEN");
		exit();
	}
	
	if(empty($username) || empty($password) || empty($email)) {
		header ("Location: signuppage.php?error=MISSING INFORMATION");
		exit();
	}

	$db = new mysqli('localhost','root','','market');

	$sql = mysqli_query($db, "insert into person(p_num,username,password,email,money,points) values('','$username','$password','$email',20.00,0)");

	if($sql) {
		header("Location: loginpage.php");
		die;
	}
	else {
		echo "Error";
	}

}

?>