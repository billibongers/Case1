<?php
	$servername = "localhost";
	$database = "hello";
	$username = "root";
	$password = "Mbhele11315";
	
	//Connect to database
	$conn  = mysqli_connect($servername, $username, $password);
	if(mysqli_connect_errno())
		die("Connection failed: ". mysqli_connect_errno());
	
	//Select database
	mysqli_select_db($conn, $database);
	
?>