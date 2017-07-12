<?php 

//database connection credentials
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

//create connection
$connection = new mysqli($servername, $username, $password);

//check for connection errors
if ($connection->connect_error) {
	echo 'Connection failed: ' . $connection->connect_error;
	exit;
}

//otherwise, connected successfully!
//echo 'Connected successfully!';

// connect to the fitl database
$connection->select_db('fitl');

?>