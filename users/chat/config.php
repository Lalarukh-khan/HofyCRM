<?php

$conn = mysqli_connect("localhost", "imranahmedit_elite", "Welcome1#ELITE", "imranahmedit_elite");

if (!$conn) {
	echo "Connection Failed ". mysqli_connect_error() or die();
}