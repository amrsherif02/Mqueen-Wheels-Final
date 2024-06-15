<?php
            
            include("connection.php");
            

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reject'])) {
              // Check if at least one row has been checked
              if(isset($_POST['selectedRows'])) {
                  // Loop through the selected rows and delete them from the database
                  foreach($_POST['selectedRows'] as $selectedRow) {
                      // Perform SQL query to delete the row with the specified maintenanceID
                      $deleteSql = "DELETE FROM maintenance WHERE maintenanceID = '$selectedRow'";
                      
                      // Execute SQL query
                      if (mysqli_query($conn, $deleteSql)) {
                          echo "<script>alert('Row with maintenanceID $selectedRow has been rejected and deleted.')</script>";
                      } else {
                          echo "<script>alert('Error deleting row: " . mysqli_error($conn) . "')</script>";
                      }
                  }
              } else {
                  echo "<script>alert('Please select at least one row to reject.')</script>";
              }
          }
            
            // Close the database connection
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
            <a href="AdminMaintenance.php" class="active">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <span>Maintenance</span>
            </a>
            <a href="AdminRent.php">
                <i class="fa-solid fa-truck-ramp-box"></i>
                <span>Rent</span>
            </a>
            <a href="UpdateCar.php">
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
        <form method="post">
        <div class="tableContainerAG">
            <?php
            
            include("connection.php");
            
            // Perform SQL query to retrieve data from both customer and maintenance tables
            $sql = "SELECT m.maintenanceID, c.FullName, c.phoneNumber, c.Email, m.carBrand, m.carModel, m.modelYear, m.kilometer, m.color FROM customer c 
                    INNER JOIN maintenance m ON c.customerID = m.customerID";
            
            $result = mysqli_query($conn, $sql);
            
            if (!$result) {
                echo "<script>alert('Error retrieving data: " . mysqli_error($conn) . "')</script>";
            } else {
                // Display data in the table
                echo "<table class='content-tableAG'>";
                echo "<thead>
                          <tr>
                            <th>Check</th>
                            <th>Number</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Model Year</th>
                            <th>Kilometer</th>
                            <th>Color</th>
                          </tr>
                        </thead>
                        <tbody>";
            
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          // Add maintenanceID as the value of the checkbox
                          echo "<td><input type='checkbox' class='rowCheckbox' name='selectedRows[]' value='" . $row['maintenanceID'] . "'></td>";
                          echo "<td>" . $row['maintenanceID'] . "</td>";
                          echo "<td>" . $row['FullName'] . "</td>";
                          echo "<td>" . $row['phoneNumber'] . "</td>";
                          echo "<td>" . $row['Email'] . "</td>";
                          echo "<td>" . $row['carBrand'] . "</td>";
                          echo "<td>" . $row['carModel'] . "</td>";
                          echo "<td>" . $row['modelYear'] . "</td>";
                          echo "<td>" . $row['kilometer'] . "</td>";
                          echo "<td>" . $row['color'] . "</td>";
                          echo "</tr>";
                      }
            
                echo "</tbody></table>";
            }

          
            
          
            ?>
    
        <div class="actionButtonsAG">
            <button id="adminAccept-buttonAG" onclick="acceptSelectedRows()">Accept</button>
            <button type="submit" name="reject" id="adminReject-buttonAG">Reject</button>
        </div>
    </form>
        </div>
    </div>
</body>
</html>