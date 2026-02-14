<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<style type="text/css" media="screen">
		.error {color: red;}
	</style>
</head>
<body>
	<h1>Registration Results</h1>
<?php

	ini_set("display_errors", 1);

	$okay = true;

	// Check to make sure email was inputted
	if (empty($_POST['email'])) {
		print '<p class="error">Please enter your email address.</p>';
		$okay = false;
	}

	// Check to make sure a password was inputted
	if (empty($_POST['password'])) {
		print '<p class="error">Please enter your password.</p>';
		$okay = false;
	}

	// Check to make sure password, and confirm password match
	if ($_POST['password'] != $_POST['confirm']) {
		print '<p class="error">Your confirmed password does not match the original password.</p>';
		$okay = false;
	}

	// Check to make sure the year inputted is four digits long
	if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4)) {

		// Check to make sure birth year is a valid birth year
		if ($_POST['year'] < 2026) {
			$age = 2026 - $_POST['year'];
		} else {
			print '<p class="error">Either you entered your birth year wrong, or you come from the future!</p>';
			$okay = false;
		}

	} else {
		print '<p class="error">Please enter the year you were born as four digits.</p>';
		$okay = false;
	}

	// Check if terms have been accepted
	if ( !isset($_POST['terms'])) {
		print '<p class="error">You must accept the terms.</p>';
		$okay = false;
	}

	if ($_POST['color'] == 'red') {
		$color_type = 'primary';
	} elseif ($_POST['color'] == 'yellow') {
		$color_type = 'primary';
	} elseif ($_POST['color'] == 'green') {
		$color_type = 'secondary';
	} elseif ($_POST['color'] == 'blue') {
		$color_type = 'primary';
	} elseif ($_POST['color'] == 'purple') {
		$color_type = 'secondary';
	} elseif ($_POST['color'] == 'pink') {
		$color_type = 'unclassified';
	} else {
		print '<p class="error">Please select your favorite color.</p>';
		$okay = false;
	}

	// Print registry confirmation
	if ($okay) {
		print '<p>You have been successfully registered (but not really).</p>';
		print "<p>You will turn $age this year.</p>";
		print "<p>Your favorite color is a(n) $color_type color.</p>";
	}
?>
</body>
</body>
</html>
