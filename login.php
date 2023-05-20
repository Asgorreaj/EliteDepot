<!DOCTYPE html>
<html>
  <head>
  <title>EliteDepot Superstore</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
      }
      
      .login-container {
        max-width: 500px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
      }

      fieldset {
        border: none;
        padding: 0;
        margin: 0;
      }

      legend {
        font-weight: bold;
        font-size: 1.5em;
        margin-bottom: 10px;
      }

      label {
        display: block;
        margin-bottom: 10px;
        font-size: 1.2em;
        color: #333;
      }

      input[type="email"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 20px;
        font-size: 1.2em;
      }

      button[type="submit"] {
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        background-color: #0066cc;
        color: #fff;
        font-size: 1.2em;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      button[type="submit"]:hover {
        background-color: #004b8c;
      }

      .login-links {
        margin-top: 20px;
        text-align: center;
        font-size: 1.2em;
        color: #333;
      }

      .login-links a {
        margin-right: 10px;
        color: #0066cc;
        text-decoration: none;
        transition: all 0.3s ease;
      }

      .login-links a:hover {
        color: #004b8c;
        text-decoration: underline;
      }
      </style>
  </head>
  <body>
  <?php include 'header.php'; ?>
  <?php
	session_start();
	if(isset($_SESSION['user'])){
			header('location:product.php');
		}
	if(isset($_POST['submit'])){
		$user = $_POST['user'];// save username to user variable 
		$pass = $_POST['pass'];// save password to pass variable 

		//session_start();
		$_SESSION['user'] = $user;
		$_SESSION['pass'] = $pass;

		//echo "Hi ". $_SESSION['user'];
		header('location:product.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post" action="loginchack.php">
		E-mail   :<input type="email" name="email" value=""><br>
		Password :<input type="password" name="password" value=""><br>
		<input type="submit" name="Submit"><br>

		<a href="registration.php">Registration Page</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		
		<a href="header.php">Back</a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	</form>

</body>
</html>
<?php include 'footer.php'; ?>
</body>
</html>
