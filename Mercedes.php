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
<title>Mercedes</title>
<link rel="icon" href="images/mcqueenicon.png"   type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8"/>
    <link rel="stylesheet" href="benz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
    <body>

        <header class="header90">
            <a href="home.php" class="logo">McQueenWheels</a>
            <ul >
                <li><a href="Brands.php">Brands</a></li>
                <li><a href="Rent.php">Rent</a></li>
                <li><a href="maintainance.php">Maintenance</a></li>
                <li><a href="Sell Your Car.php">Sell Your Car</a></li>
                <li><a href="about us.php">About</a></li>
                <li><a href="ContactUs.php">ContactUs</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </header>


        <div class="background-sliderag">
            <div class="image-containerag">
              <img src="images/mercedesS680.jpg" alt="Image 1">

              <button class="arrowag left-arrowag">&lt</button>
              <button class="arrowag right-arrowag">&gt</button>
            </div>
          </div>
          <script src="myscripts.js"></script>

          
        <div class="section-aAG">
            <p class="miniheaderAG">Responsibility </p>
            <h1 class="headerAG">Inclusion is unstoppable.</h1>
            <img class="effectAG" style="margin-left: 10%;" src="images/m1.png" width="30%" height="40%">
        </div>

        <div class="section-bAG">
            <p class="invertminiheaderAG">Milestone </p>
            <h1 class="invertheaderAG">Defining Class since 1886.</h1>
            <img class="effectAG" style="margin-left: 60% ;" src="images/m2.png" width="30%" height="50%">
        </div>

        <div class="section-cAG">
            <p class="miniheaderAG">Exclusive</p>
            <h1 class="headerAG">Mercedes-Benz' Interior.</h1>
            <img class="effectAG" style="margin-left: 10%; " src="images/m3.png" width="30%" height="30%">

        </div>

        <div class="section-dAG">
            <p class="invertminiheaderAG">Future Mobility</p>
            <h1 class="invertheaderAG">Neon Dreams.</h1>
            <img class="effectAG" style="margin-left: 60% ;" src="images/m4.png" width="30%" height="50%">


        </div>
        <div class="lineAG"></div>

        <div>
        <h1 class="headerAG" style="text-align: center; padding-left: 0%; margin-top: 2%; margin-bottom: 2%">Models</h1>
        </div>
     
      <div class="cardsAG"> 
    <div class="left-cardsAG">
    <div class="card1AG zhoverAG">
        <h1 class="carModelAG">G-Class</h1>
        <h3 class="descAG">The powerful sports car for two made for pure driving pleasure<br><span>From 64,000 $</span></h3>
        <a href="sclass.php?model=gclass"><button name="Sclassbtn" class="hbAG">Learn More</button></a>
    
    </div>
    
    <div class="card2AG zhoverAG">
        <h1 class="carModelAG">S600 Maybach</h1>
        <h3 class="descAG">The powerful sports car for two made for pure driving pleasure<br><span>From 64,000 $</span></h3>
        <a href="sclass.php?model=s600"><button name="Sclassbtn" class="hbAG">Learn More</button></a>

    </div>
</div>
<div class="right-cardsAG">
     <div class="card3AG zhoverAG">
        <h1 class="carModelAG">GLS Maybach</h1>
        <h3 class="descAG">The powerful sports car for two made for pure driving pleasure<br><span>From 64,000 $</span></h3>
        <a href="sclass.php?model=gls"><button name="Sclassbtn" class="hbAG">Learn More</button></a>
     </div>

     <div class="card4AG zhoverAG">
        <h1 class="carModelAG">AMG GTS</h1>
        <h3 class="descAG">The powerful sports car for two made for pure driving pleasure<br><span>From 93,000 $</span></h3>
        <a href="sclass.php?model=amg"><button name="Sclassbtn" class="hbAG">Learn More</button></a>
     </div>
</div>
    </div>

    <div class="lineAG"></div>

    

  

<div class="hidden-sectionAG">
    <h1 class="headerAG" style="text-align: center; padding-left: 0%; margin-top: 2%; margin-bottom: 2%">Discover</h1>   
    <div class="discover-cardsAG">

     <div class="classicTravelAG zhoverAG"><a href="https://www.mercedes-benz.com/en/art-and-culture/events-and-exhibitions/classic-car-travel/">
            <h1 class="discover-cardsTitleAG">Classic Cars</h1>
        </a>
    </div>

        <div class="mExperienceAG zhoverAG"><a href="https://www.mercedes-benz.com/en/art-and-culture/museum/art-collection/">
            <h1 class="discover-cardsTitleAG">Art Collection</h1>
        </a>
        </div>

    
         <div class="conceptcarsAG zhoverAG"><a href="https://www.mercedes-benz.com/en/innovation/concept-cars/vision-one-eleven/">
             <h1 class="discover-cardsTitleAG">Concept Cars</h1>
            </a>
         </div>
    </div>

</div>
<div class="showMoreBtnAG">
    <button id="showMoreButtonAG">Show More</button>
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


    

</html>