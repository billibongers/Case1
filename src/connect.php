
<?php
/*define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'hello');*/

$mysqli = new mysqli ('localhost', 'root', '','hello');
	if(!$mysqli){
		die('Could not connect: ' . mysql_error());
	}
	
?>
