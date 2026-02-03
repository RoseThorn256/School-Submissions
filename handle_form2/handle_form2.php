<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Your Feedback</title>
</head>
<body>
<?php // Script 3.3 handle_form.php

ini_set('display_errors', 1);

$title = $_POST['title'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$response = $_POST['response'];
$comments = $_POST['comments'];

print "<p>Thank you, $title $f_name, $l_name, for your comments.</p>
<p>You stated that you found this example to be '$response' and added:<br>$comments</p>";

?>
</body>
</html>
