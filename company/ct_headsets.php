<?php
include("header.php"); 
?>
<?php
$conn = mysqli_connect("localhost", "imranahmedit_elite", "Welcome1#ELITE", "imranahmedit_elite");
?>
<div id="app">
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Headsets</h3>
            </div>

            <section class="section">
                    <div class="row" id="basic-table">
                        <div class="col-12 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                <div class="form-group position-relative  mb-0 has-icon-left">
                                                <input type="text" class="form-control" placeholder="Search products">
                                                <div class="form-control-icon">
                                                    <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                        <use
                                                            xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#search" />
                                                    </svg>
                                                </div>
                                            </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4>Category</h4>
                                        <div>
                                            <ul style="list-style: none;">

                                                <li class="category_typesbb"><b>Devices</b></li>
                                                <li class="category_types"><a href="ct_laptops.php">Laptops</a></li>
                                                <li class="category_types"><a href="ct_mobiledev.php">Mobile devices</a></li>
                                                <li class="category_types"><a href="ct_desktops.php">Desktops</a></li>
                                                <li class="category_types"><a href="ct_tablets.php">Tablets</a></li>

                                                <li class="category_typesbb"><b>IT Peripherals</b></li>
                                                <li class="category_types"><a href="ct_monitors.php">Monitors</a></li>
                                                <li class="category_types"><a href="ct_dockingstations.php">Docking stations</a></li>
                                                <li class="category_types"><a href="ct_headsets.php">Headsets</a></li>
                                                <li class="category_types"><a href="ct_keyboards.php">Keyboards</a></li>
                                                <li class="category_types"><a href="ct_micetrackpads.php">Mice & Trackpads</a></li>
                                                <li class="category_types"><a href="ct_printers.php">Printers</a></li>
                                                <li class="category_types"><a href="ct_shredders.php">Shredders</a></li>
                                                <li class="category_types"><a href="ct_webcams.php">Webcams</a></li>
                                                <li class="category_types"><a href="ct_wifirange.php">WiFi range extenders</a></li>

                                                <li class="category_typesbb"><b>IT Accessories</b></li>
                                                <li class="category_types"><a href="ct_dongles.php">Dongles</a></li>
                                                <li class="category_types"><a href="ct_cables.php">Cables</a></li>
                                                <li class="category_types"><a href="ct_adapters.php">Adapters</a></li>
                                                <li class="category_types"><a href="ct_chargers.php">Chargers</a></li>

                                                <li class="category_typesbb"><b>Furniture</b></li>
                                                <li class="category_types"><a href="ct_desks.php">Desks</a></li>
                                                <li class="category_types"><a href="ct_chairs.php">Chairs</a></li>
                                                <li class="category_types"><a href="ct_deskrisers.php">Desk risers</a></li>

                                                <li class="category_typesbb"><b>Furniture Accessories</b></li>
                                                <li class="category_types"><a href="ct_standingmats.php">Standing mats</a></li>
                                                <li class="category_types"><a href="ct_laptopstands.php">Laptop stands</a></li>
                                                <li class="category_types"><a href="ct_footrest.php">Foot rests</a></li>
                                                <li class="category_types"><a href="ct_tlights.php">Task lights</a></li>
                                                <li class="category_types"><a href="ct_desktidies.php">Desk tidies</a></li>
                                                <li class="category_types"><a href="ct_monitorarms.php">Monitor arms</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-9">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text" style="visibility: hidden;">Using the most basic table up, here’s how
                                            <code>.table</code>-based tables look in Bootstrap. 
                                        </p>
                                        <!-- Table with outer spacing -->
                                        <div class="table-responsive">
                                            <table class="table table-lg">
                                                <tbody>
                                                    <!-- <tr>
                                                        <td class="text-bold-500">Michael Right</td>
                                                        <td>$15/hr</td>
                                                        <td class="text-bold-500">UI/UX</td>
                                                    </tr> -->
                                                    <?php 
                        $query="SELECT * FROM order_requests WHERE status='Approved' AND type='7'";
                            $res=mysqli_query($conn, $query);
                            $count=mysqli_num_rows($res);
                            if($count>0)
                            {
                            while($row=mysqli_fetch_array($res))
                            {
                        
                        ?>
                        <tr>
                        <td style="width:150px;"><?php echo "<img style='width:120px;height:80px;border-radius: 8px;
                        border:1px solid #6c757d; padding: 10px 10px;' src='../company/orderimgs/".$row['productimage']."' >"; ?> </td>
                        <td class="text-bold-500">
                            <div style="font-size: 18px;letter-spacing: 1px;color:#212529;"><?php echo $row['productname'];?></div>
                            <span style="color:grey;">By</span>
                            <span style="font-size: 14px;letter-spacing: 1px;color:#212529;"><?php echo $row['companyname'];?></span>
                        </td>
                        <td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
                        <td>
                            <div style="font-size: 16px;letter-spacing: 1px;color:#212529;">$<?php echo $row['price'];?></div>
                            <div style="font-size: 12px; font-weight: 400; color: grey; letter-spacing: 1px;">
                            36 months<br>(excl. taxes)
                            </div>
                        </td>
                        </tr>
                        <?php }}else{
                            echo "No Products Found!";
                            
                        } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Tables end -->
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>
</html>