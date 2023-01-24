<?php 
// Starting the session, to use and
// store data in session variable
session_start();

// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['emp_email'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: login.php');
}

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['emp_email']);
	header("location: login.php");
}
?>

<h1>
    Hello <?php echo $_SESSION['emp_email']; ?>! This is User Page
</h1>
<p><a href="./chat/index.php">Chat with Team!</a></p>
<a href="index.php?logout='1'">Log out</a>