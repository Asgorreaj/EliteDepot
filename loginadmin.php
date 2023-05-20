<?php
session_start();

if(isset($_SESSION['user'])){
    header('location:admin.php');
}

if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // Check if the provided username and password are valid
    if($user == "admin" && $pass == "password") {
        // Set a session variable to indicate that the user is logged in
        $_SESSION['user'] = $user;

        // Redirect the user to the customer profile page
        header('location:admin.php');
        exit; // Add this line to stop the script from executing further
    } else {
        // If the provided credentials are not valid, show an error message
        echo "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Session</title>
</head>
<body>
    <?php include('header.php');?>
    <h1> Login Page</h1>
    <hr>
    <fieldset>
        <legend>Login Form</legend>
        <form method="post">
            <p><input type="text" name="user" placeholder="User name" required=""></p>
            <p><input type="password" name="pass" placeholder="Password" required=""></p>
            <input type="submit" name="submit" value="Login">
        <p class="text-center small">Don't have an account! <a href="registration.php">Sign up here</a>.</p>

    </form>
</fieldset>
</body>
</html>
<?php include 'footer.php'; ?>