<?php
$conn = mysqli_connect('localhost','root','','market');

$query = "SELECT * FROM person";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_row($result)) {
    printf("Hello (%s)", $row[1]);
	printf(" You have $%s left", $row[4]);
	echo "<br />";
}

echo 'banana';
?>

<!DOCTYPE html>


<html lang="en">
<head>
<style>

* {
  box-sizing: border-box;
}

.column {
  float: left; 
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
} 

body {
  background: #76b852; /* fallback for old browsers */
  background: rgb(141,194,111);
  background: linear-gradient(90deg, rgba(141,194,111,1) 0%, rgba(118,184,82,1) 50%);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}

button.SignoutButton {
  float: right;
  display: inline-block;
  outline: 0;
  cursor: pointer;
  text-align: center;
  border: 0;
  padding: 7px 50px;
  min-height: 36px;
  min-width: 36px;
  color: #ffffff;
  background: #008060;
  border-radius: 4px;
  font-weight: 500;
  font-size: 14px;
  box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 0px 0px, rgba(0, 0, 0, 0.2) 0px -1px 0px 0px inset;
  :hover {
      background: #006e52;
   }
                
}

.buttonUnderPic {
  position: relative;
  left: 20px;
  padding: 15px;
                
}

button.buyingButton {
  
  display: inline-block;
                outline: 0;
                border: 0;
                cursor: pointer;
                will-change: box-shadow,transform;
                background: radial-gradient( 100% 100% at 100% 0%, #89E5FF 0%, #1fd14f 100% );
                box-shadow: 0px 2px 4px rgb(45 35 66 / 40%), 0px 7px 13px -3px rgb(45 35 66 / 30%), inset 0px -3px 0px rgb(58 65 111 / 50%);
                padding: 0 32px;
                border-radius: 6px;
                color: #fff;
                height: 30px;
                font-size: 18px;
                text-shadow: 0 1px 0 rgb(0 0 0 / 40%);
                transition: box-shadow 0.15s ease,transform 0.15s ease;
                :hover {
                    box-shadow: 0px 4px 8px rgb(45 35 66 / 40%), 0px 7px 13px -3px rgb(45 35 66 / 30%), inset 0px -3px 0px #3c4fe0;
                    transform: translateY(-2px);
                }
                :active{
                    box-shadow: inset 0px 3px 7px #3c4fe0;
                    transform: translateY(2px);
                }
                
}
</style>
</head>

<body>
<button class = "SignoutButton" onclick="location.href='loginpage.php'" type="button"> Signout</button>

<h2>Images Side by Side</h2>
<p>How to create side-by-side images with the CSS float property:</p>



<div class="row">

  <div class="column">
    <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:50%"></a>
  <div class = "buttonUnderPic"> 
    <button class = "buyingButton" onclick="location.href = 'https://www.google.com/';" type="button"> Buy Banana</button>
   </div>
  </div>

  <div class="column">
  <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:50%"></a>
  <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'https://www.google.com/';" type="button">  Buy Banana</button>
   </div>
 </div>

  <div class="column">
  <a href = "https://www.google.com/"><img src="https://cdn.pixabay.com/photo/2012/04/26/18/41/banana-42793__340.png" alt="Banana" style="width:50%"></a>
  <div class = "buttonUnderPic"> 
    <button  class = "buyingButton" onclick="location.href = 'https://www.google.com/';" type="button">  Buy Banana</button>
   </div>
</div>

</div>



<?php
echo "banana"
?>

</body>

</html>

