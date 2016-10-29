<?php
	session_start();
	include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="red" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo">Exclusive Cars</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="logout.php">Log out</a></li>
      </ul>
       <ul class="right hide-on-med-and-down">
        <li><a href="addProduct.php">Add Product</a></li>
      </ul>
        <ul class="right hide-on-med-and-down">
        <li><a href="profile.php">Profile</a></li>
      </ul>
	   </ul>
        <ul class="right hide-on-med-and-down">
        <li><a href="home.php">Home</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
		<form method="post">
					<div class="input-field">
						  <input id="search" type="search" name="search" required>
						  <label for="search"><i class="material-icons">search</i></label>
						  <i class="material-icons">close</i>
					</div>
				</form>
	</ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <center>
	<div>
		<?php
		include("connect.php");
		$id = $_SESSION["id"];
		$rec_id = 9;
		
		// Getting senders information
		$sql="SELECT FirstName FROM members where member_id='$id'";
		$result = mysqli_query($conn, $sql);
		$name = mysqli_fetch_assoc($result);
		$sender = $name['FirstName'];
		// Getting receivers information 
		$sql="SELECT FirstName FROM members where member_id='$rec_id'";
		$result = mysqli_query($conn, $sql);
		$name = mysqli_fetch_assoc($result);
		$receiver = $name['FirstName'];
		
		?>
		
	</div>
	   
  <div class="row">
    <form class="col s12" name="" method="post">
	<div class="input-field col s3"></div>
      <div class="row">
        <div class="input-field col s3">
          <input id="first_name" value=<?php echo $sender?> type="text" class="validate">
          <label for="first_name">From</label>
        </div>
        <div class="input-field col s3">
          <input id="first_name" value=<?php echo $receiver?> type="text" class="validate">
          <label for="last_name">To</label>
        </div>
      </div>
      <div class="row">
		   <div class="input-field col s3"></div>
			<div class="input-field col s6">
			  <i class="material-icons prefix">mode_edit</i>
			  <textarea id="icon_prefix2" class="materialize-textarea" name="message"></textarea>
			  <label for="icon_prefix2">Message</label>
			</div>
			<div class="input-field col s3"></div>
		  </div>
      <button class='waves-effect waves-light btn' type='submit' name="send">Send</button>
      	<?php 
				
				if (isset($_POST['send'])){
					$from = $id;
					$sendto = $rec_id;
					$message = $_POST['message'];
					mysqli_query($conn, "INSERT INTO messages (receiver, recipient, datetime, content, status)
								VALUES ('$from','$sendto',NOW(),'$message','unread')")or die(mysql_error());
								header('location:messageSent.php');
								
				}
		?>
    </form>
  </div>
        
</center>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
    <br><br>
	<div>
		 <table class="striped">
        <thead>
          <tr>
           
          </tr>
        </thead>

        <tbody>
	<?php
		include("connect.php");
	
	  ?>
        </tbody>
      </table>
	</div>
  </div>
   <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
      </div>
     <!-- <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
      </div> -->
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
 <!--     <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div> -->
	
    </div>
    <br><br>
  </div>
<footer class="page-footer red">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Exclusive Cars</h5>
          <p class="grey-text text-lighten-4">Your one stop shop to buy or sell your car!</p>
  </footer>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  

  </body>
</html>



