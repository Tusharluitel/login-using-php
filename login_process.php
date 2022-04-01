<?php
// When the submit button is pressed
if (isset($_POST['submit'])) {

	$name = array("Tushar", "Luitel", "Class", "Internship", "Job", "Please", "Give", "Me");
	$minimum = 5;
	$maximum = 10;
	// Entered username and password stored in a variable
	$username = $_POST['username'];
	$password = $_POST['password'];


	if (strlen($username) < $minimum) {
		echo "Username has to be longer than 5";
	}

	if (strlen($username) > $maximum) {
		echo "Username cannot be more than 10 digits";
	}

	// // Check if the username is inside an array. in_array is a funtion
	if (!in_array($username, $name)) {
		echo "Sorry you are not allowed";
	} else {
		echo "Welcome " . $username;
	}
}
