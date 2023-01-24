<?php  
$db = mysqli_connect("localhost", "imranahmedit_elite", "Welcome1#ELITE", "imranahmedit_elite");

//remployees_functions
$input = filter_input_array(INPUT_POST);

$emp_name = mysqli_real_escape_string($db, $input["emp_name"]);
$emp_email = mysqli_real_escape_string($db, $input["emp_email"]);
$emp_phone = mysqli_real_escape_string($db, $input['emp_phone']);
$emp_category = mysqli_real_escape_string($db, $input['emp_category']);
$emp_password = mysqli_real_escape_string($db, $input['emp_password']);
$emp_company = mysqli_real_escape_string($db, $input['emp_company']);
$emp_address = mysqli_real_escape_string($db, $input['emp_address']);
$emp_state = mysqli_real_escape_string($db, $input['emp_state']);
$emp_city = mysqli_real_escape_string($db, $input['emp_city']);
$emp_country = mysqli_real_escape_string($db, $input['emp_country']);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE employees 
 SET emp_name = '".$emp_name."', emp_email = '".$emp_email."', emp_phone = '".$emp_phone."', 
 emp_category = '".$emp_category."', emp_password = '".$emp_password."', emp_company = '".$emp_company."', emp_address = '".$emp_address."',  
 emp_state = '".$emp_state."', emp_city = '".$emp_city."', emp_country = '".$emp_country."'
 WHERE emp_id = '".$input["emp_id"]."'
 ";

 mysqli_query($db, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM employees 
 WHERE emp_id = '".$input["emp_id"]."'
 ";
 mysqli_query($db, $query);
}

echo json_encode($input);

?>