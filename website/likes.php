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
  <?php require "head.php"; ?>
  <center>
	<div>
		
	</div>
	   
	 <?php
		include("connect.php");
		
		$sid = $_SESSION['id'];
		//$query="SELECT memberidOfLiked FROM wishlist where idOfUserPosted ='$sid'";
		$query="SELECT * FROM wishlist";
		$result1 = mysqli_query($conn, $query);
		//$array = mysqli_fetch_assoc($result1);
		//$idOfMemWhoLiked = $array['memberidOfLiked'];
		//$size = count($array);
		$count =0;
		echo "<tbody>";
		while($row = mysqli_fetch_assoc($result1))
		{
			if($row['idOfUserPosted'] == $sid)
			{
				$sessionid= $row['memberidOfLiked'];
				$sql = "SELECT * FROM members WHERE member_id= '$sessionid'";
				$result2 = mysqli_query($conn, $sql);
				
				while($row2 = mysqli_fetch_assoc($result2))
				{
					echo "<tr>";
					echo "<br/>";
					echo "<td>Name: ".$row2['FirstName']." "."".$row2['LastName']."<ul class='collapsible' data-collapsible='accordion'></td>"; 
					echo "<td><form class='col s12' method='post' action='createmessage.php'><input type='hidden' value=".$row2['member_id']." name='poster_id' id='poster_id'><button class='waves-effect waves-light btn' type='submit' name=".$row2['member_id']."'>Contact</button></form></td>";
					echo "</tr>";
				}
			}
		}
		
		
		// while($count < $size)
		// {	
			// $sessionid= $idOfMemWhoLiked[$count];
			// $sql = "SELECT * FROM members WHERE member_id= '$sessionid'";
			// $result2 = mysqli_query($conn, $sql);
			
			// while($row = mysqli_fetch_assoc($result2))
			// {
       			// if($row['idOfUserPosted'] == $sid)
				// echo "<tr>";
				// echo "<br/>";
				// echo "<td>Name: ".$row['FirstName']." "."".$row['LastName']."<ul class='collapsible' data-collapsible='accordion'></td>"; 
				// echo "<td><form class='col s12' method='post' action='createmessage.php'><input type='hidden' value=".$row['member_id']." name='poster_id' id='poster_id'><button class='waves-effect waves-light btn' type='submit' name=".$row['member_id']."'>Contact</button></form></td>";
				// echo "</tr>";
			// }
			// $count = $count +1;
		// }
		echo "</tbody>";
		
	 ?>
        
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



