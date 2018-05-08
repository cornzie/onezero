<?php

try{
	$connection = new PDO("mysql:host=127.0.0.1;dbname=dbc; charset=utf8", "root", "");
} catch(PDOException $e){
	die("We're Sorry, There's been an error. Please call back.");
}

