<!DOCTYPE html>
<html>
<head>
	<title>Add Advert</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div style="width: 80%">
		<form>
			<div class="form-group">
			    <label for="productName">Product Name:</label>
			    <input type="text" class="form-control" id="productName">
		  	</div>

			  <div class="form-group">
			    <label for="price">Price:</label>
			    <input type="text" class="form-control" id="price">
			  </div>
			  
			  <div class="form-group">
				  <label for="picture">Select Picture:</label>
				  <input type="file" name="image" class="font"> 
			  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>

<?php



$id= $_SESSION['SESS_MEMBER_ID'];
$user= $_SESSION['SESS_FIRST_NAME'];



	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image = $_FILES["image"] ["name"];
	$image_name= addslashes($_FILES['image']['name']);
	$size = $_FILES["image"] ["size"];
	$error = $_FILES["image"] ["error"];

	if ($error > 0){
				die("Error uploading file! Code $error.");
			}else{
				if($size > 10000000) //conditions for the file
				{
				die("Format is not allowed or file size is too big!");
				}
				
			else
				{

			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			$update3=mysqli_query($mysqli, "UPDATE comment SET picture = '$location' WHERE user='$user'");

			}
			
			if(!$update=mysqli_query($mysqli, "UPDATE members SET profImage = '$location' WHERE member_id='$id'")) {
			
				echo mysql_error();
				
				
			}
			else{
			
			//header("location: profile.php");
			exit();
			}
			}
	}
?>


</body>
</html>