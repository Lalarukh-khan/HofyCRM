<?php 
include "config.php";
session_start();

if (isset($_COOKIE['user_id']) && isset($_SESSION['admin'])) {

	$sql1 = "SELECT * FROM messages ORDER BY mid DESC LIMIT 10";
	$result1 = mysqli_query($conn, $sql1);
	while ($row1 = mysqli_fetch_assoc($result1)) {
		
		if ($row1['user_id'] == $_COOKIE['user_id'] && $row1['ref_id'] == $_SESSION['admin']) {
			
			echo '<div class="user-chat">
					<span>'.date("d-m-Y h:i", strtotime($row1["time"]))." ".$_COOKIE["name"].' <img src="img/user.png"></span>
					<p class="user">'.$row1["message"].'</p>
				</div>';
		}
		if ($row1['user_id'] == $_SESSION['admin'] && $row1['ref_id'] == $_COOKIE['user_id']) {
			
			echo '<div class="admin-chat">
					<span><img src="img/administrator.png"> Admin '.date("d-m-Y h:i", strtotime($row1["time"])).'</span>
					<p class="admin">'.$row1["message"].'</p>
				</div>';
		}
	}
}else{
	echo "Chat Temporary Offline";
}
