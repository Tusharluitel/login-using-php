<?php
session_start();

if (isset($_SESSION['user_name']) && isset($_SESSION['password'])) {
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Incorrect information</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body class="incorrect">
		<h1>You have entered incorrect username or password</h1><br>
		<h3>Username:<?php echo $_SESSION['user_name']; ?></h3><br>
		<h3>Password:<?php echo $_SESSION['password']; ?></h3>
		<a href="index.html" class="try-again">Try again</a>
	</body>

	</html>
<?php
}
