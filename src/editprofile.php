<?php
include('header.php');
	require('session.php');
?>
<html>
<script type="text/javascript">
jQuery(document).ready( function () {
jQuery('.greenButton').click( function(){
	
		
	
		jQuery.ajax({
		type: "POST",
		success: function(msg) {
		showNotification({
message: "Expense Activity Successfully Updated",
type: "success", // type of notification is error/success/warning/information,
autoClose: true, // auto close to true
duration: 5 // message display duration
});
alert('save');
}
});
});

});

</script>
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
<head><title>Profile</title></head>

<link href="info.css" rel="stylesheet" type="text/css" />
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


<script type="text/javascript" src="js/jquery.js"></script>
<!--datepicker -->
<link href="css/datepicker/ui.datepicker.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="js/datepicker/ui.datepicker.js"></script>
<!--datepicker -->
<script type="text/javascript" charset="utf-8">
jQuery(function($){
$(".date").datepicker();
});
</script>
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
.style1 {font-weight: bold}
-->
</style>
</body>
<div class="main">
<div id="shadow" class="popup"></div>
<div class="lefttop1">
  <div class="lefttopleft"><img src="img/name.png" width="100" height="100" /></div>
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
	<li><a href="info.php"><img src="img/message.png" width="16" height="12" border="0" /> &nbsp;Info</a>
	</li>
	<li><a href=""><img src="img/m.png" width="16" height="12" border="0" /> &nbsp;Message&nbsp(<?php 
$result = mysqli_query($mysqli, "SELECT * FROM messages WHERE receiver='".$_SESSION['SESS_FIRST_NAME'] ."' and status='pending' ORDER BY receiver ASC");
	
	$numberOfRows = MYSQLI_NUM_ROWS($result);	
	echo '<font color="red">' . $numberOfRows. '</font>';
	?>)
	</a>
	</li>
	
	<li><hr width="150"></li>
	<li>
	</ul>
								
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
  </div>
  <div class="right">
  
	

<div class="shoutout">
<div class="ball">

	   <div class="shout">
<h2><div class="color"><?php
$result = mysqli_query($mysqli, "SELECT * FROM members WHERE member_id='".$_SESSION['SESS_MEMBER_ID'] ."'");
while($row = mysqli_fetch_array($result))
  {
 
  echo $row["FirstName"];
  echo"  ";
  echo $row["LastName"];
  }
?>
</div>
</h2>

</div> 
</div>
<form method="post" action="">
 <input name="userid" type="hidden"  value=" <?php echo $_SESSION['SESS_MEMBER_ID'];?>" /> 

<?php
$result = mysqli_query($mysqli, "SELECT * FROM members WHERE member_id='".$_SESSION['SESS_MEMBER_ID'] ."'");

while($row = mysqli_fetch_array($result))
  {
  
echo '<table>';
		  	 
		  echo'<tr><td><div class="tl">FirstName:</div></td>';
		  echo'<td><input type="text" name="firstname" class="t" value="'. $row['FirstName'] .'"></td></tr>'; 
		    
		  echo'<tr><td><div class="tl">LastName:</div></td>';
		  echo'<td><input type="text" name="lastname" class="t" value="'. $row['LastName'] .'"></td></tr>'; 
			 
			 
		  echo'<tr><td><div class="tl">Address:</div></td>';
		  echo'<td><input type="text" name="curcity" class="t" value="'. $row['Address'] .'"></td></tr>';
		  
		  echo'<tr><td><div class="tl">Contact Number:</div></td>';
		  echo'<td><input type="text" name="contactNo" class="t" value="'. $row['ContactNo'] .'"></td></tr>';
		  
		    
			echo '<tr><td><div class="tl">Status:</div></td>';
          
          echo '<td><select name="stats" class="combo">';
            echo '<option selected="selected">';
			echo $row['Stats'];
			echo '</option>';
            echo '<option>Single</option>';
            echo '<option>';
			echo 'In a RelationShip';
			echo '</option>';
			echo '<option>';
			echo 'Widowed';
			echo '</option>';
			echo '<option>';
			echo 'Complicated';
			echo '</option>';
          echo '</select></td></tr>';
			
			
			
			
		echo '<tr><td><div class="tl">I am</div></td>';
          
          echo '<td><select name="gender" class="combo">';
            echo '<option selected="selected">';
			echo $row['Gender'];
			echo '</option>';
            echo '<option>Male</option>';
            echo '<option>';
			echo 'Female';
			echo '</option>';
          echo '</select></td></tr>';
		  
	echo'<tr><td><div class="tl">BirthDay:</div></td>';
		  echo'<td><input type="text" name="BirthDay" class="date" value="'. $row['Birthdate'] .'"></td></tr>';
		  
		  
          
			
			echo'<tr><td><div class="tl">Email:</div></td>';
		  echo'<td><input type="text" name="email" class="t" value="'. $row['Url'] .'"></td></tr>';
			
			echo '<tr><td><div class="tl">Interested In:</div></td>';  
			
			echo '<td><select name="Interested" class="combo">';			
            echo '<option selected="selected">';
			echo $row['Interested'];
			echo '</option>';
            echo '<option>';
			echo 'Men';
			echo '</option>';
            echo '<option>';
			echo 'Women';
			echo '</option>';
            echo '</select></td></tr>';
			
			echo'<tr><td><div class="tl">Language:</div></td>';
		  echo'<td><input type="text" name="language" class="t" value="'. $row['language'] .'"></td></tr>';
		  
		  echo'<tr><td><div class="tl">College:</div></td>';
		  echo'<td><input type="text" name="college" class="t" value="'. $row['college'] .'"></td></tr>';
		  
		   echo'<tr><td><div class="tl">HighSchool:</div></td>';
		  echo'<td><input type="text" name="highschool" class="t" value="'. $row['highschool'] .'"></td></tr>';
		  
		     echo'<tr><td><div class="tl">About Me:</div></td>';
		  echo'<td><input type="text" name="aboutme" class="t" value="'. $row['aboutme'] .'"></td></tr>';
		  
		  echo '<tr><td></td>';
		  echo'<td><input type="submit" name="save" value="Save Changes" class="greenButton"></td></tr>';
		  
		  
	   
			}
echo'</table>';
?>
	
</form>      
	  
<div class="ball">
</div>
</br>
	</div>
	
</body>
</html>
<?php
if (isset($_POST['save'])){
$stats=$_POST['stats'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$user=$_POST['userid'];
$current=$_POST['curcity'];
$interested=$_POST['Interested'];
$language=$_POST['language'];
$college=$_POST['college'];
$highschool=$_POST['highschool'];
$contactNo=$_POST['contactNo'];
$aboutme=$_POST['aboutme'];
$gender=$_POST['gender'];

$bday=$_POST['BirthDay'];

mysqli_query($mysqli, "UPDATE members SET Stats='$stats',ContactNo='$contactNo',LastName='$lastname',FirstName='$firstname',Address='$current', Interested='$interested', language='$language', college='$college', highschool='$highschool',  aboutme='$aboutme', Gender='$gender',Birthdate='$bday' WHERE member_id='$user'");

header('location:editprofile.php');

}
?> 

