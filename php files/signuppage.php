<?php
session_start();

if(isset($_POST['username'],$_POST['password'])) {
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		
		$db = new mysqli('localhost','root','','testing');

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$sql = mysqli_query($db, "insert into login(p_num,username,password) values('','$username','$password')");

			mysqli_query($con, $query);

			header("Location: loginpage.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">

       <meta charset="UTF-8">

         <title>Supermarket Customer</title>

    </head>

    <body>

        <h1>Sign Up</h1>

        <form method="post">

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>

    </body>

</html>