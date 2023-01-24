<?php
include "../../users/chat/config.php";
session_start();

if (isset($_SESSION['admin'])) {
	header("Location: index.php");
}

if (isset($_POST['login'])) {

	$name = $_POST['name'];
	$password = $_POST['password'];
	
	$adminSelect = "SELECT * FROM chat_users WHERE name='".$name."' AND type='".$password."'";
	$adminResult = mysqli_query($conn, $adminSelect);
	if ($adminResult) {
		
		$adminRow = mysqli_fetch_assoc($adminResult);
		
		$_SESSION['admin'] = $adminRow['id'];

		$update = "UPDATE chat_users SET status='online' WHERE id='".$_SESSION['admin']."'";
		$result = mysqli_query($conn, $update);
		if ($result) {

			header("Location: index.php");
		}
	}
}

?>
<!DOCTYPE html>

<html lang="en">

 	<head>
 		<!-- Meta Tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Site Title -->
 		<title>Live Chat Application using PHP Jquery AjaxPT</title>
 		<!-- External Style Sheet -->
 		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
		<style type="text/css">
			body{
				background-color: #ecf0f1;
			}
			.wrapper{
				width: 600px;
				height: 400px;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				text-align: center;
			}
			.box{
				width: 300px;
				position: absolute;
				top: 20%;
				left: 50%;
				transform: translate(-50%, 0);
				padding: 30px 15px;
				box-shadow: 0px 0px 5px rgba(189,195,199 ,1);
			}
			h4{
				font-size: 20px;
				text-shadow: 1px 1px 15px rgba(236,240,241 ,0.8), -1px -1px 3px rgba(127,140,141 ,0.8);
			}
		</style>
 	</head>

<body>
	<section class="wrapper">
		<h4>LOGIN</h4>
		<div class="box">
			<form action="" method="POST">
				<div class="input-group">
				  <input type="name" class="form-control" name="name" placeholder="User Name">
				</div>
				<br>
				<div class="input-group">
				  <input type="password" class="form-control" name="password" placeholder="Password">
				</div>
				<br>
				<div class="input-group">
				  <input type="submit" class="btn btn-primary form-control" name="login" value="Login">
				</div>
			</form>
		</div>
	</section> <!-- /End of wrapper section -->
</body>

</html>