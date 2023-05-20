<!DOCTYPE html>
<html>
<head>
    <title>Employee Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
}

.container {
    width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h1 {
    text-align: center;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
}

td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

fieldset {
    border: 2px solid #ddd;
    padding: 20px;
    border-radius: 5px;
}

legend {
    font-weight: bold;
    color: #666;
    font-size: 20px;
    padding: 5px;
    border: 2px solid #ddd;
    border-radius: 5px;
    margin-bottom: 10px;
}

    </style>
</head>
<body>
    <?php
        session_start(); // Start the session
        if(isset($_SESSION['user_data'])) { // Check if the user data is available in the session
            $user_data = $_SESSION['user_data']; // Get the user data from the session
    ?>
    <div class="container">
        <h1>Welcome <?php echo $user_data['name']; ?>!</h1>
        <p>Here's your information:</p>
        <fieldset>
            <legend>User Information</legend>
            <table>
                <tr>
                    <td>Name:</td>
                    <td><?php echo $user_data['name']; ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo $user_data['email']; ?></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><?php echo $user_data['age']; ?></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><?php echo $user_data['phone']; ?></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><?php echo $user_data['address']; ?></td>
                </tr>
            </table>
        </fieldset>
        <a href="logout.php">Logout</a>
    </div>
    <?php
        } else {
            header('location: loginemp.php'); // Redirect to the login page if user data is not available in the session
        }
    ?>
</body>
</html>
