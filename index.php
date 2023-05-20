<?php
session_start();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Open the file for appending
  $file = fopen('messages.txt', 'a');

  // Write the data to the file
  fwrite($file, "Name: $name\n");
  fwrite($file, "Email: $email\n");
  fwrite($file, "Message: $message\n\n");

  // Close the file
  fclose($file);

  // Set a success message
  $_SESSION['message'] = 'Your message has been sent!';
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>EliteDepot Superstore</title>
    <link rel="stylesheet" type="text/css" href="style_1.css">
    <style>
    .content 
    {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
        padding: 50px 0;
    }
    .button 
    {
        display: inline-block;
        padding: 10px 20px;
        background-color: #ff6600;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 1.2em;
    }
  
    .button:hover 
    {
         background-color: #cc5500;
    }
    </style>
    </head>
    <body>
    <?php include 'header.php'; ?>
    <div class="content">
    <a href="product.php" class="button">Shop Now</a>
      <h1><cente>Welcome to EliteDepot Superstore</h1>
      <p>Explore our huge selection of products at unbeatable prices. From electronics to home goods, we have it all!</p><div><div class="container">
  <div class="row">
    <div class="span4"></div>
    <div class="span4"><img class="center-block" src="llll.png
    " />
  </div>
    <div class="span4"></div>
  </div>
</div>
      </div>
    </div></div>
  </body>
  <?php include 'footer.php'; ?>
</html>
