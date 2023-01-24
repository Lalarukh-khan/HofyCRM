<?php
session_start();
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<?php
include("header.php"); 
?>
<?php
  // Connect to database 
  $con = mysqli_connect("localhost","root","","elite");
  $sql = "SELECT * FROM `companies`";
  $all_categories = mysqli_query($con,$sql);

  $emp_results = mysqli_query($con, "SELECT * FROM employees"); 
?>
<?php
$db = mysqli_connect("localhost", "imranahmedit_elite", "Welcome1#ELITE", "imranahmedit_elite");
$result = mysqli_query($db, "SELECT * FROM employees ORDER BY emp_id DESC");
?>
<script src="assets/js/jquery.tabledit.min.js"></script>
    <!-- partial -->
    <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Registered Employees</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Registered</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Employees</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">View Registered Employees</h4>
                    <p class="card-description"> View <code><a href="allemployees.php" style="text-decoration: none;
                    border: 1px solid grey; padding: 8px 4px; color: #fc424a;">All Employees</a></code>
                    </p><br>
                    <form method="POST">
                        <div class="row">
                                <div class="col-md-2">
                                    <label>Select a Company </label>
                                </div>
                                <div class="col-md-8">
                                <select name="str" class="form-control" >
                                    <option value="Select">Select</option>
                                        <?php 
                                            // use a while loop to fetch data 
                                            // from the $all_categories variable 
                                            // and individually display as an option
                                            while ($category = mysqli_fetch_array(
                                                    $all_categories,MYSQLI_ASSOC)):; 
                                        ?>
                                            <option value="<?php echo $category["comp_name"];
                                                // The value we usually set is the primary key
                                            ?>">
                                                <?php echo $category["comp_name"];
                                                    // To show the category name to the user
                                                ?>
                                            </option>
                                        <?php 
                                            endwhile; 
                                            // While loop must be terminated
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" name="submit" value="Search"  class="btn btn-outline-success btn-fw">
                                </div>
                        </div>
                        <br>
                        <br>
                    </form>
                    <div>
                    <?php
                     $new_con = mysqli_connect("localhost","root","","elite");
                        if (isset($_POST['submit'])){
                        $str=mysqli_real_escape_string($new_con,$_POST['str']);
                        $new_sql="select * from employees where emp_company like '$str'";
                        $res=mysqli_query($new_con,$new_sql);
                        if (mysqli_num_rows($res)>0) {
                            echo "<h4 style='text-align: center;'>Employees of this Company are:</h4>";
                            while ($row=mysqli_fetch_assoc($res)) {
                            echo "<div class='table-responsive'>
                                <table id='editable_table' class='table table-bordered table-striped' style='border-top: 1px solid grey;'>
                                <thead>
                                <tr>
                                <th>ID</th>
                                <th>Employee Name</th>
                                <th>Employee Email</th>
                                <th>Employee Phone</th>
                                <th>Employee Role</th>
                                <th>Employee Password</th>
                                <th>Employee Company</th>
                                <th>Employee Address</th>
                                <th>Employee State</th>
                                <th>Employee City</th>
                                <th>Employee Country</th>
                                </tr>
                                </thead>
                                <tbody>";
                        echo "<tr>
                                <td>".$row['emp_id']."</td>
                                <td>".$row['emp_name']."</td>
                                <td>".$row['emp_email']."</td>
                                <td>".$row['emp_phone']."</td>
                                <td>".$row['emp_category']."</td>
                                <td>".$row['emp_password']."</td>
                                <td>".$row['emp_company']."</td>
                                <td>".$row['emp_address']."</td>
                                <td>".$row['emp_state']."</td>
                                <td>".$row['emp_city']."</td>
                                <td>".$row['emp_country']."</td>
                                </tr>
                                </tbody>
                                </table>
                            </div>
                        ";
                    echo "<br/>";
                            }
                        }
                        else{
                            echo "No Data Found!";
                        }
                        }
                ?>
                </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
<?php 
include("footer.php")
?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  </body>
</html>