<?php
session_start();

include("functions.php");
$conn = mysqli_connect('localhost','root','','market');

$user_data = check_login($conn);

echo 'banana'; 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<header class="header">

        <a onclick="location.href='homepage.php'" class = "logo">
            <span>Frontend</span>Supermarket
        </a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#">Categories</a>
            <a href="#">Packages</a>
            <a href="#">App</a>
        </nav>

        <div class="icons">
          <div class="fas fa-bars" id="menu-btn"></div>
          <div class="fas fa-search" id="search-btn"></div>
          <div class="fas fa-shopping-cart" id="cart-btn"></div>
          <div class="fas fa-user" id="login-btn"></div>
        </div>

        <form action="" class = "search-form">
            <input type ="search" id = "search-box" placeholder= "search here...">
            <label for = "search-box" class = "fas fa-search"></label>
        </form>
        <!--<div class = "right-nav">
          <button class = "SignoutButton" onclick="location.href='loginpage.php'" type="button"> Signout</button>
        </div>
         -->
         <div class="shopping-cart">
            <div class="box">
              <i class="fas fa-trash"></i>
              <img src="image/cart-img-1.png" alt="">
              <div class="content">
                  <h3>watermelon</h3>
                  <span class = "price">$4.99/-</span>
                  <span class = "quantity">qty : 1</span>
              </div>
            </div>
            <div class="box">
            <i class="fas fa-trash"></i>
              <img src="image/cart-img-2.png" alt="">
              <div class="content">
                  <h3>onion</h3>
                  <span class = "price">$4.99/-</span>
                  <span class = "quantity">qty : 1</span>
              </div>
            </div>
            <div class="box">
            <i class="fas fa-trash"></i>
              <img src="image/cart-img-3.png" alt="">
              <div class="content">
                  <h3>chicken</h3>
                  <span class = "price">$4.99/-</span>
                  <span class = "quantity">qty : 1</span>
              </div>
            </div>
            <div class="total"> total : 19.69/- </div>
            <a href="#" class= "btn">checkout</a>
         </div>

         
</header>

<p> Hello, <?php echo $user_data['username'];?>, you have $<?php echo $user_data['money'];?> and <?php echo $user_data['points'];?> points.</p>
<?php if(isset($_GET['error'])) { ?>
<p class="error"> <?php echo $_GET['error']; ?> </p>
<?php } else {?>
<?php }?> </p>

<section class="home" id="home">
  <!-- Stopped at 33:49, did not write class content yet -->
</section>





<div class="row">

  <div class="column">
    <a href = "productPageTemplate.php"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
    
    <div class = "buttonUnderPic"> 
      <button class = "buyingButton" onclick="location.href = 'money.php?item=banana'" type="button"> Banana $0.49 </button>
	    <div class = "buttonUnderPic">
		  <button class = "buyingButton" onclick="location.href = 'points.php?item=banana'" type="button"> Use Points (49) </button>
	    </div>
    </div>
  
  </div>

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
	    <button  class = "buyingButton" onclick="location.href = 'money.php?item=watermelon';" type="button">  Watermelon $3.49 </button>
	    <div class = "buttonUnderPic">
		  <button class = "buyingButton" onclick="location.href = 'points.php?item=watermelon'" type="button"> Use Points (349) </button>
	    </div>
    </div>
 
   </div>

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
      <button  class = "buyingButton" onclick="location.href = 'money.php?item=onion';" type="button">  Onion $0.99 </button>
	    <div class = "buttonUnderPic">
		  <button class = "buyingButton" onclick="location.href = 'points.php?item=onion'" type="button"> Use Points (99) </button>
	    </div>
    </div>
 
  </div>
   
</div>

<div class="row">

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
    
    <div class = "buttonUnderPic"> 
    <button class = "buyingButton" onclick="location.href = 'money.php?item=chicken';" type="button"> Chicken $10.99 </button>
	<div class = "buttonUnderPic">
		<button class = "buyingButton" onclick="location.href = 'points.php?item=chicken'" type="button"> Use Points (1099) </button>
	</div>
    </div>
  
  </div>

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'money.php?item=sweetpotato';" type="button">  Sweet Potato $0.49 </button>
	<div class = "buttonUnderPic">
		<button class = "buyingButton" onclick="location.href = 'points.php?item=sweetpotato'" type="button"> Use Points (49) </button>
	</div>
    </div>
 
   </div>
   
</div>


<div class="row">

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
    
    <div class = "buttonUnderPic"> 
    <button class = "buyingButton" onclick="location.href = 'money.php?item=avacado';" type="button"> Avacado $1.99 </button>
	<div class = "buttonUnderPic">
		<button class = "buyingButton" onclick="location.href = 'points.php?item=avacado'" type="button"> Use Points (199) </button>
	</div>
    </div>
  
  </div>

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'money.php?item=carrots';" type="button">  Carrots $0.99 </button>
	<div class = "buttonUnderPic">
		<button class = "buyingButton" onclick="location.href = 'points.php?item=carrots'" type="button"> Use Points (99) </button>
	</div>
    </div>
 
   </div>

   <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'money.php?item=limes';" type="button">  Limes $0.49 </button>
	<div class = "buttonUnderPic">
		<button class = "buyingButton" onclick="location.href = 'points.php?item=limes'" type="button"> Use Points (49) </button>
	</div>
    </div>
 
   </div>
   
</div>


<div class="row">

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'money.php?item=orange';" type="button">  Orange $1.99 </button>
	<div class = "buttonUnderPic">
		<button class = "buyingButton" onclick="location.href = 'points.php?item=orange'" type="button"> Use Points (199) </button>
	</div>
    </div>
 
  </div>
    <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'money.php?item=lettuce';" type="button">  Lettuce $2.99 </button>
	<div class = "buttonUnderPic">
		<button class = "buyingButton" onclick="location.href = 'points.php?item=lettuce'" type="button"> Use Points (299) </button>
	</div>
    </div>
 
  </div>

</div>





<?php
echo "banana"
?>
<script src = "script.js"></script>

</body>
</html>

