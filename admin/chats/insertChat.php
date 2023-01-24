<?php
include "../../users/chat/config.php";
session_start();

$user_id = $_POST['reply'];
$admin_id = $_POST['admin_id'];
$message = $_POST['message'];

$userInsert = "INSERT INTO messages (message,user_id,ref_id) VALUES ('".$message."', '".$admin_id."', '".$user_id."')";
$userInsertResult = mysqli_query($conn, $userInsert);
if ($userInsertResult) {

	echo 1;
}

