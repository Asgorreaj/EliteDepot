<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .container {
            margin: auto;
            max-width: 800px;
        }

        h1 {
            text-align: center;
        }

        .menu {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .menu a {
            margin: 0 10px;
        }
        .message {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
	<div class="container">
		<h1>Search</h1>
		<form method="post" action="search_controller.php">
			<label for="search_type">Search for:</label>
			<select id="search_type" name="search_type">
				<option value="employee">Employee</option>
				<option value="product">Product</option>
				<option value="importer">Importer</option>
			</select><br><br>
			<label for="search_term">Search term:</label>
			<input type="text" id="search_term" name="search_term"><br><br>
			<input type="submit" value="Search">
		</form>
	</div>
</body>
</html>