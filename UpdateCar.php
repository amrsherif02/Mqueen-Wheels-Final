<?php
            
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    // Retrieve carModel from the form
    $carModel = $_POST['your_select_name'];
    
    // Ensure that carModel is not empty
    if (!empty($carModel)) {
        $designDesc1 = $_POST['designDesc1'];
        $designDesc2 = $_POST['designDesc2'];
        $innovationDesc = $_POST['innovationDesc'];
        $performanceDesc = $_POST['performanceDesc'];
        $videoUrl1 = $_POST['videoUrl1'];
        $videoUrl2 = $_POST['videoUrl2'];
        $imageUrl1 = $_POST['imageUrl1'];
        $imageUrl2 = $_POST['imageUrl2'];
        $photo1 = $_POST['photo1'];
        $photo2 = $_POST['photo2'];
        $photo3 = $_POST['photo3'];
        $photo4 = $_POST['photo4'];
        $photo5 = $_POST['photo5'];

        // Escape special characters to prevent SQL injection
        $carModel = mysqli_real_escape_string($conn, $carModel);
        $designDesc1 = mysqli_real_escape_string($conn, $designDesc1);
        $designDesc2 = mysqli_real_escape_string($conn, $designDesc2);
        $innovationDesc = mysqli_real_escape_string($conn, $innovationDesc);
        $performanceDesc = mysqli_real_escape_string($conn, $performanceDesc);
        $videoUrl1 = mysqli_real_escape_string($conn, $videoUrl1);
        $videoUrl2 = mysqli_real_escape_string($conn, $videoUrl2);
        $imageUrl1 = mysqli_real_escape_string($conn, $imageUrl1);
        $imageUrl2 = mysqli_real_escape_string($conn, $imageUrl2);
        $photo1 = mysqli_real_escape_string($conn, $photo1);
        $photo2 = mysqli_real_escape_string($conn, $photo2);
        $photo3 = mysqli_real_escape_string($conn, $photo3);
        $photo4 = mysqli_real_escape_string($conn, $photo4);
        $photo5 = mysqli_real_escape_string($conn, $photo5);

        // Update query
        $sql = "UPDATE car SET designDesc1='$designDesc1', designDesc2='$designDesc2', innovationDesc='$innovationDesc',
                performanceDesc='$performanceDesc', videoUrl1='$videoUrl1', videoUrl2='$videoUrl2', imageUrl1='$imageUrl1',
                imageUrl2='$imageUrl2', photo1='$photo1', photo2='$photo2', photo3='$photo3', photo4='$photo4', photo5='$photo5'
                WHERE carModel='$carModel'";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Data Updated Successfully!')</script>";
        } else {
            echo "<script>alert('Error Updating Data: " . mysqli_error($conn) . "')</script>";
        }
    } else {
        echo "<script>alert('Please select a car to update.')</script>";
    }
}

include("closeconnection.php");
?>




<!DOCTYPE html>
<head>
<title>Admin</title>
<link rel="icon" href="images/mcqueenicon.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8"/>
    <link rel="stylesheet" href="benz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="myscripts.js"></script>
    
</head>
    <body>
        <div class="adminContainerAG">
        <div class="sidebarAG">
           <img class="nav-adminLogoAG" src="images/Macqueen Wheels.png">
          
            <a href="AdminHome.php">
              <i class="fa-solid fa-table-columns"></i>
              <span>Dashboard</span>
            </a>
            <a href="AdminSellCar.php">
              <i class="fa-brands fa-sellcast"></i>
              <span>Sell Car</span>
            </a>
            <a href="AdminMaintenance.php">
              <i class="fa-solid fa-screwdriver-wrench"></i>
              <span>Maintenance</span>
            </a>
            <a href="AdminRent.php">
              <i class="fa-solid fa-truck-ramp-box"></i>
              <span>Rent</span>
            </a>
            <a href="UpdateCar.php" class="active">
            <i class="fa-solid fa-car"></i>
              <span>Update Cars</span>
            </a>

            <a href="DeleteCar.php">
            <i class="fa-solid fa-car"></i>
              <span>Delete Cars</span>
            </a>

            <a href="AddCar.php">
            <i class="fa-solid fa-car"></i>
              <span>Add Cars</span>
            </a>

            
          </div>
       
          
    <div style="max-width: 900px; margin-left: 150px; margin-top: 20px; margin-bottom: 20px;" class="FormSellCarcontainerAG">
       <div class="FormSellCartitleAG">Update your Cars</div>
       <p>Manipulate your data Easily with just a click.</p>
       <form action="#" method= "POST">
        <div class="user-detailsAG">
        <?php
             include("connection.php");

            // Fetch values from the database attribute
            $sql = "SELECT DISTINCT carModel FROM car";
            $result = mysqli_query($conn, $sql);

            // Check if query was successful
             if ($result) {
               echo ' <div class="input-boxAG">';
               echo '<span class="detailsAG">Cars</span>';
              echo '<select name="your_select_name">';
              // Loop through the results and generate <option> tags
              while ($row = mysqli_fetch_assoc($result)) {
                $carModel = $row['carModel'];
                  echo "<option value='$carModel'>$carModel</option>";
                }
                 echo '</select>';
                 echo '</div>';

                } else {
                  // Handle query error
                 echo "Error: " . mysqli_error($conn);
                }
              ?>
            <div class="input-boxAG">
                <span class="detailsAG">Design Description 1</span>
                <input type="text" id="fullnameAG"  name="designDesc1" placeholder="Design Description 1" required>
            </div>
            <div class="input-boxAG">
              <span class="detailsAG">Design Description 2</span>
              <input type="text" id="EmailAG" name="designDesc2" placeholder="Design Description 2" required>
          </div>
            <div class="input-boxAG">
                <span class="detailsAG">Innovation Description</span>
                <input type="text" id="phonenumberAG" name="innovationDesc" placeholder="Innovation Description" required>
            </div>
            <div class="input-boxAG">
                <span class="detailsAG">Performance Description</span>
                <input type="text" id="brandAG" name="performanceDesc" placeholder="Performance Description" required>
            </div>
            <div class="input-boxAG">
                <span class="detailsAG">Video 1</span>
                <input type="text" id="modelAG" name="videoUrl1" placeholder="Video 1" required>
            </div>
            <div class="input-boxAG">
                <span class="detailsAG">Video 2</span>
                <input type="text" id="modelyearAG" name="videoUrl2" placeholder="Video 2" required>
            </div>
            <div class="input-boxAG">
                <span class="detailsAG">Image 1</span>
                <input type="text" id="kilometerAG" name="imageUrl1" placeholder="Image 1" required>
            </div>
            <div class="input-boxAG">
                <span class="detailsAG">Image 2</span>
                <input type="text" id="kilometerAG" name="imageUrl2" placeholder="Image 2" required>
            </div>
            <div class="input-boxAG">
                <span class="detailsAG">Photo 1</span>
                <input type="text"  name="photo1" id="colorAG" placeholder="Photo 1" required>
            </div>
            <div class="input-boxAG">
                <span class="detailsAG">Photo 2</span>
                <input type="text"  name="photo2" id="colorAG" placeholder="Photo 2" required>
            </div>
            <div class="input-boxAG">
                <span class="detailsAG">Photo 3</span>
                <input type="text"  name="photo3" id="colorAG" placeholder="Photo 3" required>
            </div>
            <div class="input-boxAG">
                <span class="detailsAG">Photo 4</span>
                <input type="text"  name="photo4" id="colorAG" placeholder="Photo 4" required>
            </div>
            <div class="input-boxAG">
                <span class="detailsAG">Photo 5</span>
                <input type="text"  name="photo5" id="colorAG" placeholder="Photo 5" required>
            </div>
            
        </div>
        <div class="SubmitBtnAG">
          <button style="background: #a30000; padding: 10px 40px; border: none; border-radius: 5px; color: white; font-size: 18px;" name="update">Update</button>     
            </div>
        </div>
       </form>
  
        </div>
       
    </body>
</html>




