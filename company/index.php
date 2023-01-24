<?php
include("header.php"); 
?>
<?php
// $conn = mysqli_connect("localhost", "imranahmedit_elite", "Welcome1#ELITE", "imranahmedit_elite");
?>
<div id="app">

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3 style="display: inline-block;">Welcome to Elite</h3>
                <span style="text-align: center; float: right;display: inline-block;">
                    <a href="team-members.php" class="headerbuttons">
                        <i class="bi bi-person" style="padding-top:5px; padding-right: 10px;"></i> 
                        Add Team Member</a>
                    <a href="team-members.php" class="headerbuttons btnmarginheader">
                        <i class="bi bi-box-seam" style="padding-top:5px; padding-right: 10px;"></i> 
                    New Order</a>
                </span>
            </div>
                <section id="basic-modals">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header" style="border-bottom: 1px solid #e8ebe9;">
                                    <br>
                                    <h4 class="card-title" style="display: inline-block;">Team</h4>
                                    <span style="text-align: center; float: right;display: inline-block;">
                                <a href="team-members.php" style="font-size: 14px;">
                                     View Team Members
                                <i class="bi bi-chevron-right" style="padding-top:5px; padding-right: 10px;font-size: 11px;"></i></a>
                                </span>
                                </div>
                                <div class="card-body">
                                    <br>
                            <div style=" background-color: rgb(32, 191, 107); vertical-align: middle;
                            width: 6px; height:  6px;border-radius: 50%;flex: 0 0 8px;display: inline-block;"></div>
                                <span style="font-weight: bold; color: #000;">Active</span>
                                    <p>active team members</p>
                                    
                                    <hr>
                                    
                            <div style="background-color: rgb(178, 190, 195); vertical-align: middle;
                            width: 6px; height:  6px;border-radius: 50%;flex: 0 0 8px;display: inline-block;"></div>
                                <span style="font-weight: bold; color: #000;">Pending</span>
                                    <p>team members pending signup</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header" style="border-bottom: 1px solid #e8ebe9;">
                                    <br>
                                    <h4 class="card-title" style="display: inline-block;">DSE</h4>
                                    <span style="text-align: center; float: right;display: inline-block;">
                                <a href="#" style="font-size: 14px;">
                                     View DSE Results
                                <i class="bi bi-chevron-right" style="padding-top:5px; padding-right: 10px;font-size: 11px;"></i></a>
                                </span>
                                </div>
                                <div class="card-body">
                                    <br>
                            <div style=" background-color: rgb(32, 191, 107); vertical-align: middle;
                            width: 6px; height:  6px;border-radius: 50%;flex: 0 0 8px;display: inline-block;"></div>
                                <span style="font-weight: bold; color: #000;">Completed</span>
                                    <p>team members have completed DSE assessments</p>
                                    
                                    <hr>
                                    
                            <div style="background-color: rgb(178, 190, 195); vertical-align: middle;
                            width: 6px; height:  6px;border-radius: 50%;flex: 0 0 8px;display: inline-block;"></div>
                                <span style="font-weight: bold; color: #000;">Outstanding</span>
                                    <p>team members yet to complete DSE assessments</p>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header" style="border-bottom: 1px solid #e8ebe9;">
                                    <br>
                                    <h4 class="card-title" style="display: inline-block;">Orders</h4>
                                    <span style="text-align: center; float: right;display: inline-block;">
                                <a href="team-members.php" style="font-size: 14px;">
                                     View Orders
                                <i class="bi bi-chevron-right" style="padding-top:5px; padding-right: 10px;font-size: 11px;"></i></a>
                                </span>
                                </div>
                                <div class="card-body">
                                    <br>
                            <div style=" background-color: rgb(32, 191, 107); vertical-align: middle;
                            width: 6px; height:  6px;border-radius: 50%;flex: 0 0 8px;display: inline-block;"></div>
                                <span style="font-weight: bold; color: #000;">Active</span>
                                    <p>active products</p>
                                    
                                    <hr>
                                    
                            <div style="background-color: rgb(250, 130, 49); vertical-align: middle;
                            width: 6px; height:  6px;border-radius: 50%;flex: 0 0 8px;display: inline-block;"></div>
                                <span style="font-weight: bold; color: #000;">Being Fulfilled</span>
                                    <p>products being fulfilled</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header" style="border-bottom: 1px solid #e8ebe9;">
                                    <br>
                                    <h4 class="card-title" style="display: inline-block;">Webstore</h4>
                                    <span style="text-align: center; float: right;display: inline-block;">
                                <a href="#" style="font-size: 14px;">
                                     Go To Webstore
                                <i class="bi bi-chevron-right" style="padding-top:5px; padding-right: 10px;font-size: 11px;"></i></a>
                                </span>
                                </div>
                                <div class="card-body">
                                    <br>
                            <div style=" background-color: rgb(32, 191, 107); vertical-align: middle;
                            width: 6px; height:  6px;border-radius: 50%;flex: 0 0 8px;display: inline-block;"></div>
                                <span style="font-weight: bold; color: #000;">Products In Appreoved List</span>
                                    <p>products in your approved list</p>
                                </div>
                            </div>
                            
                            
                            <div class="card">
                                <div class="card-header" style="border-bottom: 1px solid #e8ebe9;">
                                    <br>
                                    <h4 class="card-title" style="display: inline-block;">Requests</h4>
                                    <span style="text-align: center; float: right;display: inline-block;">
                                <a href="#" style="font-size: 14px;">
                                     View Requests
                                <i class="bi bi-chevron-right" style="padding-top:5px; padding-right: 10px;font-size: 11px;"></i></a>
                                </span>
                                </div>
                                <div class="card-body">
                                    <br>
                            <div style="background-color: rgb(178, 190, 195); vertical-align: middle;
                            width: 6px; height:  6px;border-radius: 50%;flex: 0 0 8px;display: inline-block;"></div>
                                <span style="font-weight: bold; color: #000;">Pending Approval</span>
                                    <p>products pending approval</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Modals end -->
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>
</html>