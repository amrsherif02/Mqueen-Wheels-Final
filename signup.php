<?php
include ("connection.php");
    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
       
        
        $sql = "Select * from admin where email='$email'";
        $result = mysqli_query($conn, $sql);        
        $count_email = mysqli_num_rows($result);  
        
        if($count_email==0){  
            
                $hash = password_hash($password, PASSWORD_DEFAULT);
                    
                $sql = "INSERT INTO admin (fullName, email, password) VALUES('$name', '$email','$hash')";
                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    echo   '<script>
                         window.location.href = "AdminHome.php";
                         alert("Sign Up Success")
                         </script>';
                }  
        }  
        else{  
            if($count_email>0){
                echo  '<script>
                        window.location.href = "login_Signup.php";
                        alert("Email already Exists !")
                        </script>';
            }
        }
        
        
        $emaillogin = mysqli_real_escape_string($conn, $_POST['emaillogin']);
        $passwordlogin = mysqli_real_escape_string($conn, $_POST['passlogin']);

        $sqllogin = "Select * from admin where email='$emaillogin'";
        $resultlogin = mysqli_query($conn, $sqllogin);        
        $count_emaillogin = mysqli_num_rows($resultlogin); 
        if (isset($_POST['submitlogin'])) {
            if($count_emaillogin>0){
                echo  '<script>
                        window.location.href = "AdminHome.php";
                        alert("Welcome !")
                        </script>';
            }
            else {
                echo  '<script>
                window.location.href = "login.php";
                alert("Email does not Exist !")
                </script>';
            }
        }
       

    }
    include("closeconnection.php");