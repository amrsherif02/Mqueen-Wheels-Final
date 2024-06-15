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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="benz.css">
    <link rel="icon" href="images/mcqueenicon.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

</head>
<body >


<script>
        function displayCookieAlert() {
            alert("This website uses cookies. By continuing to use this website, you accept our use of cookies.");
        }

        window.onload = function() {
            displayCookieAlert();
        };
    </script>


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
    <main>
    <div class="background-slider23">
        <div class="image-container23">
          <img src="images/mercyo.JPG" alt="Image 1">
          <button class="arrow23 left-arrow23">&lt;</button>
          <button class="arrow23 right-arrow23">&gt;</button>
        </div>
      </div>
     <!-- <section class="banner"></section>-->
    <!-- <script type="text/javascript">
        window.addEventListener("scroll",function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky",window.scrollY>0);
        })
    </script> -->

    <div class="whoarewe23">
        <h2 id="whoh223">Who We Are </h2>
 <p id="who23">
    We at Mcqeen Wheels always strive to provide our customers with Integrated Mobility Solutions 
that satisfy their changing needs while ensuring optimum quality and safety services 
through our reliable and trusted workforce. By doing so, we will maintain a long-term 
relationship with our stakeholders based on integrity and respect.
 </p>
    </div>
    <div class="featuredcars23">
     <p id="f23">Featured Cars</p>
     <button class="arrow223 left-featured23" onclick="plusSlides(-1)">&lt;</button>
     <button class="arrow223 right-featured23"onclick="plusSlides(1)">&gt;</button>
     <div class="featuredmain23">
        <div class="featuredcard23">
            <p id="f123"><strong>Rolls Royce</strong></p>
            <img id="fimg23" src="images/ROLLS.png" alt="rolls pic">
            <p id="f223"><b>Model</b></p>
            <p id="f323"><b>Phantom</b></p>
            <p id="f423"><b>2024</b></p>
            <a href="Sclass.php">
            <button class="hb223">Details</button>
            </a>
        </div>
        <div class="featuredcard23">
            <p id="f123"><strong>Mercedes</strong></p>
            <img id="fimg23" src="images/GWAGON.png" alt="rolls pic">
            <p id="f223"><b>Model</b></p>
            <p id="f323"><b>G-Wagon</b></p>
            <p id="f423"><b>2023</b></p>
            <a href="Sclass.php">
                <button class="hb223">Details</button>
                </a>
        </div>
        <div class="featuredcard23">
            <p id="f123"><strong>Lamborghini</strong></p>
            <img  id="fimg23" src="images/WhatsApp_Image_2024-04-11_at_11.08.55_PM-removebg-preview (1).png" alt="rolls pic">
            <p id="f223"><b>Model</b></p>
            <p id="f323"><b>Revuelto</b></p>
            <p id="f423"><b>2024</b></p>
            <a href="Sclass.php">
                <button class="hb223">Details</button>
                </a>
        </div>
        <div class="featuredcard23">
            <p id="f123"><strong>Porche</strong></p>
            <img style="height: 170px;" id="fimg23" src="images/PORCHE.png" alt="rolls pic">
            <p id="f223"><b>Model</b></p>
            <p id="f323"><b>911</b></p>
            <p id="f423"><b>2022</b></p>
            <a href="Sclass.php">
                <button class="hb223">Details</button>
                </a>
        </div>
        <div class="featuredcard23">
            <p id="f123"><strong>Mercedes</strong></p>
            <img style="height: 180px;" id="fimg23" src="images/Maybach3.png" alt="maybach">
            <p id="f223"><b>Model</b></p>
            <p id="f323"><b>Maybach</b></p>
            <p id="f423"><b>2021</b></p>
            <a href="Sclass.php">
                <button class="hb223">Details</button>
                </a>
        </div>
        <div class="featuredcard23">
            <p id="f123"><strong>Bentely</strong></p>
            <img style="height: 170px;" id="fimg23" src="images/bentega.png" alt="rolls pic">
            <p id="f223"><b>Model</b></p>
            <p id="f323"><b>Bentega</b></p>
            <p id="f423"><b>2025</b></p>
            <a href="Sclass.php">
                <button class="hb223">Details</button>
                </a>
        </div>
     </div>
    </div>
    <div class="OurServices23">
        <p class="sectionheader123">Our Services</p>
        <div class="servicecard23">
            <h1>Rent</h1>
            <p>Discover luxury and convenience with our premium car rental services.</p>
            <button class="hb23" onclick="window.location.href='Rent.php'">Details</button>
        </div>
        <div class="servicecard23">
            <h1>Maintenance</h1>
            <p >Efficient maintenance services for optimal vehicle performance and longevity.</p>
            <button class="hb23" onclick="window.location.href='maintainance.php'">Details</button>
        </div>
        <div class="servicecard23">
            <h1>Sell Your Car</h1>
            <p >Trade or sell your car hassle-free for fair market value.</p>
            <button class="hb23" onclick="window.location.href='Sell Your Car.php'">Details</button>
        </div>
    </div>
    <div class="M23">
        <p class="sectionheader223">Meet Our Brands</p>
    </div>
    <div class="Brands23">
        <div class="row-brands123">
            <a href="Mercedes.php">
                <div class="img-brand123"></div>
            </a>
            <a href="Mercedes.php">
         <div class="img-brand223"></div>
        </a>
         <a href="Mercedes.php">
         <div class="img-brand323"></div>
         </a>
    </div>
        <div class="row-brands223">
            <a href="Mercedes.php">
            <div class="img-brand423"></div>
            </a>
            <a href="Mercedes.php">
            <div class="img-brand523"></div>
            </a>
            <a href="Mercedes.php">
            <div class="img-brand623"></div>
            </a>
        </div>
      </div>
      <div class="completeimg23">

      </div>
      <section>
          
          <div class="partner23">
            <div class="header2323">
                <h2>Our Partners</h2>
            </div>
            <div class="image-container2323">
                <img id="or23" src="images/orange.png" alt="Image 1">
                <img id="hsbc23" src="images/HSBC.png" alt="Image 2">
            </div>
            <hr>
        </div>
      </section>
      </main>
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