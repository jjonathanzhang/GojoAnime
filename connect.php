<?php
    //Written by: Jason Fong
	//database information 
    $server 	= "127.0.0.1"; 
	$user 		= "root";
	$pass 		= "";
    $database 	= "gojoanime";
         
	//make the database connection 
	$mysqli = new mysqli($server, $user, $pass, $database);
    
	// Check connection
	if ($mysqli->connect_error) {
		die("Connect Error " . $mysqli->connect_errno . ": " . $mysqli->connect_error);
	}

?>