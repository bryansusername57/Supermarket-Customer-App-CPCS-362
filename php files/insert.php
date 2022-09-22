<?php
if(isset($_POST['username'],$_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$db = new mysqli('localhost','root','','market');

	$sql = mysqli_query($db, "insert into person(p_num,username,password,money,points) values('','$username','$password',20.00,0)");

	if($sql) {
		header("Location: loginpage.php");
		die;
	}
	else {
		echo "Error";
	}

}

?>