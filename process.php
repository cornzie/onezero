<?php
/*
*Desc: This page processes the campers registration
*/

# Include initialization files
include_once 'core/init.php';

# Test if any data has been passed
if (isset($_POST) && !empty($_POST)) {
	
	#Assign Variables
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$track = $_POST['track'];

	
		# inserting into the campers table
		$sql1 = "INSERT INTO `campers` (fname, lname, email, address, date_of_registration) VALUES (?, ?, ?, ?, NOW())";
		$query = $connection->prepare($sql1);

		$query->execute(array($fname, $lname, $email, $address));

		#inserting their tracks into tracks table
		$sql2 = "INSERT INTO `reg_details` (email, track) VALUES (?, ?)";
		$query1 = $connection->prepare($sql2);

		$query1->execute(array($email, $track));
		
		header("Location:register.php?successful");
	
} else{
	echo "nothing";
}