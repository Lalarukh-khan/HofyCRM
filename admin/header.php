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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <style>
        .category_types a{
            padding-left: 10px;
            padding-top: 8px;
            color: grey;
        }
        .category_types a:hover{
            color: #000;
        }
        .category_typesbb{
            padding-top: 12px;
        }
        ::-webkit-scrollbar {
  width: 7px;
}

/* Track */
::-webkit-scrollbar-track {
  background: transparent; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #c9c9c7; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #a8a8a7; 
}
    </style>

</head>

<body>
<div id="sidebar" class="active">
            <div class="sidebar-wrapper active" style="background-color: rgba(24,3,73,255);">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                        <a class="sidebar-brand brand-logo" href="index.php" style="color: #fff; font-size: 25px; font-weight: bold;">ELITE</a>
                        </div>
                        <!-- <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item">
                            <a href="catalog.php" class='sidebar-link'>
                                <i class="bi bi-file-earmark-text"></i>
                                <span>Catalogue</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="catalog.php" class='sidebar-link'>
                                <i class="bi bi-people"></i>
                                <span>Team members</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="catalog.php" class='sidebar-link'>
                                <i class="bi bi-box-seam"></i>
                                <span>Orders</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="catalog.php" class='sidebar-link'>
                                <i class="bi bi-chat-left"></i>
                                <span>Requests</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="catalog.php" class='sidebar-link'>
                                <i class="bi bi-gem"></i>
                                <span>DSE Results</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <span style="font-size:13px; color:grey; font-weight:900; letter-spacing: 1px;">TEAMS</span>
                        </li>
                        <li class="sidebar-item">
                            <a href="c_product.php" class='sidebar-link'>
                                <div style=" background-color: rgb(235, 59, 90); vertical-align: middle;
                                width: 8px; height: 8px;border-radius: 50%;flex: 0 0 8px;display: inline-block;"></div>
                                <span>Product</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="c_engineering.php" class='sidebar-link'>
                            <div style=" background-color: rgb(247, 183, 49); vertical-align: middle;
                            width: 8px; height: 8px;border-radius: 50%;flex: 0 0 8px;display: inline-block;"></div>
                                <span>Engineering</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="c_sales.php" class='sidebar-link'>
                            <div style=" background-color: rgb(32, 191, 107); vertical-align: middle;
                            width: 8px; height: 8px;border-radius: 50%;flex: 0 0 8px;display: inline-block;"></div>
                                <span>Sales</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="c_customersupport.php" class='sidebar-link'>
                                <div style=" background-color: rgb(178, 190, 195); vertical-align: middle;
                            width: 8px; height: 8px;border-radius: 50%;flex: 0 0 8px;display: inline-block;"></div>
                                <span>Customer Support</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="c_operations.php" class='sidebar-link'>
                                <div style=" background-color: rgb(250, 130, 49); vertical-align: middle;
                            width: 8px; height: 8px;border-radius: 50%;flex: 0 0 8px;display: inline-block;"></div>
                                <span>Operations</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="c_legalfinance.php" class='sidebar-link'>
                                <div style=" background-color: rgb(243, 86, 159); vertical-align: middle;
                            width: 8px; height: 8px;border-radius: 50%;flex: 0 0 8px;display: inline-block;"></div>
                                <span>Legal & Finance</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="index.php?logout='1'" class='sidebar-link'>
                            <i class="bi bi-box-arrow-up-right"></i>
                                <span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>