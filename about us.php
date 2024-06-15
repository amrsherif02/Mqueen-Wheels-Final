<?php

include("connection.php");

$cookie_name = "MCQUEEN";
if(isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_COOKIE[$cookie_name];
    echo "Welcome back, " . $cookie_value . "!";
} else {
    echo "Welcome, guest!";
}

// Query to get count from maintenance table
$sql_rent = "SELECT COUNT(*) AS maintenance_count FROM maintenance";
$result_rent = mysqli_query($conn, $sql_rent);        
$row_rent = mysqli_fetch_assoc($result_rent);
$maintenance_count = $row_rent['maintenance_count'];

// Query to get count from sellcar table
$sql_sellcar = "SELECT COUNT(*) AS sellcar_count FROM sellcar";
$result_sellcar = mysqli_query($conn, $sql_sellcar);        
$row_sellcar = mysqli_fetch_assoc($result_sellcar);
$sellcar_count = $row_sellcar['sellcar_count'];

// Query to get count from rent table
$sql_rent = "SELECT COUNT(*) AS rent_count FROM rent";
$result_rent = mysqli_query($conn, $sql_rent);        
$row_rent = mysqli_fetch_assoc($result_rent);
$rent_count = $row_rent['rent_count'];
?>
<script>
// Initialize counters with PHP counts
let count1 = 1;
let count2 = 1;
let count3 = 1;

let rentCount = <?php echo $rent_count; ?>;
let sellcarCount = <?php echo $sellcar_count; ?>;
let maintenanceCount = <?php echo $maintenance_count; ?>;

// Function to increment counters
function GlobalBranchAG() {
    count1++;
    document.querySelector("#number1AG").innerHTML = count1;
    if (count1 == rentCount) {
        clearInterval(project);
    }
}

function EmployeeAG() {
    count2++;
    document.querySelector("#number2AG").innerHTML = count2;
    if (count2 == sellcarCount) {
        clearInterval(clients);
    }
}

function HappyCustomersAG() {
    count3++;
    document.querySelector("#number3AG").innerHTML = count3;
    if (count3 == maintenanceCount) {
        clearInterval(coffee);
    }
}

// Call the functions to start counters
var project = setInterval(GlobalBranchAG, 40);
var clients = setInterval(EmployeeAG, 40);
var coffee = setInterval(HappyCustomersAG, 40);
</script>



<!DOCTYPE html>
<head>
    <script src="myscripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<title>About Us</title>
<link rel="icon" href="images/mcqueenicon.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8"/>
    <link rel="stylesheet" href="benz.css">
    <link rel="stylesheet" href="swiper-bundle.min.css">
   
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


        <h1 class="aboutus-headerAG">Our Story</h1>
     <div style="text-align:center;"> 
        <p>In 2024 Ahmed Gamal, Amr Sherif, Youssef Fouad and Omar<br> Hany decided to open the first luxury cars showroom in egypt.</p>
        <img class="sehaAG" src="images/seha2.jpg">
     </div>
     
     <div class="statsAboutUsAG">    
        <div class="GlobalBranchesAG">
            <h1 class="statsNumberAG">+<span id="number1AG"></span></h1>
            <h2 class="statsTitleAG">Rented Cars</h2>
        </div>
        <div class="EmployoeeCountAG">
            <h1 class="statsNumberAG">+<span id="number2AG"></span></h1>
            <h2 class="statsTitleAG">Sold Cars</h2>
        </div>
        <div class="customerCountAG">
            <h1 class="statsNumberAG">+<span id="number3AG"></span></h1>
            <h2 class="statsTitleAG">Maintained Cars</h2>
        </div>
        </div>


     <h1 class="aboutus-headerAG" >Our Team</h1>
    <div class="ourTeamCardsAG">
     <div class="ourTeamleftCardsAG">
        <div class="AmrAG">
            <a href="https://www.instagram.com/amr__sheriif/"><img class="ourteamPhotoAG effectAG" src="images/amr.png"></a>
            <h1 class="EmployoeenameAG">Amr Sherif</h1>
            <h2 class="EmployoeeTitleAG">CEO</h2>
        </div>

        <div class="JimmyAG">
            <a href="https://www.instagram.com/ahmedgamaw/"><img class="ourteamPhotoAG effectAG" src="images/jimmy.png"></a>
            <h1 class="EmployoeenameAG">Ahmed Gamal</h1>
            <h2 class="EmployoeeTitleAG">Co-Founder &<br>Creative Director</h2>
        </div>
           
        </div>
     
     <div class="ourTeamrightCardsAG"> 
        <div class="JoeAG">
            <a href="https://www.instagram.com/joe_fo2sh77/"><img class="ourteamPhotoAG effectAG" src="images/joe.png"></a>
            <h1 class="EmployoeenameAG">Youssef Fouad</h1>
            <h2 class="EmployoeeTitleAG">Vice President</h2>
        </div>

        <div class="OmarAG">
            <a href="https://www.instagram.com/3omar.xo/"><img class="ourteamPhotoAG effectAG" src="images/omar.png"></a>
            <h1 class="EmployoeenameAG">Omar Hany</h1>
            <h2 class="EmployoeeTitleAG">PR Manager</h2>

        </div>
     </div>
    </div>

    <div class="lineAG"></div>
    


    <div class="ourmissionAG">
  
       <div class="ourmissionDescAG">
        <h1 >Our Mission</h1>
        <p>We believe not just in growing bigger, but in growing better.<br> And growing better means aligning the success of your<br> own business with the success of your customers.<br>Win-win!</p>
       </div>    
       <div class="ourmissionPhotoAG">
        <img style="width:500px; height:300px; border-radius: 5px;" src="images/ourmission.jpeg">
       </div>
    </div>
    
    <div class="lineAG"></div>
    <h1 style="text-align:center; margin-top: 2%;">What Our Customers Say</h1>


      <div class="bigbodyAG">
       <div class="slide-containerAG">
          <div class="slide-contentAG">
              <div class="card-wrapperAG">
                <div class="arrow-containerAG">
                <button class="arrow2AG left-featuredAG" onclick="plusSlides(-1)">&lt;</button>
                
                  <div class="cardAG">
                    <div class="image-contentAG">
                        <span class="overlayAG"></span>

                        <div class="card-imageAG">
                            <img class="card-imgAG" src="images/profile1.jpg">
                        </div>
                    </div>
                    <div class="card-contentAG">
                        <h2 class="nameAG">David Dell</h2>
                        <div class="ratingAG">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="descriptionAG">Lorem Ipsum is simply dummy text of the printing 
                            and typesetting industry. Lorem Ipsum has been the industry's standard 
                            text ever since the 1500s, when an unknown printer took a galley.</p>
                    </div>
                  </div>

                  <div class="cardAG">
                    <div class="image-contentAG">
                        <span class="overlayAG"></span>

                        <div class="card-imageAG">
                            <img class="card-imgAG" src="images/profile2.jpg">
                        </div>
                    </div>
                    <div class="card-contentAG">
                        <h2 class="nameAG">David Dell</h2>
                        <div class="ratingAG">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p class="descriptionAG">Lorem Ipsum is simply dummy text of the printing 
                            and typesetting industry. Lorem Ipsum has been the industry's standard 
                            text ever since the 1500s, when an unknown printer took a galley.</p>
                    </div>
                  </div>

                  <div class="cardAG">
                    <div class="image-contentAG">
                        <span class="overlayAG"></span>

                        <div class="card-imageAG">
                            <img class="card-imgAG" src="images/profile3.jpg">
                        </div>
                    </div>
                    <div class="card-contentAG">
                        <h2 class="nameAG">David Dell</h2>
                        <div class="ratingAG">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p class="descriptionAG">Lorem Ipsum is simply dummy text of the printing 
                            and typesetting industry. Lorem Ipsum has been the industry's standard 
                            text ever since the 1500s, when an unknown printer took a galley.</p>
                    </div>
                  </div>

                  <div class="cardAG">
                    <div class="image-contentAG">
                        <span class="overlayAG"></span>

                        <div class="card-imageAG">
                            <img class="card-imgAG" src="images/profile4.jpg">
                        </div>
                    </div>
                    <div class="card-contentAG">
                        <h2 class="nameAG">David Dell</h2>
                        <div class="ratingAG">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="descriptionAG">Lorem Ipsum is simply dummy text of the printing 
                            and typesetting industry. Lorem Ipsum has been the industry's standard 
                            text ever since the 1500s, when an unknown printer took a galley.</p>
                    </div>
                  </div>

                  <div class="cardAG">
                    <div class="image-contentAG">
                        <span class="overlayAG"></span>

                        <div class="card-imageAG">
                            <img class="card-imgAG" src="images/profile5.jpg">
                        </div>
                    </div>
                    <div class="card-contentAG">
                        <h2 class="nameAG">David Dell</h2>
                        <div class="ratingAG">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="descriptionAG">Lorem Ipsum is simply dummy text of the printing 
                            and typesetting industry. Lorem Ipsum has been the industry's standard 
                            text ever since the 1500s, when an unknown printer took a galley.</p>
                    </div>
                  </div>

                  <div class="cardAG">
                    <div class="image-contentAG">
                        <span class="overlayAG"></span>

                        <div class="card-imageAG">
                            <img class="card-imgAG" src="images/profile6.jpg">
                        </div>
                    </div>
                    <div class="card-contentAG">
                        <h2 class="nameAG">David Dell</h2>
                        <div class="ratingAG">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="descriptionAG">Lorem Ipsum is simply dummy text of the printing 
                            and typesetting industry. Lorem Ipsum has been the industry's standard 
                            text ever since the 1500s, when an unknown printer took a galley.</p>
                    </div>
                  </div>
                  
                  <button class="arrow2AG right-featuredAG"onclick="plusSlides(1)">&gt;</button>
              </div>
            </div>
          </div>
       </div>
      </div>
   
           
      <script>
      let currentIndex = 0; 
      const slides = document.querySelectorAll(".cardAG");
      const totalSlides = slides.length;

      function plusSlides(n) {
          currentIndex += n;
              showSlides();
             }

       function showSlides() {
        for (let i = 0; i < totalSlides; i++) {
          slides[i].style.display = "none";
        }

       let startIndex = currentIndex % totalSlides;
          if (startIndex < 0) {
        startIndex += totalSlides;
       }

          for (let i = 0; i < 3; i++) {
    const index = (startIndex + i) % totalSlides;
           slides[index].style.display = "block";
          }
    }

      showSlides();
      </script> 
      






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


    
    </body>


</html>




