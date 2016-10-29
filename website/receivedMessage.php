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
		$rec_id = 10;
		
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
    
      	<?php 
				
				$member_id = $_SESSION['id'];
									$post = mysqli_query($conn, "SELECT * FROM messages WHERE recipient = '$id' ORDER by datetime DESC")or die(mysqli_error());
									while($row = mysqli_fetch_array($post)){
										$id = $row['receiver'];
										//$_SESSION['reply'] = $id;
										//echo 'This is sim';
										//echo $_SESSION['reply'];
										$hu_u = mysqli_query($conn, "SELECT * FROM members WHERE member_id = '$id'")or die(mysql_error());
										$rows = mysqli_fetch_array($hu_u);
										$iyaid = $row['message_id'];
										echo'<div class="information">';
										echo'<hr width=640>
										</br>';
											$sql=mysqli_query($conn, "SELECT * FROM members WHERE member_id='$id'") or die(mysql_error());
											
											$getpic=mysqli_fetch_array($sql);
										echo "<input type='hidden' value='".$row['message_id']."' name='cantseeme'/>
											<div>
												<div class='picofjoke'>
													From:   <img src='".$getpic['profImage']."' width='50' height ='50' alt=''/>".' '.$getpic['FirstName']." ".$getpic['LastName']."</div>
												<div class = 'postcon'><br />
												".$row['content']."<br />
												<br />
												Message received on ".$row['datetime']."<hr width='640'> 
												<a href='replies.php?id=".$row['message_id']."' rel='facebox' style='text-decoration:none;'></a>
												
												<a href='deletemessage.php?message_id=".$row['message_id']."' style='text-decoration:none;'><button class='waves-effect waves-light btn'>Delete</button></a>
												<form action='reply.php' method='post'>
													<input type='hidden' name='replyTo' value='".$getpic['member_id']."'/>
													</br>
													<button class='waves-effect waves-light btn' type='submit'>Reply</button>
												</form>
												</br>
												</div>
											</div>";
											
									}
		?>

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



