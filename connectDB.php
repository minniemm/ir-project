<?php
	$user ="u07580543";
	$pass ="PwdDBIs07580543";
	$host ="localhost";
	$db ="db07580543";
	$cid = mysqli_connect($host,$user,$pass,$db) or die ("Could not select the database");
	
	
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
		echo "Connected successfully";
?>

