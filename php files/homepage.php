<?php
session_start();

include("functions.php");
$conn = mysqli_connect('localhost','root','','market');

$user_data = check_login($conn);

echo $user_data['username'];

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

<p> Hello, <?php echo $user_data['username']; ?> </p>
<section class="home" id="home">
  <!-- Stopped at 33:49, did not write class content yet -->
</section>





<div class="row">

  <div class="column">
    <a href = "productPageTemplate.php"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
    
    <div class = "buttonUnderPic"> 
    <button class = "buyingButton" onclick="location.href = 'productPageTemplate.php';" type="button"> Buy</button>
    </div>
  
  </div>

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'https://www.google.com/';" type="button">  Buy</button>
    </div>
 
   </div>

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'https://www.google.com/';" type="button">  Buy </button>
    </div>
 
  </div>
   
</div>

<div class="row">

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
    
    <div class = "buttonUnderPic"> 
    <button class = "buyingButton" onclick="location.href = 'https://www.google.com/';" type="button"> Buy </button>
    </div>
  
  </div>

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'https://www.google.com/';" type="button">  Buy </button>
    </div>
 
   </div>
   
</div>


<div class="row">

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
    
    <div class = "buttonUnderPic"> 
    <button class = "buyingButton" onclick="location.href = 'https://www.google.com/';" type="button"> Buy </button>
    </div>
  
  </div>

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'https://www.google.com/';" type="button">  Buy </button>
    </div>
 
   </div>

   <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'https://www.google.com/';" type="button">  Buy </button>
    </div>
 
   </div>

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'https://www.google.com/';" type="button">  Buy </button>
    </div>
 
  </div>
   
</div>







<?php
echo "banana"
?>
<script src = "script.js"></script>

</body>
</html>

