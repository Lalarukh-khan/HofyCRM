<?php
	// include("header.php"); 
	session_start();
	$host="localhost";
	$username="root";
	$pass="";
	$db="elite";

	$conn=mysqli_connect($host,$username,$pass,$db);
	if(!$conn){
		die("Database connection error");
	}

	// insert query for register page
	if(isset($_POST['order_request']))
	{

	// Get image name
	$image = $_FILES['image']['name'];

	$uid=$_POST['uid'];
	$pname=$_POST['pname'];
	$type=$_POST['type'];
	$catalogue=$_POST['catalogue'];
	$price=$_POST['price'];
	$uemail=$_POST['uemail'];
	$cname=$_POST['cname'];
	$description=$_POST['description'];
	$status="Pending";

// image file directory
$target = "orderimgs/".basename($image);
	
	
	 $query="INSERT INTO `order_requests` (`id`,`userid`,`productname`,`productimage`,`type`,`catalogue`,`price`,`useremail`,`companyname`, `description`,`status`) VALUES ('','$uid','$pname','$image','$type','$catalogue','$price','$uemail','$cname', '$description', '$status')";
    $res=mysqli_query($conn,$query);
	if($res){
		$_SESSION['success']="Order Sent For Review Successfully!";
		header('Location:uploadproduct.php');
	}else{
		echo "Order not sent for review, please try again!";
	}

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		header('Location:uploadproduct.php');
	}else{
		echo "Failed to upload image!";
	}
    $applied_date = mysqli_query($conn, "UPDATE order_requests SET applied_date=now() WHERE productname='$pname'");
	}
	




?>