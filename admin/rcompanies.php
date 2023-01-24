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
$query = "SELECT * FROM companies ORDER BY comp_id DESC";
$result = mysqli_query($db, $query);
?>
<script src="assets/js/jquery.tabledit.min.js"></script>
    <!-- partial -->
    <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Registered Companies</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Registered</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Companies</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Registered Companies</h4>
                    <p class="card-description"> Add Company <code><a href="registercompany.php" style="text-decoration: none;
                    border: 1px solid grey; padding: 8px 4px; color: #fc424a;">Register New Company</a></code>
                    </p><br>
                      <div class="table-responsive">    
                        <table id="editable_table" class="table table-bordered table-striped" style="border-top: 1px solid grey;">
                          <thead>
                          <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Category</th>
                          <th>Membership</th>
                          <th>Password</th>
                          <th>Address-1</th>
                          <th>Address-2</th>
                          <th>State</th>
                          <th>PostCode</th>
                          <th>City</th>
                          <th>Country</th>
                          <th class = "tabledit-toolbar-column">Action</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                          while($row = mysqli_fetch_array($result))
                          {
                          echo '
                          <tr>
                          <td>'.$row["comp_id"].'</td>
                          <td>'.$row["comp_name"].'</td>
                          <td>'.$row["comp_email"].'</td>
                          <td>'.$row["comp_phone"].'</td>
                          <td>'.$row["comp_category"].'</td>
                          <td>'.$row["comp_membership"].'</td>
                          <td>'.$row["comp_password"].'</td>
                          <td>'.$row["comp_address1"].'</td>
                          <td>'.$row["comp_address2"].'</td>
                          <td>'.$row["comp_state"].'</td>
                          <td>'.$row["comp_postcode"].'</td>
                          <td>'.$row["comp_city"].'</td>
                          <td>'.$row["comp_country"].'</td>
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
<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'pages/rcompanies/raction.php',
      columns:{
       identifier:[0, "comp_id"],
       editable:[[1, 'comp_name'], [2, 'comp_email'], [3, 'comp_phone'], [4, 'comp_category'], [5, 'comp_membership'], 
       [6, 'comp_password'], [7, 'comp_address1'], [8, 'comp_address2'], [9, 'comp_state'], [10, 'comp_postcode'], [11, 'comp_city'], 
       [12, 'comp_country']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
}); 
 </script>