<?php
	include("connect.php");
	$id = $_POST['delete_user'];
	$sql = "DELETE * FROM members WHERE member_id = '$id'";
	$result = mysqli_query($conn, $sql);
	$sql2 = "DELETE * FROM adverts WHERE member_id = '$id'";
	$result2 = mysqli_query($conn, $sql2);
	$sql3 = "DELETE * FROM messages WHERE receiver = '$id'";
	$result3 = mysqli_query($conn, $sql3);
	header('location: admin.php');
?>