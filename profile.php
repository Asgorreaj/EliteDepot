<?php
session_start();
if(!isset($_SESSION['username'])) {
  header('Location: login.php');
}

if(isset($_POST['logout'])) {
  unset($_SESSION['username']);
  setcookie('remember_me', '', time() - 3600);
  header('Location: login.php');
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Customer Profile Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Customer Profile Page</h1>
  </header>
  <div class="container">
    <div class="profile">
      <img src="<?php echo isset($_SESSION['image']) ? $_SESSION['image'] : 'placeholder.png'; ?>" alt="Profile Picture">
      <h2><?php echo $_SESSION['username']; ?></h2>
      <p>Phone Number: <?php echo isset($_SESSION['phone']) ? $_SESSION['phone'] : ''; ?></p>
      <p>Address: <?php echo isset($_SESSION['address']) ? $_SESSION['address'] : ''; ?></p>
    </div>
    <div class="upload">
      <h2>Upload Profile Picture</h2>
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit" value="Upload">
      </form>
    </div>
  </div>
  <form method="post">
    <input type="submit" name="logout" value="Logout">
  </form>
</body>
</html>
