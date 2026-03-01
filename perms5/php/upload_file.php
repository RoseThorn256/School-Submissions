<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Upload a File</title>
</head>
<body>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if (move_uploaded_file ($_FILES['the_file']['tmp_name'], "../uploads/{$_FILES['the_file']['name']}")) {

		echo '<p>Your file has been uploaded.</p>';

	} else {

		echo '<p style="color: red;">Your file could not be uploaded because: ';

		switch ($_FILES['the_file']['error']) {
			case 1:
				echo 'The file exceeds the upload_max_filesize setting in php.ini';
				break;
			case 2:
				echo 'The file exceeds the MAX_FILE_SIZE setting in the HTML form';
				break;
			case 3:
				echo 'The file was only partially uploaded';
				break;
			case 4:
				echo 'No file was uploaded';
				break;
			case 6:
				echo 'The temporary folder does not exist.';
				break;
			default:
				echo 'Something unforseen happened.';
				break;
		}

		echo '.</p>';
	}

}

?>

<form action="upload_file.php" enctype="multipart/form-data" method="post">
	<p>Upload a file using this form:</p>
	<input type="hidden" name="MAX_FILE_SIZE" value="300000">
	<p><input type="file" name="the_file"></p>
	<p><input type="submit" name="submit" value="Upload This File"></p>
</form>

</body>
</html>
