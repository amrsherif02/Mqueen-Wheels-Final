<?php

include("connection.php");
$cookie_name = "MCQUEEN";
if(isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_COOKIE[$cookie_name];
    echo "Welcome back, " . $cookie_value . "!";
} else {
    echo "Welcome, guest!";
}


if(isset($_GET['model'])) {
    $model = $_GET['model'];

    // Load data based on the model
    if($model == 'gclass') {
        // Load data for model 1
       
        $sql = "SELECT * FROM car where carModel = 'G Class'";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $designDesc1 = $row['designDesc1'];
        $designDesc2 = $row['designDesc2'];
        $innovationDesc = $row['innovationDesc'];
        $performanceDesc = $row['performanceDesc'];
        $videoUrl1 = $row['videoUrl1'];
        $videoUrl2 = $row['videoUrl2'];
        $imageUrl1 = $row['imageUrl1'];
        $imageUrl2 = $row['imageUrl2'];

        $photo1 = $row['photo1'];
        $photo2 = $row['photo2'];
        $photo3 = $row['photo3'];
        $photo4 = $row['photo4'];
        $photo5 = $row['photo5'];

           
    } elseif($model == 's600') {
        // Load data for model 2

        $sql = "SELECT * FROM car where carModel = 'S Class'";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $designDesc1 = $row['designDesc1'];
        $designDesc2 = $row['designDesc2'];
        $innovationDesc = $row['innovationDesc'];
        $performanceDesc = $row['performanceDesc'];
        $videoUrl1 = $row['videoUrl1'];
        $videoUrl2 = $row['videoUrl2'];
        $imageUrl1 = $row['imageUrl1'];
        $imageUrl2 = $row['imageUrl2'];

        $photo1 = $row['photo1'];
        $photo2 = $row['photo2'];
        $photo3 = $row['photo3'];
        $photo4 = $row['photo4'];
        $photo5 = $row['photo5'];

        
    }

    elseif($model == 'gls') {
        // Load data for model 2
        $sql = "SELECT * FROM car where carModel = 'GLS'";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $designDesc1 = $row['designDesc1'];
        $designDesc2 = $row['designDesc2'];
        $innovationDesc = $row['innovationDesc'];
        $performanceDesc = $row['performanceDesc'];
        $videoUrl1 = $row['videoUrl1'];
        $videoUrl2 = $row['videoUrl2'];
        $imageUrl1 = $row['imageUrl1'];
        $imageUrl2 = $row['imageUrl2'];

        $photo1 = $row['photo1'];
        $photo2 = $row['photo2'];
        $photo3 = $row['photo3'];
        $photo4 = $row['photo4'];
        $photo5 = $row['photo5'];
        
    }
    elseif($model == 'amg') {
        // Load data for model 2
        $sql = "SELECT * FROM car where carModel = 'AMG'";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $designDesc1 = $row['designDesc1'];
        $designDesc2 = $row['designDesc2'];
        $innovationDesc = $row['innovationDesc'];
        $performanceDesc = $row['performanceDesc'];
        $videoUrl1 = $row['videoUrl1'];
        $videoUrl2 = $row['videoUrl2'];
        $imageUrl1 = $row['imageUrl1'];
        $imageUrl2 = $row['imageUrl2'];

        $photo1 = $row['photo1'];
        $photo2 = $row['photo2'];
        $photo3 = $row['photo3'];
        $photo4 = $row['photo4'];
        $photo5 = $row['photo5'];


        // $designDesc1 = "Ahmed Gamal";
    
        // $designDesc2 = "AMG GTS ipsum dolor sit amet, consectetuer adipiscing elit.
        //  Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus 
        //  et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, 
        //  ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.";
        
        // $innovationDesc = "Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, 
        // dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.";
        
        
        // $performanceDesc = "Biturbo torque, from a V8 or V12, is apportioned to all four wheels with 
        // constantly calculated precision. Changing weather or winding road, 4MATIC® sends power to 
        // the wheels that can use it best.";
        
    }

}

?>


<!DOCTYPE html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<title>McqueenWheels</title>
<meta charset="UTF-8"/>
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
            <li><a href="login.php">Login</a></li>
        </ul>
    </header>

<video loop width =100%; autoplay muted>
    <source src="<?php echo $videoUrl1; ?>" type="video/mp4">
</video>

</div>

    <div class = "div201">
    <div class="top201">
        <p class="mini201">DESIGN</p>
        <h1 class="head201"> Even the tiniest<h1= class="detail201"> details <br> <h1= class="head201"> on a grand scale.</h1>
    </div>
    
    <div style="margin-top: 15%;">
        <img style="margin-left: 70%; margin-top: 10%;"  src="<?php echo $imageUrl1; ?>" width="30%" height="30%">
    </div>
    <div class="txt201">
        <p style="width: 400px;"><?php echo $designDesc1; ?></p>
    </div>
    <div style="margin-top: 15%;">
        <img style="margin-left: 60%; margin-top: 5%; z-index: -5 ;position: relative; " src="images/Rectangle28.png" width="30%" height="30%">
    </div>
    
    <div class="txt202">
    <p style="width: 400px; margin-top: -30%;"><?php echo $designDesc2; ?></p>
    </div>
    
</div>
<div class="div202">
<div class ="top201">
    <p style="margin-top: 17%;" class="mini201">INNOVATION</p>
    <h1 style="text-align: center;" class="head201"> Measure it by the <h1= class="detail201"> lengths <br> <h1= class="head201"> it'll go for you.</h1>
    <p style = "margin: 15px 400px"class="txt203"><?php echo $innovationDesc; ?></p>
</div>
</div>


<div class="div0AZ">
    <video loop width =100%; autoplay muted>
        <source src="<?php echo $videoUrl2; ?>" type="video/mp4">
    </video>
</div>
 
</div>
<div class="Div1AZ">
    <img style="width: 50%; margin-top: 5%;" src=" <?php echo $imageUrl2; ?>" alt="Italian Trulli"> 
     
</div>

<div class="Div11AZ">
    <h5 style="color: #a30000;font-size: 100%;" >PERFORMANCE</h5>
    <h2>Paradise for passengers 
        can still delight a driver.</h2>
    <p style="color: #7f7f77;font: size 15px; margin-top: 1%;"> <?php echo $performanceDesc; ?>  </p>

</div>
<div class="Div2AZ">
    <h2 style="margin-top: 25%";>Gallery</h2>
   
</div >
<div class="buttonstylingAZ">

    <button class="buttonAZ button1AZ">Interior</button>
    <button class="buttonAZ button2AZ">Exterior</button>
  </div>  
  <div class="img1AZ">
    <!-- <img style="margin-top: 1%; width: 50%; margin-left: 25%;" src="interio.png" alt="Italian Trulli"> -->
    <div class="background-sliderAZ">
        <div class="image-containerAZ">
            <img src="images/int1.jpg" alt="Image 1">
            <button class="arrowAZ left-arrowAZ"> &lt; </button>
            <button class="arrowAZ right-arrowAZ"> &gt; </button>
        </div>
       
      
</div>
</div>


<script>
    const leftArrow = document.querySelector('.left-arrowAZ');
    const rightArrow = document.querySelector('.right-arrowAZ');
    const imageContainer = document.querySelector('.image-containerAZ');
    const images = ["<?php echo $photo1; ?>", "<?php echo $photo2; ?>", "<?php echo $photo3; ?>", "<?php echo $photo4; ?>", "<?php echo $photo5; ?>"]; // List of image URLs
    let currentIndex = 0;

    leftArrow.addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      updateImage();
    });

    rightArrow.addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % images.length;
      updateImage();
    });

    function updateImage() {
        imageContainer.innerHTML = `
          <img src="${images[currentIndex]}" alt="Image ${currentIndex + 1}">
          <button class="arrowAZ left-arrowAZ">&lt;</button>
          <button class="arrowAZ right-arrowAZ">&gt;</button>`;

        const newLeftArrow = document.querySelector('.left-arrowAZ');
        const newRightArrow = document.querySelector('.right-arrowAZ');

        newLeftArrow.addEventListener('click', () => {
          currentIndex = (currentIndex - 1 + images.length) % images.length;
          updateImage();
        });

        newRightArrow.addEventListener('click', () => {
          currentIndex = (currentIndex + 1) % images.length;
          updateImage();
        });
    }
</script>



<script src="benz.js"></script> 
<footer style = " margin-top: 5%;">
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
           <img src="ic_round-email.png" alt="">
           <p>info@mqueenwheels.com</p>
         </div>
         <div class="footer6-c">
             <img src="mdi_address-marker.png" alt="">
             <p>31 Helmeit EL Zeiton</p>
         </div>
         <div class="footer6-d">
             <img src="solar_phone-bold.png" alt="">
             <p>19991</p>
         </div>
     </div>
    </div>
    <p class="lastaya">© 2024 `McqueenWheels. ALL RIGHTS RESERVED. POWERED BY HSBC.</p>
 </footer>


 
</body>