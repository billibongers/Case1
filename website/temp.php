<?php
$id = $_POST["testing"];
		echo $id;
	include("connect.php");
		$firstName = $_POST['first_name'];
		$lastName = $_POST['last_name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = hash('sha256', $password);
		$email = $_POST['email'];
		$address = $_POST['address'];
		$con = $_POST['num'];
		
		
		echo $firstName;
		
		if($firstName != '')
		{
			$sql = "UPDATE members SET FirstName = '$firstName' WHERE member_id='$id'";
			$result = mysqli_query($conn, $sql);
		}
		
		
		if($lastName != '')
		{
			$sql = "UPDATE members SET LastName = '$lastName' WHERE member_id='$id'";
			$result = mysqli_query($conn, $sql);
		}
		
		
		if($username != '')
		{
			$sql = "UPDATE members SET UserName = '$username' WHERE member_id='$id'";
			$result = mysqli_query($conn, $sql);
		}
		
		
		if($password != '')
		{
			$sql = "UPDATE members SET Password = '$password' WHERE member_id='$id'";
			$result = mysqli_query($conn, $sql);
		}
		
		
		if($email != '')
		{
			$sql = "UPDATE members SET Url = '$email' WHERE member_id='$id'";
			$result = mysqli_query($conn, $sql);
		}
		
		
		if($con != '')
		{
			$sql = "UPDATE members SET ContactNo = '$con' WHERE member_id='$id'";
			$result = mysqli_query($conn, $sql);
		}
		
		
		if($address != '')
		{
			$sql = "UPDATE members SET Address = '$address' WHERE member_id='$id'";
			$result = mysqli_query($conn, $sql);
		}
		
		header('location: manageusers.php');
?>