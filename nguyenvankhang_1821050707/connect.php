<?php
	$severname="localhost";
	$username ="root";
	$password ="";
	$db="db_okage";
	$conn = mysqli_connect($severname,$username,$password,$db);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "";
?>