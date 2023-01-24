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
$conn = mysqli_connect("localhost", "imranahmedit_elite", "Welcome1#ELITE", "imranahmedit_elite");
?>
    <!-- partial -->
    <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Product Order Requests</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Companies</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Orders</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Orders Request</h4>
                    <p class="card-description"> More Details <code><a href="orders.php" style="text-decoration: none;
                    border: 1px solid grey; padding: 8px 4px; color: #fc424a;">All Approved Order's</a></code>
                    </p>
                    <br>
                    <br>
                <h3>Order's Request</h3>
                <?php
if(isset($_POST['approved']))
{
	$status="Approved";
	$id=$_POST['id'];
	
	 $query="UPDATE `order_requests` set `status`='$status' where `id`='$id'";
	
	$res=mysqli_query($conn,$query);
	
	if($res){
		$_SESSION['success']="Data Updated successfully!";
		
	}else{
		echo "Data not Updated, please try again!";
	}

}
if(isset($_POST['delete']))
{
	$id=$_POST['id'];  
	$query="DELETE From `order_requests` where `id`='$id'";
	
	$res=mysqli_query($conn,$query);
	
	if($res){
		$_SESSION['success']="Request Deleted successfully!";
		
	}else{
		echo "Request not Deleted, please try again!";
	}
}


?>
<?php if(isset($_SESSION['success'])){
	echo $_SESSION['success'];
	unset($_SESSION['success']);
}
	?>
                      <div class="table-responsive">    
                        <table id="editable_table" class="table table-bordered table-striped" style="border-top: 1px solid grey;">
                          <thead>
                          <tr>
                          <th>Sr No.</th>
                          <th>Product title</th>
                          <th>Product Image</th>
                          <th>Category Type</th>
                          <th>Product Catalogue</th>
                          <th>Price per month</th>
                          <th>Product Description</th>
                          <th>Employee Email</th>
                          <th>Company Name</th>
                          <th>Status</th>
                          <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php 
                        $i=1;
                        // $query="Select * FROM `order_requests` t1 join `employees` t2 on t1.userid=t2.emp_id";
                        $query="SELECT * FROM order_requests WHERE status='Pending'";
                            $res=mysqli_query($conn, $query);
                            $count=mysqli_num_rows($res);
                            if($count>0)
                            {
                            while($row=mysqli_fetch_array($res))
                            {
                        
                        ?>
                        <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['productname'];?></td>
                        <td><?php echo "<img style='width:100px;height:auto;border-radius: 8px;' src='../company/orderimgs/".$row['productimage']."' >"; ?> </td>
                        <td><?php echo $row['type'];?></td>
                        <td><?php echo $row['catalogue'];?></td>
                        <td><?php echo $row['price'];?></td>
                        <td style="width:20%"><?php echo $row['description'];?></td>
                        <td><?php echo $row['useremail']; ?></td>
                        <td><?php echo $row['companyname'];?></td>
                                <td style="color:green;"><?php echo $row['status'];?></td>
                                <form method="post" action="" >
                                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                <td> 
                                <button type="submit" name="approved" class="btn btn-primary">Approve</button> &nbsp; 
                                <!-- <button type="submit" name="rejected" class="btn btn-primary">Reject</button> -->
                                <button type="submit" name="delete" class="btn btn-danger">Reject</button>
                                </form></td>
                        </tr>
                        <?php $i++;}}else{
                            echo "No Orders Request Found!";
                            
                        } ?>
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