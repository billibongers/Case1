<?php include('connect.php');?>	
<?php include('session.php');?>	
<?php



$name = $_POST['name'];
$price = $_POST['price'];

	if (!isset($_FILES['image']['tmp_name'])) {
	echo "a";
	}else{
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		
				if($_FILES['image']['size'] > (1024000)) //conditions for the file
				{
				die("Format is not allowed or file size is too big!");
				}
		else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"cars/" . $_FILES["image"]["name"]);			
			$location="cars/" . $_FILES["image"]["name"];
			$by=$_POST['member_id'];
			

$sql = "INSERT INTO adverts(`name`, `price`, `location`, `member_id`) VALUES ('$name','$price','$location','by')";
if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error());
  }
header("location: photos.php");
exit();


			
			}
	}

?>