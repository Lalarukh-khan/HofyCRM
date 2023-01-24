<?php 
include "config.php";
session_start();

$user_id = $_POST['user_id'];
$message = $_POST['message'];

$sqlInsert = "INSERT INTO messages (message, user_id, ref_id, status) VALUES ('".$message."', '".$user_id."', '".$_SESSION['admin']."', 'unread')";
$resultInsert = mysqli_query($conn, $sqlInsert);
if ($resultInsert) {
	echo 1;
}