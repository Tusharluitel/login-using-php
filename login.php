<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<div class="login">
		<h1>Login</h1>
		<!-- Creation of form -->
		<div class="login-body">

			<form action="login_process.php" method="POST">
				<div class="login-field">
					<input type="text" class="login-setup" name="username" required>
					<span></span>
					<label>Username</label>
				</div>
				<div class="login-field">
					<input type="password" class="login-setup" name="password" required>
					<span></span>
					<label>Password</label>
				</div>
				<div class="password">Forgot password?</div>
				<!-- 'name =' is used to send data to the super global POST  -->
				<input type="submit" value="Login" name="submit" class="login-submit">
				<div class="signup">
					Not a member? <a href="#">Sign in</a>
				</div>
			</form>
		</div>
	</div>
</body>

</html>