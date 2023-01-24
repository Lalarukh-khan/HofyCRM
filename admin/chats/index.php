<?php
include "../../users/chat/config.php";
session_start();

if (!isset($_SESSION['admin'])) {
	header("Location: login.php");
}

if (isset($_GET['reply'])) {
	setcookie('reply', $_GET['reply']);

	$sqlM = "UPDATE messages SET status='read' WHERE user_id='".$_GET['reply']."'";
	$resultM = mysqli_query($conn, $sqlM);
}else{
	setcookie('reply', '');
}

?>
<!DOCTYPE html>
<html lang="en">

 	<head>
 		<!-- Meta Tags -->
		<meta charset="UTF-8">
		<meta name="author" content="Kamran Mubarik">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Site Title -->
 		<title>Live Chat Application using PHP Jquery Ajax</title>
 		<!-- External Style Sheet -->
		<link rel="stylesheet" type="text/css" href="../../users/chat/css/admin.css">

 	</head>
<body>

	<div class="wrapper">
		
		<div class="user">
			<table width="300px" border="1">
				<thead>
					<tr>
						<th colspan="3">NEW MESSAGES</th>
					</tr>
					<tr>
						<th colspan="3"><a href="allchats.php" style="color: #478dfc;">All Chats</a></th>
					</tr>
					<tr>
						<th>User Name</th>
						<th>Status</th>
						<th>Reply</th>
					</tr>
				</thead>
				<tbody id="loadUnread">
				</tbody>
			</table>
		</div>
		<div class="chat">
			<div class="chatHeader">
				<h2>LIVE CHAT <img src="../../users/chat/img/chat.png"></h2>
				<span><a href="logout.php">Logout</a></span>
			</div>

			<div id="loadChat"></div>

			<div class="chatForm">
				<form id="chatFrom">
					<input type="hidden" name="reply" id="user_id" value="<?php echo $_GET['reply'];?>">
					<input type="hidden" name="admin_id" id="" value="<?php echo $_SESSION['admin'];?>">
					<div class="form-group">
						<label>Message</label>
						<textarea name="message" id="chatMessage" rows="1"></textarea>
						<input type="submit" name="send" id="send" value="Send">
					</div>
				</form>
			</div>
		</div> <!-- End of chat -->

	</div> <!-- End of Wrapper -->

</body>

<script type="text/javascript" src="../../users/chat/js/jquery.min.3-4-1.js"></script>
<script type="text/javascript" src="../../users/chat/js/custom.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

	function loadUnread(){

		$.ajax({
			url: 'loadUnread.php',
			method: 'GET',
			data: 'html',
			success: function(data){

				$('#loadUnread').html(data);
			}
		});
	}
	loadUnread();

	setInterval(function(){ loadUnread(); }, 5000);

});
</script>
</html>