<?php
include("header.php"); 

    $emp_email = $_SESSION['emp_email']; 
    $db = mysqli_connect("localhost", "imranahmedit_elite", "Welcome1#ELITE", "imranahmedit_elite");
    $tsql =  
    "SELECT *  
    FROM employees
    WHERE emp_email = '$emp_email'"; 
    $result = mysqli_query($db, $tsql); 
 
    while($row=mysqli_fetch_array($result)) 
    { 
        $uid = $row['emp_id'];
        $uName = $row['emp_company']; 
    } 
    // echo 'Welcome'.$uName; 
?>
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div id="app">
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Upload Product</h3>
            <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" method="post" action="productrequest.php" enctype="multipart/form-data" >
                                        <input type="hidden" value="<?php echo $uid?>" name="uid">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Product Name</label>
                                                        <input type="text" id="first-name-column" class="form-control"
                                                            placeholder="Product Name" name="pname">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="last-name-column">Product Image</label>
                                                        <input type="file" id="last-name-column" class="form-control"
                                                             name="image">
                                                             <!-- <input type="file" name="image"> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <!-- <label for="city-column">Email</label> -->
                                                        <input value="<?php echo $emp_email?>" readonly type="hidden" 
                                                        id="city-column" class="form-control" name="uemail">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <!-- <label for="city-column">Company Name</label> -->
                                                        <input value="<?php echo $uName?>" readonly type="hidden" 
                                                        id="city-column" class="form-control" name="cname">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                <label for="category">Category</label>
                                                <select class="form-select" id="category">
                                                    <option value=""> Select Category</option>
                                                    <?php

                                                    $query1 = "SELECT * FROM `product_category`";
                                                    // $query = mysqli_query($con, $qr);
                                                    $result1 = $db->query($query1);
                                                    if ($result1->num_rows > 0) {
                                                        while ($row1 = mysqli_fetch_assoc($result1)) {

                                                    ?>
                                                            <option value="<?php echo $row1['id']; ?>"><?php echo $row1['category']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>

                                                </select>
                                                 </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                    <label for="category"> Category Type</label>
                                                    <select class="form-select" id="type" name="type">
                                                        <option value="">Select category Type</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                <label for="catalogue">Catalogue</label>
                                                <select class="form-select" id="catalogue" name="catalogue">
                                                    <option value=""> Select Catalogue</option>
                                                    <?php

                                                    $query2 = "SELECT * FROM `product_catalogue`";
                                                    // $query = mysqli_query($con, $qr);
                                                    $result2 = $db->query($query2);
                                                    if ($result2->num_rows > 0) {
                                                        while ($row2 = mysqli_fetch_assoc($result2)) {

                                                    ?>
                                                            <option value="<?php echo $row2['id']; ?>"><?php echo $row2['names']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>

                                                </select>
                                                 </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="city-column">Price</label>
                                                        <input id="city-column" class="form-control" name="price">
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                    <label for="city-column">Product Description</label> 
                                                        <textarea rows="6" id="city-column" class="form-control" name="description"></textarea>
                                                    </div>
                                                </div>
    <script>
        $(document).ready(function() {
            $("#category").on('change', function() {
                var categoryid = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "getcategorytype.php",
                    data: {
                        id: categoryid
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#type").html(data);
                    }
                });
            });
        });
    </script>
                                                <p><?php if(isset($_SESSION['success'])){
                                                    echo $_SESSION['success'];
                                                    unset($_SESSION['success']);
                                                } ?></p>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" name="order_request"
                                                        class="btn btn-primary me-1 mb-1">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic multiple Column Form section end -->
                        </div>
                    </div>
                </section>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>
</html>
