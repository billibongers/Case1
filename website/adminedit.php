<?php
	session_start();
	//$_SESSION["username"] = $_POST['edit_user'];
	//echo $_SESSION["editAdmin"];
	if(isset($_POST['submit']))
	{
		
		echo $_POST['testing'];
		echo "nah";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Edit Profile</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="red" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="home.php" class="brand-logo">Exclusive Cars</a>
       <ul class="right hide-on-med-and-down">
        <li><a href="logout.php">Log out</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="receivedMessage.php"><i class="material-icons">chat_bubble_outline</i></a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="profile.php">Profile</a></li>
      </ul>
       <ul class="right hide-on-med-and-down">
        <li><a href="home.php">Home</a></li>
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
        <div class="input-field col s6">
          <input placeholder="Leave empty if you don't want to change" id="first_name" name="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Leave empty if you don't want to change" id="last_name" name="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
    <div class="row">
        <div class="input-field col s12">
          <input placeholder="Leave empty if you don't want to change" id="username" name="username" type="text" class="validate">
          <label for="password">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Leave empty if you don't want to change" id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Leave empty if you don't want to change" id="address" name="address" type="text" class="validate">
          <label for="address">Address</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Leave empty if you don't want to change" id="num" name="num" type="text" class="validate">
          <label for="num">Contact No</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Leave empty if you don't want to change" id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Leave empty if you don't want to change" id="interests" name="interests" type="text" class="validate">
          <label for="interests">Interests</label>
        </div>
      </div>
      <div class="file-field input-field">
        <div class="btn">
          <span>Choose Profile Picture</span>
          <input type="file" name="propic" id="propic">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Upload image of product">
      </div>
    </div>
    <?php
	echo "<input type='hidden' value=".$_POST['adminEdit']." name='testing' id='testing'>";
    ?>
      <button class="waves-effect waves-light btn" type="submit" name="submit">submit<i class="material-icons right">send</i></button>
    </form>
  </div>
      </div>
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
