<?php
	include("connect.php");
	$id = $_POST['delete_cat'];
	$sql = "DELETE FROM categories WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	header('location: category.php');
?>