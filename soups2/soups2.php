<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>No Soup for You!</title>
</head>
<body>
	<h1>Mmm...soups</h1>
	<?php
		$soups = [
		'Monday' => 'Clam Chowder',
		'Tuesday' => 'White Chicken Chili',
		'Wednesday' => 'Vegitarian'
		];

		$count1 = count($soups);
		print "<p>The soups array originally had $count1 elements.</p>";

		$soups['Thursday'] = 'Chicken Noodle';
		$soups['Friday'] = 'Tomato';
		$soups['Saturday'] = 'Cream of Broccoli';

		$count2 = count($soups);
		print "<p>After adding 3 more soups, the array now has $count2 elements.</p>";

		print_r($soups);
	?>
</body>
</html>
