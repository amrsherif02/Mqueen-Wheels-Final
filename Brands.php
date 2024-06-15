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
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Brands</title>
    <link rel="stylesheet" href="benz.css">
    <link rel="icon" href="images/mcqueenicon.png" type="image/x-icon">
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
            <li><a href="ContactUs.php">Contact Us</a></li>
           
        </ul>
    </header>
    <div class="brandstop44">
        <p id="falling2444">Drive The<br>Future</p>
    </div>
    <div class="container44">
        <div class="brandcard44">
            <div class="left44">
            <div class="logo144">
                <img src="images/merclogor.png" alt="mercedes logo" style="width: 10vh;height: 10vh;margin-left: 2%;margin-top: 3vh;">
                <span class="text44"><strong>Mercedes</strong></span>
            </div>
            <div class="description44">
                <p><b>Biturbo torque, from a V8 or V12, is apportioned to all four wheels with constantly calculated precision. Changing weather or winding road, 4MATIC® sends power to the wheels that can use it best. Biturbo torque, from a V8 or V12, is apportioned to all four wheels with constantly calculated precision. Changing weather or winding road, 4MATIC® sends power to the wheels that can use it best.</b></p>
            </div>
            </div>
            <div class="right44">
                <img src="images/merccar.png" alt="mercedes car" style="width: 100%;height:auto ;margin-top: 2%;padding-top: 0%;">
                <a href="Mercedes.php">
                <button class="hb44">Learn More</button>
                </a>
            </div>
           
        </div>
        <div class="brandcard44">
            <div class="left44">
            <div class="logo144">
                <img src="images/pngimg.com - porsche_logo_PNG7.png" alt="mercedes logo" style="width: 10vh;height: 10vh;margin-left: 2%;margin-top: 3vh;">
                <span class="text44"><strong>Porsche</strong></span>
            </div>
            <div class="description44">
                <p><b> Porsche's advanced drivetrain technology ensures optimal performance in all conditions. Whether facing changing weather or navigating winding roads, power from the potent Biturbo engine, available in both V8 and V12 configurations, is intelligently distributed to all four wheels through Porsche's precision-engineered all-wheel-drive system. This ensures unparalleled traction and handling, allowing drivers to experience the full potential of their Porsche across diverse driving scenarios.</b></p>
            </div>
            </div>
            <div class="right44">
                <img src="images/pngwing 1 (1).png" alt="porche car" style="width: 100%;height:200px ;padding-left: 36px;">
                <a href="Mercedes.php">
                    <button class="hb44">Learn More</button>
                    </a>
            </div>
           
        </div>
        <div class="brandcard44">
            <div class="left44">
            <div class="logo144">
                <img src="images/pngwing.com-2 1.png" alt="Ferarri logo" style="width: 10vh;height:12vh;padding-top:3vh ;padding-left: 2%;">
                <span class="text44"><strong>Ferarri</strong></span>
            </div>
            <div class="description44">
                <p><b>Ferrari, the epitome of Italian automotive excellence, blends unparalleled performance with striking design. Each Ferrari is a masterpiece of engineering, boasting powerful engines and cutting-edge technology. With a rich racing heritage and iconic models like the 488 and F8 Tributo, Ferrari continues to captivate enthusiasts worldwide with its passion for performance.</b></p>
            </div>
            </div>
            <div class="right44">
                <img src="images/pngwing 1 (2).png" alt="ferarri car" style="width: 100%;height:200px ;margin-top: 2%;padding-top: 0%;">
                <a href="Mercedes.php">
                    <button class="hb44">Learn More</button>
                    </a>
            </div>
           
        </div>
        <div class="brandcard44">
            <div class="left44">
            <div class="logo144">
                <img src="images/Rolls Royce copy 1 (1).png" alt="rolls royce logo" style="width: 10vh;height: 15vh;margin-left: 2%;margin-top: 3vh;">
                <span class="text44"><strong>Rolls Royce</strong></span>
            </div>
            <div class="description44">
                <p><b>Rolls-Royce represents the pinnacle of automotive luxury, renowned for its exquisite craftsmanship and timeless elegance. With unparalleled attention to detail, every Rolls-Royce is a symbol of prestige and refinement. From its iconic Spirit of Ecstasy emblem to its handcrafted interiors, owning a Rolls-Royce is an experience of unparalleled luxury and sophistication.</b></p>
            </div>
            </div>
            <div class="right44">
                <img src="images/kisspng-2016-rolls-royce-ghost-rolls-royce-phantom-drophea-white-rolls-royce-ghost-luxury-car-5a73273fd8d234.3242967615174961278881 1.png" alt="Rolls Royce car" style="width: 100%;height:180px ;margin-top: 2%;padding-top: 0%;">
                <a href="Mercedes.php">
                    <button class="hb44">Learn More</button>
                    </a>
            </div>
           
        </div>
        <div class="brandcard44">
            <div class="left44">
            <div class="logo144">
                <img src="images/Webp.net-resizeimage (9).png" alt="Bentely logo" style="width: 18vh;height: 16vh;margin-left: 1.5%;margin-top: 3vh;">
                <span class="text44"><strong>Bentely</strong></span>
            </div>
            <div class="description44">
                <p><b>Bentley embodies luxury and performance, offering an unparalleled driving experience. Crafted with precision and elegance, each Bentley is a masterpiece of automotive engineering. From the smooth purr of its engine to the opulent interior, every detail exudes sophistication. Experience the epitome of luxury with Bentley.</b></p>
            </div>
            </div>
            <div class="right44">
                <img src="images/WhatsApp_Image_2024-04-11_at_11.17.42_PM-removebg-preview.png" alt="Bentely car" style="width: 100%;height:200px ;margin-top: 2%;padding-top: 0%;">
                <a href="Mercedes.php">
                    <button class="hb44">Learn More</button>
                    </a>
            </div>
           
        </div>
        <div class="brandcard44">
            <div class="left44">
            <div class="logo144">
                <img src="images/kisspng-lamborghini-sports-car-audi-logo-lamborghini-5ad27c173ee368.4901153115237437672576.png" alt="mercedes logo" style="width: 10vh;height: 10vh;margin-left: 2%;margin-top: 3vh;">
                <span class="text44"><strong>Lamborghini</strong></span>
            </div>
            <div class="description44">
                <p><b>Lamborghini's iconic roar comes from a powerful engine, delivering unrivaled performance. With cutting-edge technology, it harnesses every bit of power for thrilling drives on any terrain. From city streets to open highways, Lamborghini excites with its blend of style and speed.</b></p>
            </div>
            </div>
            <div class="right44">
                <img src="images/lambohurrican-removebg-preview.png" alt="lambo car" style="width: 100%;height:auto ;margin-top: 0px;padding-top: 0px;">
                <a href="Mercedes.php">
                    <button class="hb44">Learn More</button>
                    </a>
            </div>
           
        </div>
    </div>
<div class="buttondiv90">
    <button onclick="scrollToTop()" class="card-button90">up</button>
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