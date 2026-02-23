<?php // Script 8.14 - welcome.php
/* This is the welcome page. The user is redirected here
after they successfully log in. */

	session_start();

// Set the page title and include the header file:
	define('TITLE', 'Welcome to the J.D. Salinger Fan Club!');
	include('templates/header.html'); 

	echo '<h2>Welcome to the J.D. Salinger Fan Club!</h2>';
	echo '<p>Hello, ' . $_SESSION['email'] . '!</p>';

	date_default_timezone_set('America/Arizona');
	echo '<p>You have logged in since: ' . date('g:i a', $_SESSION['loggedin']) . '.</p>';

	echo '<p><a href="logout.php">Logout</a></p>';

	include('templates/footer.html');
?>
