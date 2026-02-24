<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Date Menus</title>
</head>
<body>
<?php
	function make_date_menus() {
		$months = [1 => 'January', 'Feburary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

		echo '<select name="month">';
		foreach ($months as $key => $value) {
			echo "\n<option value=\"$key\">$value</option>";
		}
		echo '</select>';

		echo '<select name="day">';
		for ($day = 1; $day <= 31; $day++) {
			echo "\n<option value=\"$day\">$day</option>";
		}
		echo '</select>';

		echo '<select name="year">';
		$start_year = date('Y');
		for ($y = $start_year; $y <= ($start_year + 10); $y++) {
			echo "\n<option value=\"$y\">$y</option>";
		}
		echo "</select>";

	}

	echo '<form action="" method="post">';
	make_date_menus();
	echo '</form>';

?>
</body>
</html>
