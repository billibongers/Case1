<?php
	session_start();
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
    <div class="nav-wrapper container"><a id="logo-container" href="home.php" class="brand-logo">Exclusive Cars</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="logout.php">Log out</a></li>
      </ul>
        <ul class="right hide-on-med-and-down">
        <li><a href="profile.php">Profile</a></li>
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
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
    <br><br>
	<div>
	<!--	 <table class="striped">
        <thead>
          <tr>
              <th data-field="id">Product Image</th>
              <th data-field="name">Product Overview</th>
              <th data-field="price">Contact Seller</th>
          </tr>
        </thead>

        <tbody> -->
	<?php
		$displayed = false;
		if(!isset($_POST['search']))
		{
			echo	"<table class='striped'>";
			echo "<thead>";
			echo "<tr>";
              echo  "<th data-field='id'>Seller</th>";
              echo  "<th data-field='id'>Product Image</th>";
              echo  "<th data-field='name'>Product Overview</th>";
              echo "<th data-field='price'>Contact Seller</th>";
		echo "</tr>";
       echo "</thead>";

       echo "<tbody>";
				include("connect.php");
				$sql = "SELECT * FROM adverts ORDER BY id DESC";
				$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($result))
				{
          $id = $row['member_id'];
          $sql2 = "SELECT * FROM members WHERE member_id = '$id'";
          $result2 = mysqli_query($conn,$sql2);
          $row2 = mysqli_fetch_assoc($result2);
       
				 echo "<tr>";
            echo "<td>Name: ".$row2['UserName']."<br><img width=150 height=150 alt='Unable to View' src = '".$row2['location']."'></td>";
				    echo "<td><img width=150 height=150 alt='Unable to View' src = '".$row['location']."'></td>";
				    echo "<td>Product Name: ".$row['name']."<br>Price: R".$row['price']."<ul class='collapsible' data-collapsible='accordion'>
		    <li>
		      <div class='collapsible-header'>View More</div>
		      <div class='collapsible-body'><p>".$row['product_description']."</p></div>
		    </li></td>";
				   echo "<td><form class='col s12' method='post' action='createmessage.php'><input type='hidden' value=".$row['member_id']." name='poster_id' id='poster_id'><button class='waves-effect waves-light btn' type='submit' name=".$row['member_id']."'>Contact</button></form></td>";
				  echo "</tr>";
				  }
		}
		else
		{
			include("connect.php");
			$searchTerm = $_POST['search'];
			$sql = "SELECT * FROM adverts WHERE name LIKE '%$searchTerm%'";
			
			echo	"<table class='striped'>";
			echo "<thead>";
			echo "<tr>";
			echo  "<th data-field='id'>Product Image</th>";
			echo  "<th data-field='name'>Product Overview</th>";
			echo "<th data-field='price'>Contact Seller</th>";
			echo "</tr>";
			echo "</thead>";
			echo "<tbody>";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) != 0)
			{
				$displayed = true;
				while($row = mysqli_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td><img width=150 height=150 alt='Unable to View' src = '".$row['location']."'></td>";
					echo "<td>Product Name: ".$row['name']."<br>Price: R".$row['price']."<ul class='collapsible' data-collapsible='accordion'>
						<li>
						<div class='collapsible-header'>View More</div>
						<div class='collapsible-body'><p>".$row['product_description']."</p></div>
						</li></td>";
					echo "<td><form class='col s12' method='post' action='createmessage.php'><input type='hidden' value=".$row['member_id']." name='poster_id' id='poster_id'><button class='waves-effect waves-light btn' type='submit' name=".$row['member_id']."'>Contact</button></form></td>";
					echo "</tr>";
				}
			}
			else
			{
				$sql = "SELECT * FROM adverts WHERE category LIKE '%$searchTerm%'";
				$result = mysqli_query($conn, $sql);
				
				if(mysqli_num_rows($result) != 0)
				{
					$displayed = true;
					while($row = mysqli_fetch_assoc($result))
					{
						echo "<tr>";
						echo "<td><img width=150 height=150 alt='Unable to View' src = '".$row['location']."'></td>";
						echo "<td>Product Name: ".$row['name']."<br>Price: R".$row['price']."<ul class='collapsible' data-collapsible='accordion'>
							<li>
							<div class='collapsible-header'>View More</div>
							<div class='collapsible-body'><p>".$row['product_description']."</p></div>
							</li></td>";
						echo "<td><form class='col s12' method='post' action='createmessage.php'><input type='hidden' value=".$row['member_id']." name='poster_id' id='poster_id'><button class='waves-effect waves-light btn' type='submit' name=".$row['member_id']."'>Contact</button></form></td>";
						echo "</tr>";
					}
				}
				else
				{
				
					$sql = "SELECT * FROM members WHERE UserName LIKE '%$searchTerm%'";
					$result = mysqli_query($conn, $sql);
					if(mysqli_num_rows($result) != 0)
					{
						$displayed = true;
						while($row = mysqli_fetch_assoc($result))
						{
							$id = $row['member_id'];
							echo $id;
							$sql2 = "SELECT * FROM adverts WHERE member_id = '$id'";
							$result2 = mysqli_query($conn, $sql2);
							echo mysqli_num_rows($result);
							
							while($row2 = mysqli_fetch_assoc($result2))
							{
								echo "<tr>";
								echo "<td><img width=150 height=150 alt='Unable to View' src = '".$row['location']."'></td>";
								echo "<td>Product Name: ".$row2['name']."<br>Price: R".$row2['price']."<ul class='collapsible' data-collapsible='accordion'>
									<li>
									<div class='collapsible-header'>View More</div>
									<div class='collapsible-body'><p>".$row2['product_description']."</p></div>
									</li></td>";
								echo "<td><form class='col s12' method='post' action='createmessage.php'><input type='hidden' value=".$row2['member_id']." name='poster_id' id='poster_id'><button class='waves-effect waves-light btn' type='submit' name=".$row2['member_id']."'>Contact</button></form></td>";
								echo "</tr>";
							}
							
						}
					}
				}
			}
			echo "</tbody>";
			echo "</table>";
			
			if(!$displayed)
				echo "No search results";
		}
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
