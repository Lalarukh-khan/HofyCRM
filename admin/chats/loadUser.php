<?php 
include "../../users/chat/config.php";
session_start();

$userSession = $_SESSION['id'];

$userSelect = "SELECT * FROM chat_users WHERE id = '".$userSession."' AND type='admin'";
$userResult = mysqli_query($conn, $userSelect);
if ($userResult) {
	
	$rowSelect = mysqli_fetch_assoc($userResult);

	setcookie("name", $rowSelect['name']);
	setcookie("status", $rowSelect['status']);

	if ($rowSelect) {
		echo '<input type="hidden" name="id" value="'.$rowSelect['id'].'">';
	}
}