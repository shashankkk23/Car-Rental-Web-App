<?php
  include 'config.php';

  $uemail = $_POST['email'];
  $pwd = $_POST['pass'];

  $sql = "SELECT * FROM drivers WHERE Email='$uemail' AND pass='$pwd'";
  $result = mysqli_query($conn, $sql);

  if (!$row = mysqli_fetch_assoc($result)){
    echo "<script>alert('Your username or password is incorrect!'); window.location='Login_driver.php';</script>";
	
} else {?>
    <script>alert('You are logged in!')</script>

<!DOCTYPE HTML>
<html>
<head>

<title>Vintage Car Rental</title>
<link rel="stylesheet" type="text/css" href="styles/Home_styles.css">
<link rel="stylesheet" type="text/css" href="styles/view_customer.css">   
<link rel="stylesheet" type="text/css" href="styles/footer.css">
	<script src="js/editpro.js"> </script>	

<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<script src="js/navigation.js"></script>

</head>
<body style="background-color:black" >


<div style="background-color:orange; width:100%; height:176px; padding-bottom:20px">
<a href="index.html"><img src="images/LOGO11.png" width="192" height="192" class="logo" style="border-radius:100px; padding-top:2px; padding-left:5px" align="left"></a>

<div style="padding-top: 1px;  padding-left: 10px; padding-right:150px;">
<header>
<center><h1 class="monospace"><b>Vintage Car Rental</b></h1></center>
<p style="position: relative; text-align:right; width:111%; font-size:18px"><a href="Login_driver.php" style="text-decoration:none">LOG OUT </a></p>
</header>
</div>
</div>
<ul class="menu">
   <li class="menu"><a href="index.html"><i class="fa fa-home" id="nav-image"></i>Home</a></li>
   <li class="menu"><a href="about us.html"><i class="fa fa-user" id="nav-image"></i>About Us</a></li>
   <li class="menu"><a href="Rates.php"><i class="fa fa-usd" id="nav-image"></i>Rates</a></li>
   <li class="menu"><a href="contactUs.html"><i class="fa fa-phone" id="nav-image"></i>Contact Us</a></li>
</ul>

<div class="contact">
<center><font color="white">Welcome <?php echo $row['fName'] ?>!!! </font></center>
</div>  
<div class="wrapper">
<img src="images/avatar.png" width="150" height="150"  style="border-radius:100px"><br><br>
Driver ID : <?php echo $row['driverID'] ?><br><br>
First Name : <?php echo $row['fName'] ?><br><br>
Last Name  : <?php echo $row['lName'] ?><br><br>
Date of Birth : <?php echo $row['DOB'] ?><br><br>
E-mail : <?php echo $row['Email'] ?><br><br>
Phone Number : <?php echo $row['pNumber'] ?><br><br>
Gender : <?php echo $row['gender'] ?><br><br>
Driving License Number : <?php echo $row['drivingLicenseNo'] ?><br><br>

<center>
<a href="driver update.html"><input type="submit" id="btn1" value="Update Your Profile" ></a>
<a href="delete driver.html"><input type="submit" id="btn2" value="Delete Your Profile" ></a>
<center>
</div>

<?php
}
?>
<br>
<br>

<footer style="background-color:#283c5f; width:100%; height:200px; padding-top:2px">
<div class="main-content">
<div class="left box1">
<h4><a href="#"></a></h4>
<h5><a href="index.html">HOME</a></h5>
<h5><a href="terms.html">TERMS & CONDITIONS</a></h5>
<h5><a href="testimonials.html">TESTIMONIALS</a></h5>
</div>

<div class="left box2">
<h4><a href="#"></a></h4>
<h5><a href="Rates.php">RATES</a></h5>
<h5><a href="about us.html">ABOUT US</a></h5>
<h5><a href="contactUs.html">CONTACT US</a></h5>
</div>

<img src="images/LOGO12.png" width="170px" height="170px" class="logo" style="padding-top:15px; padding-left:10px; padding-right:230px;" align="center">

<div class="right box3">
<h4><font color="white">FOLLOW US</font></h4>


<div class="social">
<a href="#"><img src="images/facebook.png" alt="facebookicon"></a>
<a href="https://www.twitter.com/iriteshmishra"><img src="images/twitter.png" alt="twittericon"></a>
<a href="https://www.instagram.com/virat.kohli"><img src="images/instagram.png" alt="instagramicon"></a>
<a href="#"><img src="images/youtube.png" alt="youtubeicon"></a>
</div>
</div>
</div>
</footer>
<h5 align="center" style="font-family:'Poppins', sans-serif"><font color="white">Copyright 2022 © Shashank Tiwari . All Rights Reserved.</font></h5>
</body>





