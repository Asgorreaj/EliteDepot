<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Customer Profile</title>
    <style>
    form {
        display: flex;
        flex-direction: column;
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    label {
        font-weight: bold;
        margin-top: 10px;
        margin-bottom: 5px;
    }
    input[type="text"], input[type="tel"], input[type="file"] {
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        font-size: 16px;
    }
    .info {
        float: center;
    }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div id="container">
        <h1>Customer Profile</h1>
        <hr>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            
            <label for="file">Profile Picture:</label>
            <input type="file" id="file" name="file" accept="image/*" required>
            
            <input type="submit" name="submit" value="Save">
        </form>
        <?php
            if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $file = $_FILES['file'];
                
                $fileName = $file['name'];
                $fileType = $file['type'];
                $fileTmpName = $file['tmp_name'];
                $fileError = $file['error'];
                $fileSize = $file['size'];
                
                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));
                
                $allowed = array('jpg', 'jpeg', 'png');
                
                if(in_array($fileActualExt, $allowed)) {
                    if($fileError === 0) {
                        if($fileSize < 500000) {
                            $fileNameNew = uniqid('', true).".".$fileActualExt;
                            $fileDestination = 'picupload/'.$fileNameNew;
                            move_uploaded_file($fileTmpName, $fileDestination);
                            echo "<img src='$fileDestination'>";
                            echo "<p><strong>Name:</strong> $name</p>";
                            echo "<p><strong>Phone:</strong> $phone</p>";
                            echo "<p><strong>Address:</strong> $address</p>";
                            setcookie('name', $name, time() + (86400 * 30), "/");
                            setcookie('phone', $phone, time() + (86400 * 30), "/");
                            setcookie('address', $address, time() + (86400 * 30), "/");
                            setcookie('image', $fileDestination, time() + (86400 * 30), "/");
                        } else {
                            echo "<p style='color:red;'>Error: Your file is too large.</p>";
                        }
                    } else {
                        echo "<p style='color:red;'>Error: There was an error uploading your file.</p>";
                    }
                } else {
                    echo "<p style='color:red;'>Error: You can only upload JPG, JPEG or PNG files.</p>";
                }
            } else {
                if(isset($_COOKIE['name'])) {
                    echo "<div class='text-center'>";
                    echo "<img src='{$_COOKIE['image']}'>";
                    echo "<p><strong>Name:</strong> {$_COOKIE['name']}</p>";
                    echo "<p><strong>Phone:</strong> {$_COOKIE['phone']}</p>";
                    echo "<p><strong>Address:</strong> {$_COOKIE['address']}</p>";
                }
            }
        ?>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>