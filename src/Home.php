<?php
	require_once('session.php');
?>

<html>

<script src="jquery.js" type="text/javascript"></script>

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
<head><title>Home</title></head>
<link href="info.css" rel="stylesheet" type="text/css" />
<link href="home.css" rel="stylesheet" type="text/css" />

<link rel="icon" href="img/icon.png" type="image" />
<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
<style>
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>

<script type="text/javascript">

$(document).ready(function(){
$("#shadow").fadeOut();

	$("#cancel_hide").click(function(){
        $("#").fadeOut("slow");
        $("#shadow").fadeOut();
		
   });
      });
   </script>
<style type="text/css">
<!--
body {
	background-image: url(images/New%20Picture.jpg);
	background-repeat: repeat-x;
}
.style1 {font-weight: bold}
-->
</style>
</body>
<div class="main">
<div id="shadow" class="popup"></div>

  <div class="lefttop1">
  <div class="lefttopleft"><img src="img/logo.png" width="150" height="40" /></div>
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
	
	 </div>

	   <div class="shout">


</div> 
<div class="shoutout">
    
		
		<div  class="back"><h4><class="p"><div></h4></div>
			
		</br>
		</br>
		<div class="u">
        <!--<form  name="form1" method="post" action="comment.php">
          <div class="comment">
            <textarea name="message" cols="45" rows="5" id="message" onclick="this.value='';"></textarea>
          </div>
          <input name="name" type="hidden" id="name" value="<?php echo $_SESSION['SESS_FIRST_NAME'];?>"/>
		  <input name="poster" type="hidden" id="name" value="<?php echo $_SESSION['SESS_MEMBER_ID'];?>"/>
          <input name="name1" type="hidden" id="name" value="<?php echo $_SESSION['SESS_LAST_NAME'];?>"/>
          <input type="submit" name="btnlog" value="Post" class="greenButton" />
          </div>
        </form>-->
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
		<a class='btn btn-default' href='profile.php'><h5>Name of Seller: <?php 
			$result = mysqli_query($mysqli, "SELECT * FROM members WHERE member_id='".$file_row['member_id']."'");
			$row = mysqli_fetch_array($result);
			//echo $row["FirstName"]." ".$row["LastName"];
			echo $file_row['member_id'];
			?></h5></a><br/><br/>
		<a class='btn btn-success' href='profile.php'><h5>Contact Seller</h5></a><br/><br/>
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
		<!--<form name="form1" method="post" action="addPost.php">
			<div class="form-group">
			  <input type="text" class="form-control" name="name" placeholder="Name of Product">
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="price" placeholder="Price">
			</div>
			<!--<label class="btn btn-primary btn-file">-->
			<!--	<input type="file" name='carImagePost' class='btn btn-primary'>
			<input type="submit" value="Upload" class="greenButton">
		</form>-->
		</div>
     <div class="s"> 
	   <?php
	   

  $query  = "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM comment WHERE member_id='".$_SESSION['SESS_MEMBER_ID'] ."' ORDER BY comment_id DESC";
$result = mysqli_query($mysqli, $query);
			
			

while($row = mysqli_fetch_assoc($result))
{
   echo '<div class="information">';
	echo '<div class="pic1">';
			$result1 = mysqli_query($mysqli, "SELECT * FROM members WHERE member_id='".$_SESSION['SESS_MEMBER_ID'] ."'");
while($row1 = mysqli_fetch_array($result1))
  {
	echo "<img width=40 height=40 alt='Unable to View' src='" . $row1["profImage"] . "'>";
	}
	echo '<div class="message">';
	
		$result1 = mysqli_query($mysqli, "SELECT * FROM members WHERE member_id='".$_SESSION['SESS_MEMBER_ID'] ."'");
while($row1 = mysqli_fetch_array($result1))
  {


 echo " Posted by:<font color=#1d3162> {$row1['FirstName']}"."&nbsp;{$row1["LastName"]}</font>";
  }
	
	
	echo '</br>';
	echo "{$row['comment']}";

	echo'</br>';
	echo'</br>';
	echo'</div>';
	echo'<hr width="390">';
	echo '<div class="kkk">';
	
	echo'<a class="style" href="deletepost.php?id=' . $row["comment_id"] . '">delete</a>&nbsp;&nbsp;<a class="style" href=""><img width=20 height=20  src=img/like.png>Like</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	
	$days = floor($row['TimeSpent'] / (60 * 60 * 24));
			$remainder = $row['TimeSpent'] % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
	if($days > 0)
			echo date('F d Y', $row['date_created']);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
			echo "few seconds ago";		
			elseif($days == 0 && $hours == 0)
			echo $minutes.' minutes ago';
		
	echo'</div>';
	echo'</br>';
	echo'</br>';
	}
	
  echo '</div>';
  echo'</br>';
 
  ?>
  
  
  </div>
	 </div>
	</div>

 
  
</body>
</html>