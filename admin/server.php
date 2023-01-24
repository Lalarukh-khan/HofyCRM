<?php

// Starting the session, necessary
// for using session variables
session_start();

// Declaring and hoisting the variables
$username = "";
$email = "";
$errors = array();
$_SESSION['success'] = "";

// DBMS connection code -> hostname,
// username, password, database name
$db = mysqli_connect("localhost", "imranahmedit_elite", "Welcome1#ELITE", "imranahmedit_elite");

// Registration code
if (isset($_POST['reg_user'])) {

	// Receiving the values entered and storing
	// in the variables
	// Data sanitization is done to prevent
	// SQL injections
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	// Ensuring that the user has not left any input field blank
	// error messages will be displayed for every blank input
	if (empty($username)) { array_push($errors, "Username is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password)) { array_push($errors, "Password is required"); }

	// If the form is error free, then register the user
	if (count($errors) == 0) {
		
		// Password encryption to increase data security
		$password = md5($password);
		
		// Inserting data into table
		$query = "INSERT INTO admin (username, email, password)
				VALUES('$username', '$email', '$password')";
		
		mysqli_query($db, $query);

		// Storing username of the logged in user,
		// in the session variable
		$_SESSION['username'] = $username;
		
		// Welcome message
		$_SESSION['success'] = "You have logged in";
		
		// Page on which the user will be
		// redirected after logging in
		header('location: index.php');
	}
}

// User login
if (isset($_POST['login_user'])) {
	
	// Data sanitization to prevent SQL injection
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	// Error message if the input field is left blank
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// Checking for the errors
	if (count($errors) == 0) {
		
		// Password matching
		$password = md5($password);
		$query = "SELECT * FROM admin WHERE username=
				'$username' AND password='$password'";
		$results = mysqli_query($db, $query);

		// $results = 1 means that one user with the
		// entered username exists
		if (mysqli_num_rows($results) == 1) {
			
			// Storing username in session variable
			$_SESSION['username'] = $username;
			
			// Welcome message
			$_SESSION['success'] = "You have logged in!";
			// Page on which the user is sent
			// to after logging in
			header('location: index.php');
		}
		else {
			
			// If the username and password doesn't match
			array_push($errors, "Username or password incorrect");
		}
		$lastactivity = mysqli_query($db, "UPDATE admin SET lastactivity=now() WHERE username='$username'");
	}
}

// Registration code
if (isset($_POST['reg_company'])) {

	// Receiving the values entered and storing
	// in the variables
	// Data sanitization is done to prevent
	// SQL injections
	$comp_name = mysqli_real_escape_string($db, $_POST['comp_name']);
	$comp_email = mysqli_real_escape_string($db, $_POST['comp_email']);
	$comp_phone = mysqli_real_escape_string($db, $_POST['comp_phone']);
	$comp_category = mysqli_real_escape_string($db, $_POST['comp_category']);
	$comp_membership = mysqli_real_escape_string($db, $_POST['comp_membership']);
	$comp_password = mysqli_real_escape_string($db, $_POST['comp_password']);
	$comp_address1 = mysqli_real_escape_string($db, $_POST['comp_address1']);
	$comp_state = mysqli_real_escape_string($db, $_POST['comp_state']);
	$comp_address2 = mysqli_real_escape_string($db, $_POST['comp_address2']);
	$comp_postcode = mysqli_real_escape_string($db, $_POST['comp_postcode']);
	$comp_city = mysqli_real_escape_string($db, $_POST['comp_city']);
	$comp_country = mysqli_real_escape_string($db, $_POST['comp_country']);

	// Ensuring that the user has not left any input field blank
	// error messages will be displayed for every blank input
	if (empty($comp_name)) { array_push($errors, "Company is required"); }
	if (empty($comp_email)) { array_push($errors, "Email is required"); }
	if (empty($comp_phone)) { array_push($errors, "Phone Number is required"); }
	if (empty($comp_password)) { array_push($errors, "Password is required"); }

	// If the form is error free, then register the user
	if (count($errors) == 0) {
		
		
		// Inserting data into table
		$query = "INSERT INTO companies (comp_name, comp_email, comp_phone, comp_category, comp_membership, comp_password,
		 comp_address1, comp_state, comp_address2, comp_postcode, comp_city, comp_country)
				VALUES('$comp_name', '$comp_email', '$comp_phone', '$comp_category', '$comp_membership','$comp_password', 
				'$comp_address1', '$comp_state', '$comp_address2', '$comp_postcode', '$comp_city', '$comp_country')";
		
		mysqli_query($db, $query);

		// Storing username of the logged in user,
		// in the session variable
		$_SESSION['username'] = $username;
		
		// Welcome message
		$_SESSION['success'] = "Company has been registered";
		
		// Page on which the user will be
		// redirected after logging in
		header('location: registercompany.php');
	}
}

// Register Employee
if (isset($_POST['reg_employee'])) {

	// Receiving the values entered and storing
	// in the variables
	// Data sanitization is done to prevent
	// SQL injections
	$emp_name = mysqli_real_escape_string($db, $_POST['emp_name']);
	$emp_email = mysqli_real_escape_string($db, $_POST['emp_email']);
	$emp_phone = mysqli_real_escape_string($db, $_POST['emp_phone']);
	$emp_category = mysqli_real_escape_string($db, $_POST['emp_category']);
	$emp_password = mysqli_real_escape_string($db, $_POST['emp_password']);
	$emp_company = mysqli_real_escape_string($db, $_POST['emp_company']);
	$emp_address = mysqli_real_escape_string($db, $_POST['emp_address']);
	$emp_state = mysqli_real_escape_string($db, $_POST['emp_state']);
	$emp_city = mysqli_real_escape_string($db, $_POST['emp_city']);
	$emp_country = mysqli_real_escape_string($db, $_POST['emp_country']);

	// Ensuring that the user has not left any input field blank
	// error messages will be displayed for every blank input
	if (empty($emp_name)) { array_push($errors, "Company is required"); }
	if (empty($emp_email)) { array_push($errors, "Email is required"); }
	if (empty($emp_phone)) { array_push($errors, "Phone Number is required"); }
	if (empty($emp_password)) { array_push($errors, "Password is required"); }

	// If the form is error free, then register the user
	if (count($errors) == 0) {
		
		
		// Inserting data into table
		$query = "INSERT INTO employees (emp_name, emp_email, emp_phone, emp_category, emp_password, emp_company,
		 emp_address, emp_state, emp_city, emp_country)
				VALUES('$emp_name', '$emp_email', '$emp_phone', '$emp_category', '$emp_password', '$emp_company', 
				'$emp_address', '$emp_state', '$emp_city', '$emp_country')";
		
		mysqli_query($db, $query);

		// Storing username of the logged in user,
		// in the session variable
		$_SESSION['username'] = $username;
		
		// Welcome message
		$_SESSION['success'] = "Employee has been registered";
		
		// Page on which the user will be
		// redirected after logging in
		header('location: registeremployee.php');
	}
	
	$member_since = mysqli_query($db, "UPDATE employees SET member_since=now() WHERE emp_email='$emp_email'");
}
?>