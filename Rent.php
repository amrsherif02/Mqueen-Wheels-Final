<?php
include("connection.php");

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitmain'])) {
    if (isset($_POST['namemain']) && isset($_POST['phonemain'])&& isset($_POST['emailmain'])&& isset($_POST['brandmain'])) {
        // Retrieve form data
        $name = $_POST['namemain'];
        $email = $_POST['emailmain'];
        $phone = $_POST['phonemain'];
        $brand = $_POST['brandmain'];
        $days = $_POST['daysmain'];
        
        // Escape special characters to prevent SQL injection attacks
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $phone = mysqli_real_escape_string($conn, $phone);
        $brand = mysqli_real_escape_string($conn, $brand);
        $days = intval($days);
      

        // Create SQL query to insert data into customer table
        $sql = "INSERT INTO customer (FullName,Email, phoneNumber) VALUES ('$name', '$email','$phone')";

        if (mysqli_query($conn, $sql)) {
            // Retrieve the customerID of the newly inserted record
            $customerID = mysqli_insert_id($conn);

            $totalPrice = 0;
            if ($brand == "Porsche Mcqueen GT3RS") {
                $totalPrice = $days * 3000;
            }
            else if ($brand == "Mercedes G63 Brabus") {
                $totalPrice = $days * 5000;
            }
            else if ($brand == "Rolls-Royce Phantom Mansory") {
                $totalPrice = $days * 6000;
            }
           else if ($brand == "Mercedes S680 Maybach") {
                $totalPrice = $days * 5500;
            }
            else if ($brand == "Porsche 911 Turbo S Mansory") {
                $totalPrice = $days * 3500;
            }

            
            // Insert data into the maintenance table using the retrieved customerID
            $sql_maintenance = "INSERT INTO rent (carBrand, numOfDay, totalPrice, customerID) VALUES ('$brand', $days, $totalPrice, $customerID)";


            // Execute SQL query to insert data into maintenance table
            if (mysqli_query($conn, $sql_maintenance)) {
                echo "<script>alert('Data Inserted Successfully!')</script>";
            } else {
                echo "<script>alert('Error Inserting Data into Rent Table: " . mysqli_error($conn) . "')</script>";
            }
        } else {
            echo "<script>alert('Error Inserting Data into Customer Table: " . mysqli_error($conn) . "')</script>";
        }
    } else {
        echo "<script>alert('Form fields are not set.')</script>";
    }
}

// Close the database connection
include("closeconnection.php");
?>


<!DOCTYPE html>
<head>
<title>McqueenWheels</title>
<meta charset="UTF-8"/>

<link rel="stylesheet" href="benz.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="icon" href="images/mcqueenicon.png" type="image/x-icon">
<script src="https://code.jquery.com/jquery-3.6.0.min.js";></script>
<script src="Omar.js"></script>

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
   
    <img style="height: 70%; width: 100%;" src="images/RentYourCar.png" alt="">
    <div class = "container222">
    <div class="card222">
        <div class="card-details222">
            <img style="height: 100%; width: 100% ; margin-top: 0%;" src="images/Mcqueengt3rs.png" alt="">
        <p class="text-title222">Porsche Mcqueen GT3RS</p>
        <p class="text-body222">$3000 per day</p>
        </div>
        <button onclick="scrolltoBottom()" class="card-button222">Rent Car</button>
    </div>
    <div class="card222">
        <div class="card-details222">
            <img style="height: 70%; width: 100% ;margin-top: 35%;" src="images/BrabusG63.png" alt="">
        <p class="G63text-title222">Mercedes G63 Brabus</p>
        <p class="text-body222">$5000 per day</p>
        </div>
        <button onclick="scrolltoBottom()" class="card-button222">Rent Car</button>
    </div> 
    <div class="card222">
        <div class="card-details222">
            <img style="height: 60%; width: 100%; margin-top: 41%;" src="images/RollsRoyceMansory.png" alt="">
        <p class="RRtext-title222">Rolls-Royce Phantom Mansory</p>
        <p class="text-body222">$6000 per day</p>
        </div>
        <button onclick="scrolltoBottom()"class="card-button222">Rent Car</button>
    </div> 
    <div class="card222">
        <div class="card-details222">
            <img style="height: 150%; width: 150% ;margin-top: -10%; margin-left: -35%;" src="images/S680Maybachh.png" alt="">
        <p class="S680text-title222">Mercedes S680 Maybach</p>
        <p class="text-body222">$5500 per day</p>
        </div>
        <button onclick="scrolltoBottom()"class="card-button222">Rent Car
        </button>
    </div> 
    <div class="card222">
        <div class="card-details222">
            <img style="height: 80%; width: 100% ;margin-top: 30%;" src="images/911Mansory.png" alt="">
        <p class="Mantext-title222">Porsche 911 Turbo S Mansory</p>
        <p class="text-body222">$3500 per day</p>
        </div>
        <button onclick="scrolltoBottom()" class="card-button222">Rent Car
        </button>
    </div>
</div>



<div class="Rentframe222">
    <div class="RentBigcontainer222">
     <div class="Renttitle222">Rent Your car</div> 
     <p>Drive your dream car with the lowest prices possible.`</p>
     <form action="#" method="POST">
      <div class="Rentcustomer-details222">
          <div class="Rentinfo-box222">
              <span class="Rentdetails222">Full Name</span>
              <input type="text" name="namemain" id="fullName222" placeholder="Name" required>
          </div>
          <div class="Rentinfo-box222">
              <span class="Rentdetails222">Email</span>
              <input type="email" name="emailmain" id="email222" placeholder="Email" required>      
          </div>
          <div class="Rentinfo-box222">
            <span class="Rentdetails222">Phone Number</span>
            <input type="text" name="phonemain" id="phoneNumber222" placeholder="Phone Number" required>
        </div>
          <div class="Rentinfo-box222">
            <span class="Rentdetails222">Car</span>
            <select class="transmission222" name="brandmain" id="carSelect222" required>
                <option value="0">Select</option>
                <option value="Porsche Mcqueen GT3RS">Porsche Mcqueen GT3RS</option>
                <option value="Mercedes G63 Brabus">Mercedes G63 Brabus</option>
                <option value="Rolls-Royce Phantom Mansory">Rolls-Royce Phantom Mansory</option>
                <option value="Mercedes S680 Maybach">Mercedes S680 Maybach</option>
                <option value="Porsche 911 Turbo S Mansory">Porsche 911 Turbo S Mansory</option>
            </select>
          </div>

          
        <div class="Rentinfo-box222">
            <span class="Rentdetails222">Number of Days</span>
            <input type="number" name="daysmain" id="numberOfDays222" placeholder="Number of Days" required>
          </div>
      </div>
      <div class="ButtonAZ">
      <div class="SubmitBtnAG">
        <button style="background: #a30000; padding: 10px 40px; border: none; border-radius: 5px; color: white; font-size: 18px;" name="submitmain">Submit</button>   
        </div>
      </div>
      
     </form>
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
   


