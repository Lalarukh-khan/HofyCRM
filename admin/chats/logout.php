<?php 
include "../../users/chat/config.php";
session_start();

if (isset($_SESSION['admin'])) {

	if (session_destroy()) {

		$update = "UPDATE chat_users SET status='offline' WHERE id='".$_SESSION['admin']."'";
		$result = mysqli_query($conn, $update);
		if ($result) {
		
			header("Location: index.php");
		}
	}
}