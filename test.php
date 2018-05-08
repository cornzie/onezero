<?php

include 'core/init.php';
$email = 'hola@hola.com';
$query1 = $connection->query("SELECT * FROM campers WHERE email = '{$email}'");



if ($query1->rowCount()) {
	# code...
	echo $query1->rowCount();
}

