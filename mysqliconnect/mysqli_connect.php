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

	$conn = new mysqli($servername, $username, $password, $database);

	if ($conn->connect_error) {

		die("Connection failed: " . $conn->connect_error);

	} else {

		echo "<p>Connection successful!</p>";

	}

?>
</body>
</html>
