<?php
include("demo.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Model</title>
    <style>
        /* Your CSS styles here */
    </style>
</head>


<body>
    <div class="container">
        <h1><?php echo $modelName; ?></h1>
        <img src="<?php echo $imageUrl; ?>" alt="Car Image">
        <p><?php echo $description; ?></p>
        <!-- Other content goes here -->
    </div>
</body>
</html>
