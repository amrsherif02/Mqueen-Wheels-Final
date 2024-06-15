<?php
            
            include("connection.php");
            

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
               
                $selectedRow = $_POST['carModel'];
              
                $deleteSql = "DELETE FROM car WHERE carModel = '$selectedRow'";
        

                if (mysqli_query($conn, $deleteSql)) {
                   
                    echo "<script>alert('Data Deleted Successfully!')</script>";
                } else {
                    echo "<script>alert('Error Deleting Data into Customer Table: " . mysqli_error($conn) . "')</script>";
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
            <a href="DeleteCar.php" class="active">
            <i class="fa-solid fa-car"></i>
              <span>Delete Cars</span>
            </a>
            <a href="AddCar.php">
            <i class="fa-solid fa-car"></i>
              <span>Add Cars</span>
            </a>

            
          </div>
       
          
    <div style="max-width: 900px; margin-left: 150px; margin-top: 100px;" class="FormSellCarcontainerAG">
       <div class="FormSellCartitleAG">Delete your Cars</div>
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
              echo '<select name="carModel">';
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
            
        </div>
        <div class="SubmitBtnAG">
          <button style="background: #a30000; padding: 10px 40px; border: none; border-radius: 5px; color: white; font-size: 18px;" name="delete">Delete</button>     
            </div>
        </div>
       </form>

       
  
        </div>
          </form>
    </body>
</html>




