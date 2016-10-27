<?php include('connect.php');?>	
<?php include('session.php');?>	

<html>
<script type="text/javascript">
<!--
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 
// -->
</script>
<head><title>Edit Picture</title></head>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="./js/jquery-1.4.2.min.js"></script>
	<link href="facebox1.2/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
			<link href="../css/example.css" media="screen" rel="stylesheet" type="text/css" />
			<script src="facebox1.2/src/facebox.js" type="text/javascript"></script>
			<script type="text/javascript">

jQuery(document).ready(function($) {
  $('a[rel*=facebox]').facebox() 
  	closeImage   : " ../src/closelabel.png" 
})
</script>

<link href="home.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style>
<body>
<div class="main">
<div class="lefttop1">
  <div class="lefttopleft"><img src="img/name.png" width="120" height="120"/></div>
</div>							
  </div>
  <div class="righttop1">
       <div class="search">
      <form action="" method="GET">
        <input name="query" type="text" maxlength="30" class="textfield"  value="search"/>
      </form>
</div>
    <div class="nav">
      <ul id="sddm">
        <li><a href="profile.php" ><?php


$result = mysqli_query($mysqli, "SELECT * FROM members WHERE member_id='".$_SESSION['SESS_MEMBER_ID'] ."'");
while($row = mysqli_fetch_array($result))
  {
  echo "<img width=20 height=15 alt='Unable to View' src='" . $row["profImage"] . "'>";
echo"  ";
  echo $row["FirstName"];
  echo"  ";
  echo $row["LastName"];
  }

?></a></li>
      <li><a href="Home.php">Home</a></li>
               <li><a  href="#"onmouseover="mopen('m5')" onmouseout="mclosetime()">Account</a>
          <div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
</a>
        
		<a href="logout.php"><font size="2" class="font1">Logout</font></a>
        </li>
      </ul>
      <div style="clear:both"></div>
      <div style="clear:both"></div>
    </div>
  </div>
  
  </div>
  
<div class="right">
	<div class="rightright">
	
	 </div>

	   <div class="shout">

<div class="information">

</div>
</div> 
<div class="shoutout">

		<div  class="back"><h4><class="p"><div></h4></div>
		</br>
       <form  method="post" enctype="multipart/form-data">
 <div class="color"><h2>Change Profile Picture:</h2></div>
  </br>
  Select Picture
 <input type="file" name="image" class="font"> 
  </br>
 
    <input type="submit" value="Upload" class="greenButton">
        
</form>
</div>
</div>
	  
	 </div>
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