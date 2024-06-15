<?php
            
            include("connection.php");
            

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
                $carModel =$_POST['carModel'];
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

                
                $sql = "INSERT INTO car (carModel, designDesc1, designDesc2, innovationDesc, performanceDesc, videoUrl1, videoUrl2, imageUrl1, imageUrl2, photo1, photo2, photo3, photo4, photo5)
                VALUES ('$carModel', '$designDesc1', '$designDesc2', '$innovationDesc', '$performanceDesc', '$videoUrl1', '$videoUrl2', '$imageUrl1', '$imageUrl2', '$photo1', '$photo2', '$photo3', '$photo4', '$photo5')";
        

                if (mysqli_query($conn, $sql)) {
                    // Retrieve the customerID of the newly inserted record
                   
        
                    // Insert data into the maintenance table using the retrieved customerID
                   
                    echo "<script>alert('Data Inserted Successfully!')</script>";
                } else {
                    echo "<script>alert('Error Inserting Data into Customer Table: " . mysqli_error($conn) . "')</script>";
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
            <a href="UpdateCar.php">
            <i class="fa-solid fa-car"></i>
              <span> Update Cars</span>
            </a>
            <a href="DeleteCar.php">
            <i class="fa-solid fa-car"></i>
              <span>Delete Cars</span>
            </a>

            <a href="AddCar.php" class="active">
            <i class="fa-solid fa-car"></i>
              <span>Add Cars</span>
            </a>

            
          </div>
       
    <div style="max-width: 900px; margin-left: 150px;" class="FormSellCarcontainerAG">
       <div class="FormSellCartitleAG">Add your Cars</div>
       <p>Manipulate your data Easily with just a click.</p>
       <form action="#" method= "POST">
        <div class="user-detailsAG">
        <div class="input-boxAG">
                <span class="detailsAG">Car</span>
                <input type="text" id="fullnameAG"  name="carModel" placeholder="Car" required>
            </div>
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
          <button style="background: #a30000; padding: 10px 40px; border: none; border-radius: 5px; color: white; font-size: 18px;" name="add">Add</button>     
            </div>
        </div>
       </form>

       
  
        </div>
          </form>
    </body>
</html>




