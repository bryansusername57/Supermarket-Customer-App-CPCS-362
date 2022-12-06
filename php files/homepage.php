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
<link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class = "navigation">

        <a onclick="location.href='homepage.php'" class = "logo">
            <span>Frontend</span>Supermarket
        </a>

        <ul class="menu">
            <li><a href="#" class = "active">Home</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Our Packages</a></li>
            <li><a href="#">Our app</a></li>
        </ul>

        <div class = "right-nav">
          <button class = "SignoutButton" onclick="location.href='loginpage.php'" type="button"> Signout</button>
        </div>
    
    </nav>



<h2>Search Bar would go here</h2>
<p> Hello, <?php echo $user_data['username'];?>, you have $<?php echo $user_data['money'];?> </p>



<div class="row">

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
    
    <div class = "buttonUnderPic"> 
    <button class = "buyingButton" onclick="location.href = 'money.php?item=banana'" type="button"> Banana $0.49 </button>
    </div>
  
  </div>

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
	<button  class = "buyingButton" onclick="location.href = 'money.php?item=watermelon';" type="button">  Watermelon $3.49 </button>
	</form>
    </div>
 
   </div>

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'money.php?item=onion';" type="button">  Onion $0.99 </button>
    </div>
 
  </div>
   
</div>

<div class="row">

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
    
    <div class = "buttonUnderPic"> 
    <button class = "buyingButton" onclick="location.href = 'money.php?item=chicken';" type="button"> Chicken $10.99 </button>
    </div>
  
  </div>

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'money.php?item=sweetpotato';" type="button">  Sweet Potato $0.49 </button>
    </div>
 
   </div>
   
</div>


<div class="row">

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
    
    <div class = "buttonUnderPic"> 
    <button class = "buyingButton" onclick="location.href = 'money.php?item=avacado';" type="button"> Avacado $1.99 </button>
    </div>
  
  </div>

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'money.php?item=carrots';" type="button">  Carrots $0.99 </button>
    </div>
 
   </div>

   <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'money.php?item=limes';" type="button">  Limes $0.49 </button>
    </div>
 
   </div>
   
</div>

<div class="row">

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'money.php?item=orange';" type="button">  Orange $1.99 </button>
    </div>
 
  </div>
    <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
  
    <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'money.php?item=lettuce';" type="button">  Lettuce $2.99 </button>
    </div>
 
  </div>

</div>





<?php
echo "banana"
?>

</body>

</html>

