<!DOCTYPE html>
<html lang="en">
    <head>
		<link rel="stylesheet" href="style.css">
		
		<meta charset="UTF-8">

         <title>Supermarket Customer</title>

    </head>

	<body>
      <div class="login-page">
      <div class="form">
      <form action="insert.php" method="post" class="login-form">
	  <?php if(isset($_GET['error'])) { ?>
			<p class="error"> <?php echo $_GET['error']; ?> </p>
		<?php } ?>
      <input type="text" placeholder="Username" name="username"/>
      <input type="password" placeholder="Password" name="password"/>
	  <input type="text" placeholder="Email Address" name="email"/>
	  
      <button>Sign Up</button>
      <p class="message">Already registered? <a href="loginpage.php">Go to Login</a></p>
    </form>
    </div>
    </div>

    <!--<body>

        <h1>Sign Up</h1>

        <form action="insert.php" method="post">

			<input id="text" type="text" name="username"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<tr>
			<td><input type="submit" name"submit" value="Sign Up"</td><br><br>
			</tr>

			<a href="loginpage.php">Click to Login</a><br><br>
		</form>-->

    </body>

</html>