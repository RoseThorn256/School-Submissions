<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Delete A Blog Entry</title>
</head>
<body>
<?php

	$dbc = mysqli_connect('localhost', 'root', 'Pass', 'myblog');

	if (isset($_GET['id']) && is_numeric($_GET['id'])) {

		$query = "SELECT title, entry FROM myblog WHERE id={$_GET['id']}";

		if ($r = mysqli_query($dbc, $query)) {

			$row = mysqli_fetch_array($r);

			echo '<form action="delete_entry.php" method="post">
				<p>Are you sure you want to delete this entry?</p>
				<p><h3>' . $row['title'] . '</h3>' .
				$row['entry'] . '<br>
				<input type="hidden" name="id" value="' . $_GET['id'] . '">
				<input type="submit" name="submit" value="Delete this Entry!"></p></form>';

		} else {

			echo '<p style="color: red;">Could not retrieve the blog entry because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';

		}

	} elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {

		$query = "DELETE FROM myblog WHERE id={$_POST['id']} LIMIT 1";
		$r = mysqli_query($dbc, $query);

		if (mysqli_affected_rows($dbc) == 1) {

			echo '<p>The blog entry has been deleted.</p>';

		} else {

			echo '<p style="color: red;">Could not delete the blog entry becasue:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';

		}

	} else {

		echo '<p style="color: red;">This page has been accessed in error.</p>';

	}

	mysqli_close($dbc);

?>
</body>
</html>
