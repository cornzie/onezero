<?php

function email_exists($email){
	/*
		checks if a user has already registered.
		returns true if a user is registered and false if the user isn't
	*/
	
	
	$query = $connection->query($sql);
	return count($query) ? true : false;
}
