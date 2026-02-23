<?php

define('TITLE', 'Register');
include('templates/header.html');

echo '<h2>Registration Form</h2> <p>Register so that you can take advantage of certain features like this, that, and the other thing.</p>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$problem = false;

	if (empty($_POST['first_name'])) {
		$problem = true;
		echo '<p class="text--error">Please enter your last name!</p>';
	}

	if (empty($_POST['last_name'])) {
		$problem = true;
		echo '<p class="text--error">Please enter your last name!</p>';
	}

	if (empty($_POST['email']) || (substr_count($_POST['email'], '@') != 1) ) {
		$problem = true;
		echo '<p class="text--error">Please enter your email address!</p>';
	}

	if (empty($_POST['password1'])) {
		$problem = true;
		echo '<p class="text--error">Please enter a password!</p>';
	}

	if ($_POST['password1'] != $_POST['password2']) {
		$problem = true;
		echo '<p class="text--error">your password did not match your confirmed password!</p>';
	}

	if (!$problem) {
		echo '<p class="text--success">You are now registered!<br>Okay you are not really registered but...</p>';

		$body = "Thank you {$_POST['first_name']}, for registering with the J. D. Salinger fan club!'.";
		mail($_POST['email'], 'Registration Conformation', $body, 'From: admin@example.com');

		$_POST = [];
	} else {
		echo '<p class="text--error">Please try again!</p>';
	}
}

?>
<form action="register.php" method="post" class="form--inline">

	<p><label for="first_name">First Name:</label><input type="text" name="first_name" size="20" value="<?php if (isset($_POST['first_name'])) { echo htmlspecialchars($_POST['first_name']); } ?>"></p>

	<p><label for="last_name">Last Name:</label><input type="text" name="last_name" size="20" value="<?php if (isset($_POST['last_name'])) { echo htmlspecialchars($_POST['last_name']); } ?>"></p>

	<p><label for="email">Email:</label><input type="text" name="email" size="20" value="<?php if (isset($_POST['email'])) { echo htmlspecialchars($_POST['email']); } ?>"></p>

	<p><label for="password1">Password:</label><input type="text" name="password1" size="20" value="<?php if (isset($_POST['password1'])) { echo htmlspecialchars($_POST['password1']); } ?>"></p>

	<p><label for="password2">Confirm Password:</label><input type="text" name="password2" size="20" value="<?php if (isset($_POST['password2'])) { echo htmlspecialchars($_POST['password']); } ?>"></p>

	<p><input type="submit" name="submit" value="Register!" class="button--pill"></p>

</form>

<?php include('templates/footer.php'); ?>
