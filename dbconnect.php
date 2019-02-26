<?php
include_once 'dbconfig.php';
$connection = new mysqli('p:localhost', 'root', 'aaron' , 'BookingIA');
// Create connection
//Check for connection
if ($connection->connect_error){
	die("Connection Error: ". $connection->connect_error);
}
?>
