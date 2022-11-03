<?php
session_start();

$conn = mysqli_connect('localhost','root','','market');

if(isset($_POST['username'],$_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(empty($username) || empty($password)) {
		header ("Location: loginpage.php?error=MISSING INFORMATION");
		exit();
	}
	else {
		$query = "SELECT * FROM person WHERE username = '$username' limit 1";
		$result = mysqli_query($conn, $query);
		if($result) {
			if($result && mysqli_num_rows($result) > 0) {
				$user_data = mysqli_fetch_assoc($result);
				
				if($user_data['password'] === $password) {
					$_SESSION['p_num'] = $user_data['p_num'];
					header ("Location: homepage.php");
					exit();
				}
			}
		}
	}
	
		echo "wrong";
}
?>