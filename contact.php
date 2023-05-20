<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us - EliteDepot Superstore</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      fieldset {
  border: 1px solid #ccc;
  padding: 10px;
  margin-bottom: 20px;
  max-width: 600px;
}

legend {
  font-size: 20px;
  font-weight: bold;
}

label {
  display: block;
  margin-bottom: 5px;
}

input,
textarea {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}

button {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
}

button:hover {
  background-color: #666;
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
    <div class="content">
      <h1>Contact Us</h1>
      <p>Feel free to get in touch with us for any queries or feedback. You can reach us using the following information:</p>
      <ul>
        <li><strong>Email:</strong> info@elitedepot.com</li>
        <li><strong>Phone:</strong> +91 9051 XXXXXX</li>
        <li><strong>Address:</strong> Dhaka,Bangladesh</li>
      </ul>
      

      
    </div><br>
    <br>
  </body><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <?php include 'footer.php'; ?>
</html>
