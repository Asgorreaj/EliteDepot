<?php
// Start the session
session_start();

// Check if the user is logged in
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
    header("Location: loginadmin.php");
}

// Define variables and initialize with empty values
$searchValue = "";
$errorMessage = "";

// Define the file path for storing employee data
$filePath = "employees.txt";

// Function to delete an employee from the employees.txt file
function deleteEmployee($filePath, $employeeIndex){
    $employees = file($filePath);
    unset($employees[$employeeIndex]);
    $newEmployees = implode("", $employees);
    file_put_contents($filePath, $newEmployees);
}

// Check if the form has been submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate the search value
    if(empty($_POST["searchValue"])){
        $errorMessage = "Please enter a search value";
    }
    else{
        $searchValue = test_input($_POST["searchValue"]);
    }
}

// Read employee data from the file and sort it
$employees = array();
if(file_exists($filePath)){
    $lines = file($filePath);
    foreach($lines as $line){
        $employeeData = explode(",", $line);
        $employee = array(
            "name" => $employeeData[0],
            "email" => $employeeData[1],
            "gender" => $employeeData[2],
            "password" => $employeeData[3],
        );
        $employees[] = $employee;
    }
    // Sort employees by name in ascending order
    usort($employees, function($a, $b) {
        return strcmp($a["name"], $b["name"]);
    });
}

// Function to test and sanitize input data
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h1>Welcome to the Admin Panel</h1>
    <h3>Search for an employee</h3>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" name="searchValue" value="<?php echo $searchValue; ?>">
        <input type="submit" name="searchButton" value="Search">
        <span class="error"><?php echo $errorMessage; ?></span>
    </form>
    <br>
    <h3>Employee Data</h3>
    <?php
    // Display employee data
    if(count($employees) == 0){
        echo "No employees found.";
    }
    else{
        foreach($employees as $index => $employee){
            // If a search value has been entered, filter the employees
            if(!empty($searchValue) && !stristr($employee["name"], $searchValue) && !stristr($employee["email"], $searchValue) && !stristr($employee["gender"], $searchValue)){
                continue;
            }
            echo "<p>Name: ".$employee["name"]."</p>";
            echo "<p>Email: ".$employee["email"]."</p>";
            echo "<p>Gender: ".$employee["gender"]."</p>";
            echo "<p>Password: ".$employee["password"]."</p>";
            echo "<form method='post' action='".htmlspecialchars($_SERVER["PHP_SELF"])."'>";
            echo "<input type='hidden' name='employeeIndex' value='".$index."'>";
            echo "<input type='submit' name='deleteButton' value='Delete'>";
            echo "</form>";
            echo "<hr>";
            }
            }
            ?>
    <?php
    // Check if the delete button has been clicked
    if(isset($_POST['deleteButton']) && isset($_POST['employeeIndex'])){
        $employeeIndex = $_POST['employeeIndex'];
        deleteEmployee($filePath, $employeeIndex);
        header("Location: ".$_SERVER["PHP_SELF"]);
    }
    ?>

<br>
<a href="logoutadmin.php">Logout</a>
</body>
</html>
