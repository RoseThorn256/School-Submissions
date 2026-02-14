<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
</head>
<body>

	<div><p>Please complete this form to register:</p>

		<form action="handle_reg7.php" method="post">

			<p>Email Address: <input type="text" name="email" size="30"></p>

			<p>Password: <input type="password" name="password" size="20"></p>

			<p>Confirm Password: <input type="password" name="confirm" size="20"></p>

			<p>Date Of Birth:
				<select name="month">
					<option vlaue="">Month</option>
					<option vlaue="1">January</option>
					<option vlaue="2">Febuary</option>
					<option vlaue="3">March</option>
					<option vlaue="4">April</option>
					<option vlaue="5">May</option>
					<option vlaue="6">June</option>
					<option vlaue="7">July</option>
					<option vlaue="8">August</option>
					<option vlaue="9">September</option>
					<option vlaue="10">October</option>
					<option vlaue="11">November</option>
					<option vlaue="12">December</option>
				</select>
				<select name="day">
					<option value="">Day</option>
					<?php
						for ($i = 1; $i <= 31; $i++) {
							echo "<option value=\"$i\">$i</option>\n";
						}
					?>
				</select>

			<p>Favorite Color:
				<select name="color">
					<option value="">Pick One</option>
					<option value="red">Red</option>
					<option value="yellow">Yellow</option>
					<option value="green">Green</option>
					<option value="blue">Blue</option>
					<option vlaue="purple">Purple</option>
					<option value="pink">Pink</option>
				</select>
			</p>

			<p><input type="checkbox" name="terms" value="Yes"> I agree to the terms (whatever they may be).</p>

			<input type="submit" name="submit" value="Register">

		</form>

	</div>

</body>
</html>
