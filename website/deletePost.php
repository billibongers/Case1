<?php
	
	include("connect.php");
	$ad_id = $_POST['ad_id'];

	$sql = "DELETE FROM adverts WHERE id='$ad_id'";
	$result = mysqli_query($conn, $sql);

	header('location:profile.php')

?>