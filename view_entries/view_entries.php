<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View My Blog</title>
</head>
<body>
<?php

	$dbc = mysqli_connect('localhost', 'root', 'Pass', 'myblog');

	$query = 'SELECT * FROM myblog ORDER BY date_entered DESC';

	if ($r = mysqli_query($dbc, $query)) {

		while ($row = mysqli_fetch_array($r)) {

			echo "<p><h3>{$row['title']}</h3>
				{$row['entry']}<br>
				<a href=\"edit_entry.php?id={$row['id']}\">Edit</a>
				<a href=\"delete_entry.php?id={$row['id']}\">Delete</a>
			</p><hr>\n";

		}

	} else {

		echo '<p style="color: red;">Could not retrieve the data because:<br>' . mysqli_error($dbc) . '</p><p>The query being run was: ' . $query . '</p>';

	}

	mysqli_close($dbc);

?>
</body>
</html>
