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
		<title>Home</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body class="display">
		<h1 class="information-display">Hello, <?php echo $_SESSION['name']; ?></h1><br>
		<h3 class="information-display">Your password is <?php echo $_SESSION['password']; ?> </h3>
		<a href="index.php" class="logout">Logout</a>

	</body>

	</html>

<?php
} else {
	header("Location: index.php");
	exit();
}
?>