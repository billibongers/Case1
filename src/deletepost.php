<?php
	if (isset($_GET['id']))
	{
		require("connect.php"); 

		/*$con = mysql_connect("127.0.0.1", "root", "rayban");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		
		mysql_select_db("db", $con);*/
		$comment_id = $_GET['id'];
		
		mysqli_query($mysqli,"DELETE FROM comment WHERE comment_id='$comment_id'");
		header("location: Home.php");
		exit();
		
		mysql_close($mysqli);
	}
			?>