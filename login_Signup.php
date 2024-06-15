<?php 
include ("connection.php");
include ("signup.php");
include ("login.php");

?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <link rel="stylesheet" href="benz.css">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Login/Signup</title>
    <link rel="stylesheet" href="benz.css" />
    <link rel="icon" href="images/mcqueenicon.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js";></script>
   
  </head>

  <body class="body2">
    <div class="mntcontainer22">

    <div class="biglog">

      <div class="backgrond"> 
      </div>
       <div class="classlog"> 
    <section class="wrapper">
      <div class="form signup">
        <header>Sign Up</header>
        <form action="signup.php" method="POST">
          <input type="text" name="name" id="fullnamelog" placeholder="Full name" required />
          <input type="email" name = "email"id="emaillog" placeholder="Email address" required />
          <input type="password" name="pass" id="passwordlog" placeholder="Password" required />
          <input  name = "submit" type="submit" value="SignUp"/>
        </form>
        
      </div>

      <div class="form login">
        <header>Login</header>
        <form action="login.php" method="POST">
          <input name ="emaillogin" type="text" placeholder="Email address" required />
          <input  name="passlogin" type="password" placeholder="Password" required />
          <input name = "submitlogin" type="submit" value="Login" />
        </form>
      </div>  
      </div>
    
    </div>
  </div>
    </section>
    <script src="script.js"></script>
  </body>
</html>