<?php
	$id = $_POST['adID'];
	
	include("connect.php");
	$productName = $_POST['productname'];
	$productPrice = $_POST['price'];
	$description = $_POST['description'];
	$condition = $_POST['condition'];
	$category = $_POST['cat'];
	
	if($productName != '')
		{
			$sql = "UPDATE adverts SET name = '$productName WHERE id='$id'";
			$result = mysqli_query($conn, $sql);
		}
		
		
		if($productPrice != '')
		{
			$sql = "UPDATE adverts SET price = '$productPrice' WHERE id='$id'";
			$result = mysqli_query($conn, $sql);
		}
		
		
		if($description != '')
		{
			$sql = "UPDATE adverts SET product_description = '$description' WHERE id='$id'";
			$result = mysqli_query($conn, $sql);
		}
		
		
		if($condition != '')
		{
			$sql = "UPDATE adverts SET product_condition = '$condition' WHERE id='$id'";
			$result = mysqli_query($conn, $sql);
		}
		
		
		if($category != '')
		{
			$sql = "UPDATE adverts SET category = '$category' WHERE id='$id'";
			$result = mysqli_query($conn, $sql);
		}
		
		
	
	
		header("location: manageads.php");
?>