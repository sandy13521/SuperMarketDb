<?php

	if(!session_id())session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	// Create connection
	$_SESSION["conn"] = new mysqli("localhost", "root", "", "project");

	// Check connection
	if ($_SESSION["conn"]->connect_error) {
	    die("Connection failed: " . $conn->connect_error());
	    return 0;
	}
	//return 1;
	
	//  echo "Connected successfully";
?>