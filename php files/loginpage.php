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
      <form action="checklogin.php" method="post" class="login-form">
	  <?php if(isset($_GET['error'])) { ?>
			<p class="error"> <?php echo $_GET['error']; ?> </p>
	  <?php } else {?>
	  <?php }?>
      <input type="text" placeholder="Username" name="username"/>
      <input type="password" placeholder="Password" name="password"/>
	  
      <button>Login</button>
      <p class="message">Not registered? <a href="signuppage.php">Click to SIgnup</a></p>
    </form>
    </div>
    </div>
      <!--<h1>Login</h1>

      <form method="post">

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="Signup.php">Click to Signup</a><br><br> 
		</form> -->

    </body>

</html>
