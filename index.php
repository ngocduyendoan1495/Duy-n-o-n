<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome Message</title>
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
		h3 {
			text-align: center;
		}
		p {
			font-size: 20px;
			text-align: center;
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
		<h2>Homepage</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p>Please update your profile !</p>
			<form method="post" action="">
				<div class="input-group">
					<label>Full name</label>
					<input type="text" name="fullname" value="">
				</div>
				<br>
				<div class="input-group">
					<label>Date of birth</label>
					<input type="text" name="birthday" value="">
				</div>
				<br>
				<input type="submit" class="btn" name="update" value="Update your profile"></input>
			</form>
			<?php
				if(isset($_POST['submit']))	{
					$fullname = $_POST['fullname'];
					$birthday = $_POST['birthday'];
				header('location:update.php');
				}
			?>
			<p><a href="index.php?logout='1'" style="color: red;">Log out</a></p>
		<?php endif ?>
	</div>
		
</body>
</html>
