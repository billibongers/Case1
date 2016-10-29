<?php
  require ("connect.php");  
?>  
	
<?php
	$ID =$_REQUEST['message_id'];
	mysqli_query($conn,"DELETE FROM messages WHERE message_id = '$ID'")
	or die(mysqli_error());  	
	header("Location: receivedMessage.php");
?>