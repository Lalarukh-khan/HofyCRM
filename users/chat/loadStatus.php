<?php 
include "config.php";
session_start();

$sql = "SELECT * FROM chat_users WHERE type='admin'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	
	$row = mysqli_fetch_assoc($result);

	$status = $row['status'];

	if ($status == 'online') {
		
		echo 1;
	}
}