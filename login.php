<?php
session_start();
// When the submit button is pressed
if (isset($_POST['username']) && isset($_POST['password'])) {
	$userList = array("tusharluitel");
	$userPassword = array("1234567");

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (in_array($username, $userList) && in_array($password, $userPassword)) {
		$_SESSION['user_name'] = $username;
		$_SESSION['password'] = $password;
		header("Location: ./home.php");
	} else {

		header("Location: incorrect.php?error=Incorrect username or password");
		$_SESSION['user_name'] = $username;
		$_SESSION['password'] = $password;
		exit();
	}
} else {
	header("Location: index.php");
	exit();
}
