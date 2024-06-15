<?php
include("connection.php");

// Check if the form is submitted
if (isset($_POST['submitlogin'])) {
    // Check if the 'passlogin' key exists in the $_POST array
    if (isset($_POST['passlogin'])) {
        // Retrieve form data
        $emaillogin = mysqli_real_escape_string($conn, $_POST['emaillogin']);
        $passwordlogin = mysqli_real_escape_string($conn, $_POST['passlogin']);

        // SQL query to check if the email exists in the database
        $sqllogin = "SELECT * FROM admin WHERE email='$emaillogin'";
        $resultlogin = mysqli_query($conn, $sqllogin);
        $count_emaillogin = mysqli_num_rows($resultlogin);

        // Check if the email exists
        if ($count_emaillogin > 0) {
            // Redirect to AdminHome.php if email exists
            echo '<script>
                    window.location.href = "AdminHome.php";
                    alert("Welcome!");
                  </script>';
        } else {
            // Redirect back to login_Signup.php if email does not exist
            echo '<script>
                    window.location.href = "login_Signup.php";
                    alert("Email does not exist!");
                  </script>';
        }
    } else {
        // Handle the case where 'passlogin' is not set
        echo '<script>
                window.location.href = "login_Signup.php";
                alert("Password is not set!");
              </script>';
    }
}
include("closeconnection.php");


        