<?php
$db2 = mysqli_connect("localhost", "imranahmedit_elite", "Welcome1#ELITE", "imranahmedit_elite");
if (!empty($_POST["id"])) {
    $id = $_POST['id'];
    $query3 = "SELECT * from `product_category_types` where `category_id`=$id";
    $result3 = mysqli_query($db2, $query3);
    if ($result3->num_rows > 0) {
        echo '<option value="">Select Category Type</option>';
        while ($row3 = mysqli_fetch_assoc($result3)) {
            echo '<option value="' . $row3['id'] . '">' . $row3['types'] . '</option>';
        }
    }
} 
