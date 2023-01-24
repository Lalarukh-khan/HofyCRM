<?php  
$db = mysqli_connect("localhost", "imranahmedit_elite", "Welcome1#ELITE", "imranahmedit_elite");

//rcompanies_functions
$input = filter_input_array(INPUT_POST);

$comp_name = mysqli_real_escape_string($db, $input["comp_name"]);
$comp_email = mysqli_real_escape_string($db, $input["comp_email"]);
$comp_phone = mysqli_real_escape_string($db, $input['comp_phone']);
$comp_category = mysqli_real_escape_string($db, $input['comp_category']);
$comp_membership = mysqli_real_escape_string($db, $input['comp_membership']);
$comp_password = mysqli_real_escape_string($db, $input['comp_password']);
$comp_address1 = mysqli_real_escape_string($db, $input['comp_address1']);
$comp_address2 = mysqli_real_escape_string($db, $input['comp_address2']);
$comp_state = mysqli_real_escape_string($db, $input['comp_state']);
$comp_postcode = mysqli_real_escape_string($db, $input['comp_postcode']);
$comp_city = mysqli_real_escape_string($db, $input['comp_city']);
$comp_country = mysqli_real_escape_string($db, $input['comp_country']);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE companies , employees
 SET comp_name = '".$comp_name."', comp_email = '".$comp_email."', comp_phone = '".$comp_phone."', 
 comp_category = '".$comp_category."', comp_membership = '".$comp_membership."', comp_password = '".$comp_password."', 
 comp_address1 = '".$comp_address1."', comp_address2 = '".$comp_address2."', comp_state = '".$comp_state."', 
 comp_postcode = '".$comp_postcode."', comp_city = '".$comp_city."', comp_country = '".$comp_country."', emp_company = '".$comp_name."'
 WHERE comp_id = '".$input["comp_id"]."' AND emp_company = comp_name;
 ";

 mysqli_query($db, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM companies 
 WHERE comp_id = '".$input["comp_id"]."'
 ";
 mysqli_query($db, $query);
}

echo json_encode($input);

?>