<?php
	require('session.php');
	require('connect.php');
?>
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
<head><title>Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>

<link href="home.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="img/icon.png" type="image" />
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
<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript">
		$(document).ready(function() {
			

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			
		});
	</script>
		
<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style>
</body>
<div class="main">


<div class="lefttop1">
  <div class="lefttopleft"><img src="img/name.png" width="100" height="100"/></div>
   <div class="propic">

	<?php
include('connect.php');
$id= $_SESSION['SESS_MEMBER_ID'];	
$image=mysqli_query($mysqli, "SELECT * FROM members WHERE member_id='$id'");
			$row=mysqli_fetch_assoc($image);
			$_SESSION['image']= $row['profImage'];
			echo '<div id="pic">';
			echo "<a href=".$row['profImage']." rel=facebox;><img width=140 height=140 alt='Unable to View' src='" . $_SESSION['image'] . "'></a>";
			echo '</div>';

?>
</div>
<ul id="sddm1">
	<li><a href="editpic.php"><img src="img/pencil.png" width="17" height="17" border="0" /> &nbsp;Change Picture</a>
	</li>
	</li>
	<li><a href="info.php"><img src="img/message.png" width="16" height="12" border="0" /> &nbsp;Info</a>
	</li>
	<li><a href="message.php"><img src="img/m.png" width="16" height="12" border="0" /> &nbsp;Message&nbsp(<?php 
$member_id = $_SESSION['SESS_MEMBER_ID'];
$received = mysqli_query($mysqli, "SELECT * FROM messages WHERE recipient = '$member_id'")or die(mysql_error());
								$receiveda = mysqli_num_rows($received);
								echo '<font color="Red">'  .$receiveda .'</font>';


?>)
	</a>
	</li>

	<li>
	</ul>						
  </div>
  <div class="righttop1">
       <div class="search">
       <form action="search.php" method="POST">
        <input name="search" type="text" maxlength="30" class="textfield"  value="search"/>
	
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
		<form method="post">
		 <a href ="editprofile.php" class="a">Edit Profile</a>
		 
		 </form>			
	</div>

	 
<div class="shout">

<h2><div class="color"><?php
$result = mysqli_query($mysqli, "SELECT * FROM members WHERE member_id='".$_SESSION['SESS_MEMBER_ID'] ."'");
while($row = mysqli_fetch_array($result))
  {
  echo  $row["FirstName"];
  echo"  ";
  echo $row["LastName"];

  }
?>
</div>
</h2>
<hr align="left" width="420">
	   <?php
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$result = mysqli_query($mysqli, "SELECT * FROM photos WHERE member_id='".$_SESSION['SESS_MEMBER_ID'] ."'  ORDER BY photo_id DESC LIMIT 0,4");


while($row = mysqli_fetch_array($result))
  {



 echo "<a href=".$row['location']." rel=example_group><img class=img width=70 height=70 alt='Unable to View' src='". $row["location"] . "'>" . '</a>';
 

  echo"";
 

 
  }


?>
<hr align="left" width="420">
<div class="information">
<?php
$result = mysqli_query($mysqli, "SELECT * FROM members WHERE member_id='".$_SESSION['SESS_MEMBER_ID'] ."'");
while($row = mysqli_fetch_array($result))
  {
  echo "Lives in: "."".$row['Address']. " | " ."Gender: ".$row['Gender']. " | " ."Born on: ".$row['Birthdate'];
  echo "</br>";
  echo "Contact No: "."".$row['ContactNo']. " | " ."Email: ".$row['Url'];
  echo "</br>";
   echo "Status: "."".$row['Stats'];
  
  }
?>
</div>
</div> 
<div class="shoutout">

		<div  class="back"><h4><class="p"><div></h4></div>
		</br>
         <form method="post" action="addPost.php" enctype="multipart/form-data">
			<div class="form-group">
			  <input type="text" class="form-control" name="name" placeholder="Name of Product">
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="price" placeholder="Price">
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="condition" placeholder="Condition">
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="description" placeholder="Description">
			</div>
			<div class="form-group">
								<label for="gender">Category:</label>
								<div class="textright1">
									<div class="input-container">
										<select name="category" id="category" class="form-control"><?php echo "Category"; ?> 
											<option >SUV</option>
											<option >Sedan</option>
										</select>
										<br />
									</div>
								</div>
							</div>
			<input type="file" name="image" class="font"> 
			<input name="member_id" type="hidden"  value="<?php echo $_SESSION['SESS_MEMBER_ID'];?>"/>
			<input type="submit" value="Upload">
		</form>
		  

      
	
	 </div>
	<?php
			$file_result = $mysqli->query("SELECT * FROM adverts ORDER BY id DESC");
			$rows_per_page =3;
			$file_records = mysqli_num_rows($file_result);
			$total_records = $file_records;
			$pages = ceil($total_records / $rows_per_page);
			/*if(!isset($_GET['page']))
			{
				header("location:Home.php?page=1");
			}
			else
			{
				$page = $_GET['page'];
			}
			$start = (($page-1)*$rows_per_page);*/
			$colours = $mysqli->query("SELECT * FROM adverts ORDER BY id DESC");
		?>
		<?php while($file_row = $colours->fetch_assoc()){ ?>
		<h3>Name of Car:  <?php print($file_row['name']); ?></h3>
		<h5>Date posted: <?php print($file_row['date']);?></h5>
		<h5>Price: <?php print($file_row['price']);?></h5>
		<h5>Name of Seller: <?php echo $_SESSION['SESS_FIRST_NAME'];?></h5>
		<?php 
			echo "<img src='".$file_row['location']."' alt='".$file_row['name']."' height='130px' width='130px'>"; $path = $file_row['location']; 
		?>
		<?php echo '&nbsp'; echo "<a class='btn btn-success' href='$path' >View</a>";?>
		<?php } ?>

		<?php
						
			/*echo '<h3>Page number: </h3>';
			for($number=1;$number<$pages;$number++)
			{
				 echo '<a href="?page='.$number.'">'.$number.'</a>'.' '.' ';
							
			}*/
		?>

</body>
</html>