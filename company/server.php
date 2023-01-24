<?php 
session_start();
$errors = array();
$_SESSION['success'] = "";

// DBMS connection code -> hostname,
// username, password, database name
$db = mysqli_connect("localhost", "imranahmedit_elite", "Welcome1#ELITE", "imranahmedit_elite");

// User login
if (isset($_POST['login_user'])) {
	
	// Data sanitization to prevent SQL injection
	$emp_email = mysqli_real_escape_string($db, $_POST['emp_email']);
	$emp_password = mysqli_real_escape_string($db, $_POST['emp_password']);

	// Error message if the input field is left blank
	if (empty($emp_email)) {
		array_push($errors, "Email is required");
	}
	if (empty($emp_password)) {
		array_push($errors, "Password is required");
	}

	// Checking for the errors
	if (count($errors) == 0) {
		
		$query = "SELECT * FROM employees WHERE emp_email=
				'$emp_email' AND emp_password='$emp_password'";
		$results = mysqli_query($db, $query);

		// $results = 1 means that one user with the
		// entered username exists
		if (mysqli_num_rows($results) == 1) {
			
			// Storing username in session variable
			$_SESSION['emp_email'] = $emp_email;
			
			// Welcome message
			$_SESSION['success'] = "You have logged in!";
			// Page on which the user is sent
			// to after logging in
			header('location: index.php');
		}
		else {
			
			// If the username and password doesn't match
			array_push($errors, "Email or password incorrect");
		}
		$lastactivity = mysqli_query($db, "UPDATE employees SET lastactivity=now() WHERE emp_email='$emp_email'");
	}
}
?>