<?php
include("connection.php");

$cookie_name = "MCQUEEN";
if(isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_COOKIE[$cookie_name];
    echo "Welcome back, " . $cookie_value . "!";
} else {
    echo "Welcome, guest!";
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitmain'])) {
    if (isset($_POST['namemain']) && isset($_POST['phonemain'])&& isset($_POST['emailmain'])&& isset($_POST['brandmain'])) {
        // Retrieve form data
        $name = $_POST['namemain'];
        $email = $_POST['emailmain'];
        $phone = $_POST['phonemain'];
        $brand = $_POST['brandmain'];
        $color = $_POST['colormain'];
        $year = $_POST['yearmain'];
        $kilometer = $_POST['kilomain'];
        $model = $_POST['modelmain'];
        
        // Escape special characters to prevent SQL injection attacks
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $phone = mysqli_real_escape_string($conn, $phone);
        $brand = mysqli_real_escape_string($conn, $brand);
        $color = mysqli_real_escape_string($conn, $color);
        $year = mysqli_real_escape_string($conn, $year);
        $kilometer = mysqli_real_escape_string($conn, $kilometer);
        $model = mysqli_real_escape_string($conn, $model);

        // Create SQL query to insert data into customer table
        $sql = "INSERT INTO customer (FullName,Email, phoneNumber) VALUES ('$name', '$email','$phone')";

        if (mysqli_query($conn, $sql)) {
            // Retrieve the customerID of the newly inserted record
            $customerID = mysqli_insert_id($conn);

            // Insert data into the maintenance table using the retrieved customerID
            $sql_maintenance = "INSERT INTO maintenance (carBrand,color,modelYear,carModel,kilometer,customerID) VALUES ('$brand','$color','$year','$model','$kilometer','$customerID')";

            // Execute SQL query to insert data into maintenance table
            if (mysqli_query($conn, $sql_maintenance)) {
                echo "<script>alert('Data Inserted Successfully!')</script>";
            } else {
                echo "<script>alert('Error Inserting Data into Maintenance Table: " . mysqli_error($conn) . "')</script>";
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
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js";></script>
<title>Page Title</title>
<link rel="stylesheet" href="benz.css">
<link rel="icon" href="images/mcqueenicon.png" type="image/x-icon">
 

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
            
        </ul>
    </header>

            <div class="mntimgAZ">

         <h1 style="color: aliceblue;font-size: 12ex;text-align: center;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;letter-spacing: 2px;">Maintenance</h1>
         <h3 style="padding-top:10%;padding-left: 5%; color: aliceblue;font-size: 9ex;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Keeping Your Vehicle<br> in Top Condition </h3>
        
        </div>
 <div class="mntcontainerAZ">
   <div  class="mntcardAZ">

     <div class="mntrightAZ">
<img style="width: 400px;height: 400px;" src="images/mntimage4.jpg">
        
               </div>
       <div class="mntleftAZ">

        <h2 style="margin-left: 10%;"><br>Professional Maintenance Services<br> <br> </h2>
        <p style="font-family:fantasy;">By following the advice and recommendations on our Car, you can ensure that  your vehicle remains safe, reliable, and enjoyable to drive for years to come. Remember,<br> regular maintenance is not just about preserving your car's value—it's also<br> about protecting your investment and ensuring your safety on the road </p>
        <p class="show-more-contentAZ"style="font-family:fantasy;"><br> So, dive in, explore our resources, and take the first step towards becoming a proactive car owner.If you ever have any questions or need assistance with car maintenance,<br> don't hesitate to reach out to our team. We're here to help!</p>
        <button class="show-more-buttonAZ">Show less</button>
           
               </div>

     </div>

 </div>
 

<div class="spacedistanceAZ"></div>


<div class="frameAZ">
<div class="BigcontainerAZ">
 <div class="titleAZ">Book to Maintenance</div>
 <p>Keep your car running smoothly and safely with our expert car maintenance tips.</p>
 <form action="#" method="POST">
  <div class="customer-detailsAZ">
      <div class="info-boxAZ">
          <span class="detailsAZ">Full Name</span>
          <input type="text" id="FullNameAZ" name="namemain" placeholder="Name" required>
      </div>
      <div class="info-boxAZ">
          <span class="detailsAZ">Email</span>
          <input type="text" id="EmailAZ" name="emailmain" placeholder="Email" required>
      </div>
      <div class="info-boxAZ">
          <span class="detailsAZ">Phone Number</span>
          <input type="text" id="PhoneNumberAZ" name="phonemain" placeholder="Phone Number" required>
      </div>
      <div class="info-boxAZ">
          <span class="detailsAZ">Brand</span>
          <input type="text"id="BrandAZ" name="brandmain" placeholder="Brand" required>
      </div>
      <div class="info-boxAZ">
          <span class="detailsAZ">Model</span>
          <input type="text" id="ModelAZ" name="modelmain" placeholder="Model" required>
      </div>
      
      <div class="info-boxAZ">
          <span class="detailsAZ">Kilometers</span>
          <input type="text" id="KilometersAZ" name="kilomain" placeholder="Kilometers" required>
      </div>
      <div class="info-boxAZ">
          <span class="detailsAZ">Color</span>
          <input type="text" id="ColorAZ" name="colormain" placeholder="Color" required>
      </div>
      <div class="info-boxAZ">
          <span class="detailsAZ">Model Year</span>
          <select class="transmissionAZ" id="ModelYearAZ" name="yearmain">
              <option value="0">Select</option>
              
              <option value="2000">2000</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
              <option value="2003">2003</option>
              <option value="2004">2004</option>
              <option value="2005">2005</option>
              <option value="2006">2006</option>
              <option value="2007">2007</option>
              <option value="2008">2008</option>
              <option value="2009">2009</option>
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>

          </select>
      </div>
      
  </div>
  <div class="ButtonAZ">
      <div class="SubmitBtnAG">
        <button style="background: #a30000; padding: 10px 40px; border: none; border-radius: 5px; color: white; font-size: 18px;" name="submitmain">Submit</button>   
        </div>
      </div>
  </div>
 </form>
</div>



<script src="benz.js"></script>


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