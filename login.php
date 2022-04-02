<?php
session_start();
include "db_conn.php";
// When the submit button is pressed
if (isset($_POST['username']) && isset($_POST['password'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username)) {
		header("Location: index.php?error=Username is required");
		exit();
	} else if (empty($password)) {
		header("Location: index.php?error=Password is required");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_name ='$username' AND password = '$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result)) {
			$row = mysqli_fetch_assoc($result);
			if ($row['user_name'] === $username && $row['password'] === $password) {
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['password'] = $row['password'];
				header("Location: ./home.php");
				exit();
				// echo "Hello";
			} else {
				header("Location: index.php?error=Incorrect username or password");
				exit();
			}
		} else {
			header("Location: index.php?error=Incorrect username or password");
			exit();
		}
	}
} else {
	header("Location: index.php");
	exit();
}
