<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View Your Settings</title>
	<style type="text/css">
		body {
			<?php

			if (isset($_COOKIE['font_size'])) {
				echo "\t\tfont-size: " . htmlentities($_COOKIE['font_size']) . ";\n";
			} else {
				echo "\t\tfont-size: medium;";
			}

			if (isset($_COOKIE['font_color'])) {
				echo "\t\tcolor: #" . htmlentities($_COOKIE['font_color']) . ";\n";
			} else {
				echo "\t\tcolor: #000;";
			}

			?>
		}
	</style>
</head>
<body>
	<p><a href="customize.php">Customize Your Settings</a></p>
	<p><a href="reset.php">Reset Your Settings</a></p>

	<p>
		yadda yadda yadda yadda yadda 
		yadda yadda yadda yadda yadda 
		yadda yadda yadda yadda yadda 
		yadda yadda yadda yadda yadda 
		yadda yadda yadda yadda yadda
	</p>

</body>
</html>
