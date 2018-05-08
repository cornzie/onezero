<?php

function email_exists($email, $connection){
	/*
		checks if a user has already registered.
		returns true if a user is registered and false if the user isn't
	*/
	$query1 = $connection->query("SELECT * FROM campers WHERE email = '{$email}'");
	
	if ($query1->rowCount() == 1) {
		return true;
	}

	return false;
}
