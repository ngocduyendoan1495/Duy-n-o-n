<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<style>
		body {
			background-color: pink;
			margin: auto;
			padding: 20px auto;
		}
		.header {
			width: 30%;
			margin: 50px auto 0px;
			color: white;
			background: purple;
			text-align: center;
			border-bottom: none;
			padding: 20px;
		}
		form {
			width: 30%;
			margin: 0px auto;
			padding: 20px;
			border: 1px solid pink;
			background: plum;
		}
		.btn {
			padding: 10px;
			font-size: 15px;
			color: black;
			background: pink;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Register your Acccount</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<br>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<br>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<br>
		<div class="input-group">
			<label>Password Confirmation</label>
			<input type="password" name="password_2">
		</div>
		<br>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign In</a>
		</p>
	</form>
</body>
</html>