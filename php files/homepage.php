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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

  
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
            <a href="#categories">Categories</a>
            <a href="#reviews">Reviews</a>
            <a href="#blogs">Blog</a>
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


<!-- Home section -->
<section class="home" id="home">
  
    <div class ="content">
        <h3>Shop for all your <span>groceries</span> from the convenience of your own home!</h3>
        <p> Testing</p>
        
        <a href= "#" class="btn">shop now</a>
</section>

<!-- Products section -->

<section class="products" id = "Products">
   <h1 class="heading"> our <span> products </span> </h1>

   <div class="swiper product-slider">

    <div class="swiper-wrapper">




      <div class="swiper-slide box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <a href = "productPageTemplate.php"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana"></a>
          <div class = "buttonUnderPic"> 
            <button class = "buyingButton" onclick="location.href = 'money.php?item=banana'" type="button"> Banana $0.49 </button>
          </div>
          <div class = "buttonUnderPic">
		        <button class = "buyingButton" onclick="location.href = 'money.php?item=banana'" type="button"> Use Points (49)</button>
	        </div>
      </div>

      <div class="swiper-slide box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <a href = "productPageTemplate.php"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana"></a>
          <div class = "buttonUnderPic"> 
            <button class = "buyingButton" onclick="location.href = 'money.php?item=watermelon'" type="button"> Watermelon $3.49 </button>
          </div>
          <div class = "buttonUnderPic">
		        <button class = "buyingButton" onclick="location.href = 'money.php?item=watermelon'" type="button"> Use Points (349) </button>
	        </div>
      </div>
      
      <div class="swiper-slide box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <a href = "productPageTemplate.php"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana"></a>
          <div class = "buttonUnderPic"> 
            <button class = "buyingButton" onclick="location.href = 'money.php?item=onion'" type="button"> Onion $0.99 </button>
          </div>
          <div class = "buttonUnderPic">
		        <button class = "buyingButton" onclick="location.href = 'money.php?item=onion'" type="button"> Use Points (99) </button>
	        </div>
      </div>

      <div class="swiper-slide box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <a href = "productPageTemplate.php"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana"></a>
          <div class = "buttonUnderPic"> 
            <button class = "buyingButton" onclick="location.href = 'money.php?item=chicken'" type="button"> Chicken $10.99 </button>
          </div>
          <div class = "buttonUnderPic">
		        <button class = "buyingButton" onclick="location.href = 'money.php?item=chicken'" type="button"> Use Points (1099) </button>
	        </div>
      </div>

    </div>
</div>
<div class="swiper product-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <a href = "productPageTemplate.php"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana"></a>
          <div class = "buttonUnderPic"> 
            <button class = "buyingButton" onclick="location.href = 'money.php?item=sweetpotato'" type="button"> Sweet Potato $0.49 </button>
          </div>
          <div class = "buttonUnderPic">
		        <button class = "buyingButton" onclick="location.href = 'money.php?item=sweetpotato'" type="button"> Use Points (49) </button>
	        </div>
      </div>

      <div class="swiper-slide box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <a href = "productPageTemplate.php"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana"></a>
          <div class = "buttonUnderPic"> 
            <button class = "buyingButton" onclick="location.href = 'money.php?item=avacado'" type="button"> Avacado $1.99 </button>
          </div>
          <div class = "buttonUnderPic">
		        <button class = "buyingButton" onclick="location.href = 'money.php?item=avacado'" type="button"> Use Points (199) </button>
	        </div>
      </div>

      <div class="swiper-slide box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <a href = "productPageTemplate.php"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana"></a>
          <div class = "buttonUnderPic"> 
            <button class = "buyingButton" onclick="location.href = 'money.php?item=carrots'" type="button"> Carrots $0.99 </button>
          </div>
          <div class = "buttonUnderPic">
		        <button class = "buyingButton" onclick="location.href = 'money.php?item=carrots'" type="button"> Use Points (99) </button>
	        </div>
      </div>

      <div class="swiper-slide box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <a href = "productPageTemplate.php"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana"></a>
          <div class = "buttonUnderPic"> 
            <button class = "buyingButton" onclick="location.href = 'money.php?item=limes'" type="button"> Limes $0.49 </button>
          </div>
          <div class = "buttonUnderPic">
		        <button class = "buyingButton" onclick="location.href = 'money.php?item=limes'" type="button">  Use Points (49) </button>
	        </div>
      </div>
</div>
    </div>
  </div>

</section>




<!-- Categories section -->
<section class="categories" id = "categories">

    <h1 class ="heading"> Product <span> categories</span> </h1>

    <div class = "box-container">

        <div class="box">
            <img src="image/cat-1.png" alt="">
            <h3>vegitables</h3>
            <p>up to 45% off</p>
            <button class="buyingButton" type = "button"> Shop now</button>
        </div>

        <div class="box">
            <img src="image/cat-2.png" alt="">
            <h3>Fresh Fruits</h3>
            <p>up to 45% off</p>
            <button class="buyingButton" type = "button"> Shop now</button>
        </div>

        <div class="box">
            <img src="image/cat-3.png" alt="">
            <h3>Dairy Products</h3>
            <p>up to 45% off</p>
            <button class="buyingButton" type = "button"> Shop now</button>
        </div>

        <div class="box">
            <img src="image/cat-4.png" alt="">
            <h3>Fresh Meat</h3>
            <p>up to 45% off</p>
            <button class="buyingButton" type = "button"> Shop now</button>
        </div>
    </div>
</section>


<!-- Review Section -->

<section class="review" id="reviews">

  <h1 class="heading">customer's <span>review</span></h1>

  <div class="swiper review-slider">

    <div class="swiper-wrapper">

      <div class="swiper-slide box">
        <img src="image/pic-1.png" alt="">
        <p>This is a test, testing to see if the test works when you test it</p>
        <h3>John Deo</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
      </div>

      <div class="swiper-slide box">
        <img src="image/pic-2.png" alt="">
        <p>This is a test, testing to see if the test works when you test it</p>
        <h3>John Deo</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
      </div>

      <div class="swiper-slide box">
        <img src="image/pic-3.png" alt="">
        <p>This is a test, testing to see if the test works when you test it</p>
        <h3>John Deo</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
      </div>

      <div class="swiper-slide box">
        <img src="image/pic-4.png" alt="">
        <p>This is a test, testing to see if the test works when you test it</p>
        <h3>John Deo</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
      </div>
    </div>

  </div>

</section>



<!--blogs section -->
<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/blog-1.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>Quick and Delicious Recipes for Busy Weeknights</h3>
                <p>This food blog focuses on providing easy and tasty recipes that can be made in a short amount of time, perfect for busy weeknights when you want a delicious meal but don't have a lot of time to spend in the kitchen.</p>
                <button class="buyingButton" type = "button"> Shop now</button>
            </div>
        </div>

        <div class="box">
            <img src="image/blog-2.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>Healthy and Flavorful Meals for Every Diet</h3>
                <p>This food blog features a variety of healthy and tasty recipes that are suitable for different dietary needs and preferences, from vegetarian and vegan to gluten-free and low-carb.</p>
                <button class="buyingButton" type = "button"> Shop now</button>
            </div>
        </div>

        <div class="box">
            <img src="image/blog-3.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>Creative Ideas for Your Next Dinner Party</h3>
                <p>This food blog offers inspiration and ideas for hosting a successful dinner party, from menu planning and recipe ideas to decor and table settings. Whether you are a seasoned host or new to entertaining, this blog has something for everyone.</p>
                <button class="buyingButton" type = "button"> Shop now</button>
            </div>
        </div>

    </div>

</section>



<!-- footer section -->

<section class="footer">

    <div class="box-container">

        <div class="box">
        <a class = "logo">
            <span>Frontend</span>Supermarket
        </a>
            <p>This is a mock grocery store web app</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> 555-555-1234 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> johndoe123@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> United States, California - 92704</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="#categories" class="links"> <i class="fas fa-arrow-right"></i> Categories </a>
            <a href="#reviews" class="links"> <i class="fas fa-arrow-right"></i> Reviews </a>
            <a href="#blogs" class="links"> <i class="fas fa-arrow-right"></i> Blog </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <button class="buyingButton" type = "button"> Shop now</button>
            <img src="image/payment.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> Long Vu and Bryan Nguyen </span> | all rights reserved </div>

</section>

<?php
echo "banana"
?>
<script src="https://cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.js"></script>

<script src = "script.js"></script>

</body>
</html>