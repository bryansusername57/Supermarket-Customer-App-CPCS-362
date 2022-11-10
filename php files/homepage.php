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
<p> Hello, <?php echo $user_data['username']; ?> </p>



<div class="row">

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:100%"></a>
    
    <div class = "buttonUnderPic"> 
    <button class = "buyingButton" onclick="location.href = 'https://www.google.com/';" type="button"> Buy</button>
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

</body>

</html>

