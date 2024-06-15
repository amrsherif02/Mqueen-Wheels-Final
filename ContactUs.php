<?php
// Set the cookie
$cookie_name = "MCQUEEN";
$cookie_value = "MCQUEEN_WHEELS";
setcookie($cookie_name, $cookie_value, time() + (8), "/"); // 86400 = 1 day

// Check if the cookie is set
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie named '" . $cookie_name . "' is not set!";
}
?>


<!DOCTYPE html>
<head>
<title>McqueenWheels</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js";></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="icon" href="images/mcqueenicon.png" type="image/x-icon">
<script src="Omar.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta charset="UTF-8"/>

<link rel="stylesheet" href="benz.css">
<body>
    <header class="header90">
        <a href="home.php" class="logo">McQueenWheels</a>
        <ul >
            <li><a href="Brands.php">Brands</a></li>
            <li><a href="Rent.php">Rent</a></li>
            <li><a href="maintainance.php">Maintenance</a></li>
            <li><a href="Sell Your Car.php">Sell Your Car</a></li>
            <li><a href="about us.php">About</a></li>
            <li><a href="ContactUs.php">Contact Us</a></li>
            
        </ul>
    </header>
   
    <div>
        <div class = "div210">
            <div style="text-align: center;"class="top">
                <p  class="head210">Contact Us</p>
                <h1= class="mini210"> Tell us what is your problem and we will help you!</h1>
            </div>
    </div>
    <div class = "box210">
        <form name="myForm" id="myForm" method="post">
            <div class="container210">
              <h1>Send A Message</h1>
              <p>Fill this form with your complain so we can help you</p>
              <hr class="hr210">
          
              <label for="First Name"><b>First Name</b></label>
              <input type="text" name="Phone" id="FirstName" placeholder="First Name" required>
          
              <label for="Last Name"><b>Last Name</b></label>
              <input type="text" id="LastName" placeholder="Last Name"required>
          
              <label for="Phone"><b>Phone Number</b></label>
              <input type="number" id="PhoneNumber" placeholder="Phone Number" required>

              <label for="Email"><b>Email</b></label>
              <input type="email" id="Email" placeholder="Emai"required>

              <label for="Description"><b>Description</b></label>
              <input type="text" id="Description" placeholder="Write your problem description"required>

              <hr class="hr210">
          
              <button type="submit" value="submit" id="Submitbtn210" class="Submitbtn210">Submit</button>
            </div>
          </form>
    </div>
    <div class="box1210">
        <div class="container2210">
            <h1>Contact Info</h1>
            <hr class="hr1210">
            <div>
                <img src="images/telepic.png" width="10%" height="10%" >
                <h3 style="margin-top: -6%; padding-left: 12%;">01010621911</h3>
            </div>
            <div style="margin-top: 5%;">
                <img src="images/mailpic.png" width="10%" height="10%" >
                <h3 style="margin-top: -6%; padding-left: 12%;">omar220091@bue.edu.eg</h3>
            </div>
            <div style="margin-top: 5%;">
                <img src="images/telepic.png" width="10%" height="10%">
                <h3 style="margin-top: -6%; padding-left: 12%;">01061132029</h3>
            </div>
            <div style="margin-top: 5%;">
                <img src="images/mailpic.png" width="10%" height="10%">
                <h3 style="margin-top: -6%; padding-left: 12%;">youssef224190@bue.edu.eg</h3>
            </div>
    
            <div style="margin-top: 5%;">
                <img src="images/telepic.png" width="10%" height="10%">
                <h3 style="margin-top: -6%; padding-left: 12%;">010003990563</h3>
            </div>
            <div style="margin-top: 5%;">
                <img src="images/mailpic.png" width="10%" height="10%">
                <h3 style="margin-top: -6%; padding-left: 12%;">amr220933@bue.edu.eg</h3>
            </div>
        
        <div style="margin-top: 5%;">
            <img src="images/telepic.png" width="10%" height="10%">
            <h3 style="margin-top: -6%; padding-left: 12%;">01097534186</h3>
        </div>
        <div style="margin-top: 5%;">
            <img src="images/mailpic.png" width="10%" height="10%">
            <h3 style="margin-top: -6%; padding-left: 12%;">ahmed222739@bue.edu.eg</h3>
        </div>
        
    
          
            <button class="show-more210" style="display: none;">Show More</button>
            <button class="show-less210">Show Less</button>
        </div>
    </div>
    
    
    
</div>
</div>
</div>

<script src="contactUsScript.js"></script>


<div style="background-color: #a30000;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="successModal222" class="modal">
    <div style="color: white; font-size: 30px;margin-top: 15%" class="modal-content222">
        <span class="close222">&times;</span>
        <i class="fa-solid fa-circle-check"></i>
        <p style="max-width: 200px; margin-left: 30px;">Rent made successfully!</p>
        
    </div>
</div>


<div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="errorModal222" class="modal">
    <div style="color: rgb(0, 0, 0); font-size: 30px; margin-top: 15%;" class="modal-content222">
        <span id="errorCloseButton222" class="close222">&times;</span>
        <i class="fa-solid fa-circle-xmark"></i>
        <p>Please complete the form first.</p>
    </div>
</div>
<footer>
    <div class="footermain">
     <div class="footer1">
         <div class="footer1-a">
             <img src="images/Mcqueen Wheels.png" alt="logo">
         </div>
         <div class="footer1-b">
             <img src="images/facebook.png" alt="face">
             <img src="images/Twitter.png" alt="twit">
             <img src="images/tiktok.png" alt="tik">
             <img src="images/Linkedin.png" alt="link">
             <img src="images/instagram.png" alt="insta">
         </div>
     </div>
     <div class="footer2">
         <a href="Brands.php">
         <h2 class="footer-topic">Brands</h2>
     </a>
        <a href="Mercedes.php">Porche</a>
        <a href="Mercedes.php">Rolls Royce</a>
        <a href="Mercedes.php">Mercedes</a>
        <a href="Mercedes.php">Ferrari</a>
        <a href="Mercedes.php">Bentley</a>
        <a href="Mercedes.php">Lamborghini</a>
     </div>
     <div class="footer3">
         <h2 class="footer-topic">Services</h2>
        <a href="ContactUs.php">Contact Us</a>
        <a href="SellYourCar.php">Sell your Car</a>
        <a href="">Maintenance</a>
        <a href="Rent.php">Rent</a>
     </div>
     <div class="footer4">
         <a href="ContactUs.php">
         <h2 class="footer-topic">Contact Us</h2>
     </a>
     </div>

     <div class="footer6">
         <div class="footer6-a">
           <img src="images/ic_round-email.png" alt="">
           <p>info@mqueenwheels.com</p>
         </div>
         <div class="footer6-c">
             <img src="images/mdi_address-marker.png" alt="">
             <p>31 Helmeit EL Zeiton</p>
         </div>
         <div class="footer6-d">
             <img src="images/solar_phone-bold.png" alt="">
             <p>19991</p>
         </div>
     </div>
    </div>
    <p class="lastaya">© 2024 `McqueenWheels. ALL RIGHTS RESERVED. POWERED BY HSBC.</p>
 </footer>

 <script src="amrscript.js"></script>
</body>
</head>