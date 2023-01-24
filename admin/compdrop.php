<?php
  
    // Connect to database 
    $con = mysqli_connect("localhost","root","","elite");
      
    // mysqli_connect("servername","username","password","database_name")
   
    // Get all the categories from category table
    $sql = "SELECT * FROM `companies`";
    $all_categories = mysqli_query($con,$sql);
?>
   
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">    
</head>
<body>
    <form method="POST">
        <label>Select a Category</label>
        <select name="Category">
            <?php 
                // use a while loop to fetch data 
                // from the $all_categories variable 
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $category["comp_id"];
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
    </form>
    <br>
</body>
</html>