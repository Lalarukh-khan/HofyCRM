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
$db = mysqli_connect("localhost", "imranahmedit_elite", "Welcome1#ELITE", "imranahmedit_elite");
$query = "SELECT * FROM employees ORDER BY emp_id DESC";
$result = mysqli_query($db, $query);
?>
    <!-- partial -->
    <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Employee's Activity Status</h3>
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
                    <h4 class="card-title">All Registered Employees</h4>
                    <p class="card-description"> More Details <code><a href="allemployees.php" style="text-decoration: none;
                    border: 1px solid grey; padding: 8px 4px; color: #fc424a;">View All User's Here</a></code>
                    </p><br>
                    <form method="POST">
                        <div class="row">
                                <div class="col-md-3">
                                    <label>Search an Employee </label>
                                </div>
                                <div class="col-md-7">
                                <input type="email" name="str" class="form-control" style="border: 1px solid grey;" 
                                placeholder="Enter Employee's Email" Required>
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
                        $new_sql="select * from employees where emp_email like '$str'";
                        $res=mysqli_query($new_con,$new_sql);
                        if (mysqli_num_rows($res)>0) {
                            echo "<h4>Employee having this mail is:</h4>";
                            while ($row=mysqli_fetch_assoc($res)) {
                            echo "<div class='table-responsive'>
                                <table id='editable_table' class='table table-bordered table-striped' style='border-top: 1px solid grey;'>
                                <thead>
                                <tr>
                                <th>ID</th>
                                <th>Employee Name</th>
                                <th>Employee Email</th>
                                <th>Employee Phone</th>
                                <th>Employee Category</th>
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
                <h3>Activity Status</h3>
                      <div class="table-responsive">    
                        <table id="editable_table" class="table table-bordered table-striped" style="border-top: 1px solid grey;">
                          <thead>
                          <tr>
                          <th>ID</th>
                          <th>Employee Name</th>
                          <th>Employee Email</th>
                          <th>Employee Role</th>
                          <th>Employee Company</th>
                          <th>Last Seen(Date + Time)</th>
                          <th>Member Since</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                          while($row = mysqli_fetch_array($result))
                          {
                          echo '
                          <tr>
                          <td>'.$row["emp_id"].'</td>
                          <td>'.$row["emp_name"].'</td>
                          <td>'.$row["emp_email"].'</td>
                          <td>'.$row["emp_category"].'</td>
                          <td>'.$row["emp_company"].'</td>
                          <td>'.$row["lastactivity"].'</td>
                          <td>'.$row["member_since"].'</td>
                          </tr>
                          ';
                          }
                          ?>
                          </tbody>
                        </table>
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