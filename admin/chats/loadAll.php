<?php 
include "../../users/chat/config.php";

$sql = "SELECT DISTINCT user_id FROM messages";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {

	$sqlU = "SELECT * FROM chat_users WHERE id ='".$row['user_id']."' AND NOT type='admin'";
	$resultU = mysqli_query($conn, $sqlU);
	if ($rowU = mysqli_fetch_assoc($resultU)) {
		
		echo'<tr>
				<td>'.ucwords($rowU['name']).'</td>
				<td>'.ucwords($rowU['email']).'</td>
				<td><a href="allchats.php?reply='.$rowU["id"].'" style="color:#fff;">Chat</a></td>
			</tr>';
	}
	else{
		echo "No New Message!";
	}
}