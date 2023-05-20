<!DOCTYPE html>
<html lang="en">
<html>
  <head>
    <title>Registration - EliteDepot Superstore</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      form {
  margin: 50px auto;
  max-width: 500px;
  background-color: #fff;
  border: 1px solid #ccc;
  padding: 20px;
  box-shadow: 0px 0px 10px #ccc;
}

form input[type="text"],
form input[type="email"],
form input[type="number"],
form input[type="password"] {
  display: block;
  margin: 10px 0;
  padding: 10px;
  width: 100%;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

form input[type="submit"] {
  display: block;
  margin: 20px auto;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

form a {
  display: block;
  margin: 10px 0;
  color: #007bff;
  text-align: center;
  font-size: 16px;
}

      </style>
  </head>
  <body>
<form method="post" action="reg_chack.php">
	Name :<input type="text" name="name" value=""><br>
	E-mail :<input type="email" name="email" value=""><br>
	Age :<input type="number" name="age" value=""><br>
	Phone Number :<input type="number" name="phone" value=""><br>
	Address:<input type="text" name="address" value=""><br>
	Password :<input type="password" name="password" value=""><br>
	Re-enter Password :<input type="password" name="re-password" value=""><br>
	<input type="submit" name="Submit"><br>
	<a href="login.php">Login page</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	<a href="index.php">Back</a>

</form>
</body><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include 'footer.php'; ?>
</html>