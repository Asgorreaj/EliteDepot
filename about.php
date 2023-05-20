<!DOCTYPE html>
<html>
  <head>
    <title>About Us | EliteDepot Superstore</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      fieldset {
        border: 2px solid #333;
        border-radius: 10px;
        padding: 20px;
      }
      
      legend {
        font-weight: bold;
        font-size: 24px;
      }
      
      label {
        display: block;
        margin-bottom: 10px;
      }
      
      p {
        margin-bottom: 20px;
      }
    </style>
  </head>
  <body>
  <?php 
    session_start(); // start a new session
    include 'header.php'; 
    
    // read from a file and display its contents
    $filename = 'about.txt';
    $file_contents = file_get_contents($filename);
    echo "<p>$file_contents</p>";
    
    // write to a file
    $new_contents = "";
    file_put_contents($filename, $new_contents);
    
  ?>
  <main>
    <fieldset>
      <legend>About Us</legend>
      <p>EliteDepot Superstore has been providing quality products at unbeatable prices for over 20 years. Our mission is to offer the best selection of products at the lowest prices possible, while providing exceptional customer service.</p>
      <p>We offer a wide range of products, including electronics, home goods, clothing, and more. Our team is dedicated to providing a seamless shopping experience for our customers, whether you shop online or in-store.</p>
      <p>Thank you for choosing EliteDepot Superstore for all your shopping needs!</p>
    </fieldset>
  </main><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <?php include 'footer.php'; ?>
</body>

</html>
