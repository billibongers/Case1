<?php

	include('connect.php');
	$id = $_SESSION['id'];
	$query = "SELECT FirstName from members where member_id='$id'";
	$run = mysqli_query($conn,$query);
	$result = mysqli_fetch_assoc($run);
	$name = $result['FirstName'];

	echo '
		<nav class="red" role="navigation">
			<ul><li>';
			
				echo "Welcome ".$name;
			echo '</li></ul>
		    <div class="nav-wrapper container"><a id="logo-container" href="home.php" class="brand-logo">Exclusive Cars</a>
			    
		      <ul class="right hide-on-med-and-down">
			<li><a href="logout.php">Log out</a></li>
		      </ul>
			  <ul class="right hide-on-med-and-down">
			<li><a href="likes.php"><i class="material-icons">thumb_up</i></a></li>
		      </ul>
		      <ul class="right hide-on-med-and-down">
			<li><a href="receivedMessage.php"><i class="material-icons">chat_bubble_outline</i></a></li>
		      </ul>
			   <ul class="right hide-on-med-and-down">
			<li><a href="wishlist.php">Wishlist</a></li>
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
		<li><a href="#">Exclusive Cars</a></li>;
	  <li><a href="home.php">Home</a></li>";
	  <li><a href="profile.php">Profile</a></li>";
	  <li><a href="receivedMessage.php">Messages</a></li>";
	  <li><a href="wishlist.php">Wishlist</a></li>";
			</ul>
		<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
	  </nav>';
?>