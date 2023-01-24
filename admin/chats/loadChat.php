<?php
include "../../users/chat/config.php";
session_start();

$user_id = '';

if (isset($_COOKIE['reply'])) {
	
	$sql = "SELECT * FROM chat_users WHERE id='".$_COOKIE['reply']."'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		
		$row = mysqli_fetch_assoc($result);

		$user_id = $row['id'];	
		$user_name = $row['name'];
	}
	
	$sqlD = "SELECT * FROM messages ORDER BY mid DESC LIMIT 10";
	$resultD = mysqli_query($conn, $sqlD);
	while ($rowD = mysqli_fetch_assoc($resultD)) {
		
		if ($rowD['user_id'] == $user_id && $rowD['ref_id'] == $_SESSION['admin']) {
			
			echo '<div class="user-chat">
					<span>'.date("d-m-Y h:i", strtotime($rowD["time"]))." ".$user_name.' <img src="../../users/chat/img/user.png"></span>
					<p class="user">'.$rowD["message"].'</p>
				</div>';
		}
		if ($rowD['user_id'] == $_SESSION['admin'] && $rowD['ref_id'] == $user_id) {
			
			echo '<div class="admin-chat">
					<span><img src="../../users/chat/img/administrator.png"> Admin '.date("d-m-Y h:i", strtotime($rowD["time"])).'</span>
					<p class="admin">'.$rowD["message"].'</p>
				</div>';
		}
	}
}
