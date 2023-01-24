<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Admin Registration
	</title>
	<link rel="stylesheet" type="text/css"
					href="./assets/css/loginstyle.css">
</head>

<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Enter Username</label>
			<input type="text" name="username"
				value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email"
				value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Enter Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn"
								name="reg_user">
				Register
			</button>
		</div>
		


<p>
			Already having an account?
			<a href="login.php">
				Login Here!
			</a>
		</p>



	</form>
</body>
</html>
