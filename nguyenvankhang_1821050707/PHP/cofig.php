<?php
	$severname="localhost";
	$username ="root";
	$password ="";
	$db="db_okage";
	$conn = mysqli_connect($severname,$username,$password,$db);
	
	if(mysqli_connect_error())
	{
		echo"lỗi kết nối".mysqli_connect_error();exit;
	}
?>