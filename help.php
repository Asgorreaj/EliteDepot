<!DOCTYPE html>
<html>
  <head>
    <title>Help - EliteDepot Superstore</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      /* Center the content */
.content {
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
}

/* Style the heading */
h1 {
  font-size: 36px;
  margin-bottom: 20px;
}

/* Style the paragraph */
p {
  font-size: 18px;
  line-height: 1.5;
  margin-bottom: 20px;
}

/* Style the unordered list */
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

/* Style the list items */
li {
  margin-bottom: 10px;
}

/* Style the links */
a {
  color: #007bff;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}


</style>
  </head>
  <body>
  <?php 
    session_start(); // start a new session
    include 'header.php'; 
    
    // read from a file and display its contents
    $filename = 'somefile.txt';
    $file_contents = file_get_contents($filename);
    echo "<p>Need help? $file_contents</p>";
    
    // write to a file
    $new_contents = "Then contact us through conact us tab";
    file_put_contents($filename, $new_contents);
    
  ?>
  <div class="content">
    <h1>Help</h1>
    <p>Here are some resources to help you with your shopping experience:</p>
    <ul>
      <li><a href="#">FAQs</a></li>
      <li><a href="#">Shipping Information</a></li>
      <li><a href="#">Return Policy</a></li>
    </ul>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <?php include 'footer.php'; ?>
</body>
</html>
