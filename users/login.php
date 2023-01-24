<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>
	 User Login | Elite.com
	</title>
</head>
<body>
	<div class="header">
		<h2>Login Here!</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Enter Email</label>
			<input type="email" name="emp_email" >
		</div>
		<div class="input-group">
			<label>Enter Password</label>
			<input type="password" name="emp_password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn"
						name="login_user">
				Login
			</button>
		</div>
	</form>
</body>
</html>
