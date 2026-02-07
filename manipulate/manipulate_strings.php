<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Manipulate Strings</title>
</head>
<body>
	<?php

		$name = "rose laidler";
		$name_with_spaces = "          " . $name . "          ";

		print "<p>" . ucwords($name) . "<br></p>";
		print "<p>" . str_ireplace('laidler', 'last_name', $name) . "<br></p>";
		print "<pre>" . $name_with_spaces . "<br></pre>";
		print "<pre>" . trim($name_with_spaces) . "</pre>";
	?>
</body>
</html>
