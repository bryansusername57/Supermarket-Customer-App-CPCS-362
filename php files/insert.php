<?php

if(isset($_POST['username'],$_POST['password'],$_POST['email'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

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