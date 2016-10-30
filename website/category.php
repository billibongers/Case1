<?php
	if(isset($_POST['submit']))
	{
		include("connect.php");
		$category = $_POST['category'];
		
		$sql = "INSERT INTO categories (category) VALUES ('$category')";
		$result = mysqli_query($conn, $sql);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Login</title>

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
        <li><a href="admin.php">Home</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
    <br><br>
       <div class="row">
    <form class="col s12" method="post" action="">
    <div class="row">
        <div class="input-field col s12">
          <input id="category" name="category" type="text" class="validate">
          <label for="category">Category</label>
        </div>
      </div>
      <button class="waves-effect waves-light btn" type="submit" name="submit">submit<i class="material-icons right">send</i></button>
    </form>
    <div>
		 <?php
	
	echo	"<table class='striped'>";
	echo "<thead>";
	echo "<tr>";
	echo  "<th data-field='id'>Category</th>";
	echo "<th data-field='price'>Delete</th>";
     
	echo "</tr>";
	echo "</thead>";

	echo "<tbody>";
	include("connect.php");
	$id = $_SESSION["id"];
	$sql = "SELECT * FROM categories";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result))
	{
		
		echo "<tr>";
		echo "<td>".$row['category']."</td>";
		echo "<td><form class='col s12' method='post' action='deletecategory.php'><input type='hidden' value=".$row['id']." name='delete_cat' id='delete_cat'><button class='waves-effect waves-light btn' type='submit' name=".$row['id']."'>Delete</button></form></td>";
		echo "</tr>";
	}
		
	echo "</tbody>";
	echo "</table>";
	

	  ?>
      </div>
  </div>
      </div>
     <!-- <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
      </div> -->
      <br><br>
      

    </div>
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
