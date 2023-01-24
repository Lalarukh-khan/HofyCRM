<?php 
include "../../users/chat/config.php";

$sql = "SELECT DISTINCT user_id FROM messages WHERE status='unread'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {

	$sqlU = "SELECT * FROM chat_users WHERE id ='".$row['user_id']."' AND NOT type='admin'";
	$resultU = mysqli_query($conn, $sqlU);
	if ($rowU = mysqli_fetch_assoc($resultU)) {
		
		echo'<tr>
				<td>'.ucwords($rowU['name']).'</td>
				<td><img src="../../users/chat/img/online.png"></td>
				<td><a href="index.php?reply='.$rowU["id"].'" style="color:#fff;">Reply</a></td>
			</tr>';
	}
	else{
		echo "No New Message!";
	}
}