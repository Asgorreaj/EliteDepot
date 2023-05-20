<!DOCTYPE html>
<html>
  <head>
    <title>Reviews | EliteDepot Superstore</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      .content
      {
        text-align: center;
      }
      
      .review {
        background-color: #f1f1f1;
        padding: 10px;
        margin: 10px;
        border-radius: 5px;
        box-shadow: 0 0 5px #ccc;
      }
      
      .review p {
        margin: 0;
      }
      
      form {
        margin: 20px auto;
        width: 80%;
        max-width: 500px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      
      label {
        font-weight: bold;
        margin-bottom: 5px;
      }
      
      input[type="text"], textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }
      
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.2s ease;
      }
      
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
      
      input[type="submit"]:active {
        background-color: #1e441e;
      }
      h1 {
        text-align: left;
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
      <h1><u>Reviews</u></h1>
      <?php
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
          $message = $_POST['message'];
          echo "<div class='review'><p>{$message}</p><p></p></div>";
        }
        else 
        {
          echo "<p>No reviews yet.</p>";
        }
      ?>
      
      <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
        <label for="message">Review:</label>
        <textarea id="message" name="message" required></textarea>
        <input type="submit" value="Submit Review">
      </form>
    </div><br><br><br><br><br><br>
    <?php include 'footer.php'; ?>
  </body>
</html>
