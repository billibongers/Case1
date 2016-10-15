
<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'abc123');
define('DB_NAME', 'hello');

$mysqli = new mysqli (DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if(!$mysqli){
		die('Could not connect: ' . mysql_error());
	}
	
?>
