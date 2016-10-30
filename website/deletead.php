<?php
	include("connect.php");
	$id = $_POST['delete_ad'];
	echo $id;
	$sql2 = "DELETE FROM adverts WHERE id = '$id'";
	$result2 = mysqli_query($conn, $sql2);
	header('location: admin.php');
?>