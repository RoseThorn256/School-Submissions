<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sticky text inputs</title>
</head>
<body>
<?php
	function make_text_input($name, $label, $size= 20) {

		echo '<p><label>' . $label . ': ';

		echo '<input type="text" name="' . $name . '" size="' . $size . '" ';

		if (isset($_POST[$name])) {
			echo ' value="' . htmlspecialchars($_POST[$name]) . '"';
		}

		echo '></label></p>';
	}

	echo '<form action="" method="post">';

	make_text_input('first_name', 'First Name');
	make_text_input('last_name', 'Last Name', 30);
	make_text_input('email', 'Email Address', 50);

	echo '<input type="submit" name="submit" value="Register!"></form>';

?>
</body>
</html>
