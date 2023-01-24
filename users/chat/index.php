<?php 
include "config.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

 	<head>
 		<!-- Meta Tags -->
		<meta charset="UTF-8">
		<meta name="author" content="Lalarukh Khan">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Site Title -->
 		<title>Live Chat Application using PHP Jquery Ajax</title>
 		<!-- External Style Sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css" />

 	</head>
<body>

	<div class="wrapper" id="liveChat">

		<div class="chatHeader">
			<h2>LIVE CHAT <img src="img/chat.png"></h2>
			<span id="loadStatus"></span>
		</div>

		<div class="chatArea">
			<form id="registerForm">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" id="name" placeholder="Your Name">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" id="email" placeholder="Email Address" autocomplete="off">
				</div>
				<div class="form-group">
					<label></label>
					<input type="submit" name="start" id="start" value="Start Chat">
				</div>
			</form> <!-- End of Form -->

			<div class="chat" style="display: none;">
				<div id="loadChat"></div>

				<div class="chatFrom">
					<form id="chatFrom">
						<div id="user"></div>
						<div class="form-group">
							<label>Message</label>
							<textarea name="message" id="message" rows="1"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="send" id="send" value="Send">
						</div>
					</form>
				</div>
			</div>
		</div>
		
	</div>

</body>

<script type="text/javascript" src="js/jquery.min.3-4-1.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</html>