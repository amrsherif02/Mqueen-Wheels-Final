
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
        $color = $_POST['colormain'];
        $year = $_POST['yearmain'];
        $kilometer = $_POST['kilomain'];
        $model = $_POST['modelmain'];
        $transmission = $_POST['transmain'];
        
        // Escape special characters to prevent SQL injection attacks
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $phone = mysqli_real_escape_string($conn, $phone);
        $brand = mysqli_real_escape_string($conn, $brand);
        $color = mysqli_real_escape_string($conn, $color);
        $year = mysqli_real_escape_string($conn, $year);
        $kilometer = mysqli_real_escape_string($conn, $kilometer);
        $model = mysqli_real_escape_string($conn, $model);
        $transmission = mysqli_real_escape_string($conn, $transmission);
        // Create SQL query to insert data into customer table
        $sql = "INSERT INTO customer (FullName,Email, phoneNumber) VALUES ('$name', '$email','$phone')";

        if (mysqli_query($conn, $sql)) {
            // Retrieve the customerID of the newly inserted record
            $customerID = mysqli_insert_id($conn);

            // Insert data into the maintenance table using the retrieved customerID
            $sql_sellcar = "INSERT INTO sellcar (carBrand,color,modelYear,carModel,kilometer,customerID) VALUES ('$brand','$color','$year','$model','$kilometer','$customerID')";

            // Execute SQL query to insert data into maintenance table
            if (mysqli_query($conn, $sql_sellcar)) {
                echo "<script>alert('Data Inserted Successfully!')</script>";
            } else {
                echo "<script>alert('Error Inserting Data into Sell Car Table: " . mysqli_error($conn) . "')</script>";
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Sell Your Car</title>
<link rel="icon" href="images/mcqueenicon.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8"/>
    <link rel="stylesheet" href="benz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
     <script src="myscripts.js"></script>
    
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


    <div class="SellYourCarContainerAG">
        <div class="SellYourCarAG">
  
            <div class="SellYourCarDescAG">
             <h1>Sell Your Car</h1>
             <p>Selling your car has never been easier. Mcqueen Wheels Motors has made it quick and easy to sell your car at the best market price. Simply contact us to book an appointment and we'll assess your car.</p>
            </div>    
            <div class="SellYourCarPhotoAG">
             <img style="width:500px; height:300px; border-radius: 5px;" src="images/sellyour.jpg">
            </div>
         </div>
     </div>

      <div class="BlackSeparatorAG"></div>


    <div class="hugebodyAG">
    <div class="FormSellCarcontainerAG">
       <div class="FormSellCartitleAG">Sell Your Car</div>
       <p>Simply contact us and our ream will get in touch with you soon to assess your car.</p>
       <form action="#" method= "POST">
        <div class="user-detailsAG">
            <div class="input-boxAG">
                <span class="detailsAG">Full Name</span>
                <input type="text" id="fullnameAG"  name="namemain" placeholder="Name" required>
            </div>
            <div class="input-boxAG">
              <span class="detailsAG">Email</span>
              <input type="text" id="EmailAG" name="emailmain" placeholder="Email" required>
          </div>
            <div class="input-boxAG">
                <span class="detailsAG">Phone Number</span>
                <input type="text" id="phonenumberAG" name="phonemain" placeholder="Phone Number" required>
            </div>
            <div class="input-boxAG">
                <span class="detailsAG">Brand</span>
                <input type="text" id="brandAG" name="brandmain" placeholder="Brand" required>
            </div>
            <div class="input-boxAG">
                <span class="detailsAG">Model</span>
                <input type="text" id="modelAG" name="modelmain" placeholder="Model" required>
            </div>
            <div class="input-boxAG">
                <span class="detailsAG">Model Year</span>
                <input type="number" id="modelyearAG" name="yearmain" placeholder="Model Year" required>
            </div>
            <div class="input-boxAG">
                <span class="detailsAG">Kilometers</span>
                <input type="number" id="kilometerAG" name="kilomain" placeholder="Kilometers" required>
            </div>
            <div class="input-boxAG">
                <span class="detailsAG">Transmission</span>
                <select class="transmission" name="transmain" id="transmissionAG">
                    <option value="0">Select</option>
                    <option value="Automatic">Automatic</option>
                    <option value="Manual">Manual</option>
                </select>
            </div>
            <div class="input-boxAG">
                <span class="detailsAG">Color</span>
                <input type="text"  name="colormain" id="colorAG" placeholder="Color" required>
            </div>
            
        </div>
        <div class="SubmitBtnAG">
          <button style="background: #a30000; padding: 10px 40px; border: none; border-radius: 5px; color: white; font-size: 18px;" name="submitmain">Submit</button>   

            </div>
        </div>
       </form>

       
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




