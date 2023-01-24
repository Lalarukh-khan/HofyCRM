<?php
$db = mysqli_connect("localhost", "imranahmedit_elite", "Welcome1#ELITE", "imranahmedit_elite");

$querycomp = "SELECT * FROM companies";
$resultcomp = mysqli_query($db,$querycomp);
$comprows = mysqli_num_rows($resultcomp);

$queryemp = "SELECT * FROM employees";
$resultemp = mysqli_query($db,$queryemp);
$emprows = mysqli_num_rows($resultemp);

$queryadm = "SELECT * FROM admin";
$resultadm = mysqli_query($db,$queryadm);
$admrows = mysqli_num_rows($resultadm);
?>
