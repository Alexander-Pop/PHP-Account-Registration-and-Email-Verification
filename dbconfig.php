<?php

	global $con;

	$hostname = 'localhost:8889'; 	// Host Name
	$user     = 'root'; 			// username of host
	$password = 'root'; 			// password of host
	$dbname   = 'intern'; 			//database name
			
	$con = new mysqli($hostname,$user,$password,$dbname);

	if (mysqli_connect_errno()){
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		die();
  	}