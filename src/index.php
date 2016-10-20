<?php include('connect.php');?>	
<?php

		//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
///
		$vfname = "";
		$vlname = "";
		$vlogin="";
		$vpassword="";
		$vcpassword="";
	    $vaddress="";
		$vcnumber="";
		$vemail="";

		$a="";
		$u="";
		$e="";
		
		
		
//

		$fname = "";
		$lname = "";
		$login="";
		$password="";
		$cpassword="";
	    $address="";
		$cnumber="";
		$email="";
		
if (isset($_POST['Submit'])) {
	
	//Sanitize the POST values
	$fname = ($_POST['fname']);
	$lname = ($_POST['lname']);
	$login =($_POST['login']);
	$password = md5($_POST['password2']);
	$cpassword = md5($_POST['cpassword']);
	$address = ($_POST['address']);
	$cnumber =($_POST['cnumber']);
	$email = ($_POST['email']);
	$gender = ($_POST['gender']);
	//$bdate = clean($_POST['bdate']);
	$propic = ($_POST['propic']);
	$bday=$_POST['month'];
  	
	$pattern = "/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i";
	//Input Validations
		
	if (!preg_match($pattern,$email)){
	$e = "Invalid Email Address";	
}

if ($email=="") {
		$e	= "";
		}
	if ($fname=="") {
		$vfname	= "<td>Field Missing.</td>";
		}else{
		$vfname="";
		}

	if ($lname==""){
	$vlname	= "<td>Field Missing.</td>";
		}else{
		$vlname="";
		}
	if ($login=="") {
	$vlogin	= "<td>Field Missing.</td>";
	} else{
	$vlogin = "";
	}
		if ($password=="") {
		$vpassword	= "<td>Field Missing.</td>";
	} else{
	$vpassword="";
	}
		if ($cpassword=="") {
		$vcpassword	= "<td>Field Missing.</td>";
	} else{
	$vcpassword="";
	}
	if ($address=="") {
	$vaddress	= "<td>Field Missing.</td>";
	} else{
	$vaddress="";
	}

			if ($cnumber=="") {
		$vcnumber= "<td>Field Missing.</td>";
	} else{
	$vcnumber="";
	}
	if ($email=="") {
		$vemail	= "<td>Field Missing.</td>";
	} else{
	$vemail="";
	}
	
	if($cpassword!=$password){
	$a="Password do not Match";}
	if ($cpassword==""){
	$a="";
	}

	
	//Check for duplicate login ID
	if($login != '') {
		$query = "SELECT * FROM members WHERE UserName='$login'";
		$result = mysqli_query($mysqli, $query);
		if($result) {
			if(mysqli_num_rows($result) > 0) {
			$u = 'UserName already in use';
			
			}
		}
		else {
		
			die("Query failed");
		}
	}
	
	
	
	

if ($fname!= "" && $lname!= "" && $login!= "" && $password!= "" && $cpassword==$password && $address!="" && preg_match($pattern,$email) && $cnumber!="" ) {
		$link = mysqli_connect("localhost", "root", "abc123", "hello");
	if(!$link) {
		die('Failed to connect to server: ' . mysqli_error());
	
	}
	
	//Select database
	//$db = mysql_select_db("db");
	if(!$link) {
		die("Unable to select database");
	}
	$query = mysqli_query($link, "INSERT INTO members(UserName, Password, FirstName, LastName, Address, ContactNo, Url, Birthdate, Gender, DateAdded, profImage,curcity)VALUES('$login','$password','$fname','$lname','$address','$cnumber','$email','$bday','$gender', now() ,'$propic','$address')")or die(mysqli_error($link));  
	header('Location: signup-success.php');
	echo "login success";
					
}
	
	

}
?>
<html>
<head><title>index</title></head>

<style type="text/css">
<!--
body {
	background-image: url(bg/bg3.jpg);
	background-repeat:repeat-x;
	background-color:#d9deeb;

}
-->
</style>
<link href="index.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="img/icon.png" type="image" />

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
			
			
		$("a#example2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});


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

<script type="text/javascript" src="js/jquery.js"></script>
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

<body>
<div class="mainr">
 <div class="topleft"> <img src="img/name.png" width="200" height="200" /></a></div>
<form action="login.php" method="post">
  
  <div class="qwerty">
  <div class="label">
        <div class="email style1">&nbsp;UserName</div>
        <div class="password">&nbsp;&nbsp;Password</div>
      </div>
      <div class="label1">
      	<form>
        	<div class="emailtext">
        		<div class="form-group">
	        		<label for="username">Username:</label>	
	          		<input name="UserName" type="text" class="form-control">
          		</div>
        	</div>
	        <div class="passwordtext">
	        	<div class="form-group">
	        		<label for="password">Password:</label>
	         		<input name="Password" type="password" class="form-control">
          		</div>
	        </div>
	        <div class="emailtext">
	        	<div class="form-group">
      				<button type="submit" name="submit" value="Login" class="btn btn-default">Login</button>
          		</div>
	        </div>

        </form>
      </div>
      <div class="label2">
        
        <div class="password">&nbsp;&nbsp;Forgot Password?</div>
      </div>
    </div>
 
  </form>
   
  </div>

<div class="downleft">
  <div class="picture">
  </br>
  </br>
  <img src="img/logo2.png" width="500" height="200" />
  </div>
  Welcome to exclusive cars
  	<div class="field">
	    <div class="signup">Sign Up</div>
	    <div>
			<form  method="POST">
				<div class="form-group">
					<label for="fname">First Name:</label>
					<input name="fname" type="text" class="form-control" maxlength="10" value="<?php echo $fname; ?>">
				</div>

				<div class="form-group">
					<label for="lname">Last Name:</label>
					<input name="lname" type="text" class="form-control" value="<?php echo $lname; ?>">
				</div>

				<div class="form-group">
					<label for="login">User Name:</label>
					<input name="login" type="text" class="form-control" value="<?php echo $login; ?>">
				</div>

				<div class="form-group">
					<label for="password2">Password:</label>
					<input name="password2" type="password" class="form-control" value="<?php echo $password; ?>">
				</div>

				<div class="form-group">
					<label for="cpassword">Retype Password:</label>
					<input name="cpassword" type="password" class="form-control" value="<?php echo $cpassword; ?>">
				</div>

				<div class="form-group">
					<label for="address">Address:</label>
					<input name="address" type="text" class="form-control" value="<?php echo $address; ?>">
				</div>

				<div class="form-group">
					<label for="cnumber">Contact Number:</label>
					<input name="cnumber" type="text" class="form-control" maxlength="11" size="40" value="<?php echo $cnumber; ?>">
					<input name="propic" id="dadded" type="hidden" value="upload/p.jpg" />
				</div>


				<div class="form-group">
					<label for="email">Email:</label>
					<input name="email" type="email" class="form-control" value="<?php echo $email; ?>">
				</div>

				<div class="form-group">
					<label for="gender">Gender:</label>
					<div class="textright1">
						<div class="input-container">
					  		<select name="gender" id="gender" class="form-control"><?php echo $vgender; ?> 
		               			<option >Female</option>
		                		<option >Male</option>
		              		</select>
		              		<br />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="bday">Brith Day:</label>
					<input name="month" type="text" class="date">
				</div>

				<div class="form-group">
				  <button type="submit" name="Submit" value="Sign up" class="btn btn-default">Sign Up</button>
				</div>
			 
			</form>
		</div>
	</div>
</body>
</html>
