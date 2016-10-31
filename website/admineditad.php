<?php
	session_start();
	if(isset($_POST['edit_ad']))
	{
		$_SESSION["adminad"] = $_POST['edit_ad'];
		echo $_SESSION["adminad"];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Sign Up</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="red" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo">Exclusive Cars</a>
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
    <form class="col s12" method="post" action="change.php">
    <div class="row">
        <div class="input-field col s12">
          <input id="productname" name="productname" type="text" class="validate">
          <label for="password">Product Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="price" name="price" type="text" class="validate">
          <label for="price">Price</label>
        </div>
      </div>
          <div class="input-field col s12">
    <select  name="cat" id="cat">
      <option value="" disabled selected>Choose your category</option>
      <?php
		include("connect.php");
		$sql = "SELECT * FROM categories";
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result))
			echo "<option value=".$row['category'].">".$row['category']."</option>";

      ?>
    </select>
    <label>Materialize Select</label>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
     $(document).ready(function() {
        $('select').material_select();
    });
  </script>
      <div class="row">
        <div class="input-field col s12">
          <input id="description" name="description" type="text" class="validate">
          <label for="description">Product Description</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="condition" name="condition" type="text" class="validate">
          <label for="condition">Product Condition</label>
        </div>
      </div>
          <div class="file-field input-field">
      <div class="btn">
        <span>Browse</span>
        <input type="file" name="image" id="image">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload image of product">
      </div>
         <?php
	echo "<input type='hidden' value=".$_SESSION["adminad"]." name='adID' id='adID'>";
    ?>
    </div>
      <button class="waves-effect waves-light btn" type="submit" name="submit">submit<i class="material-icons right">send</i></button>
</div>
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
