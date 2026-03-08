<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Connect to MySQL</title>
</head>
<body>
<?php

	$servername = "localhost";
	$username = "root";
	$password = "Pass";
	$database = "myblog";

	if ($dbc = @mysqli_connect($servername, $username, $password, $database)) {

		echo '<p>Successfully connected to the databse!</p>';

		mysqli_close($dbc);

	} else {

		echo '<p style="color: red;">Could not conect to the databse:<br>' . mysqli_connect_error() . '.</p>';

	}

?>
</body>
</html>
