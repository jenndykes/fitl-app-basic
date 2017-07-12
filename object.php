
<?php

$id = $_REQUEST['id'];

$object = array('title' => '', 'event' => '', 'description' => '', 'code' => '', 'date' => '', );

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

//query to select the object
$sql = 'SELECT * FROM events WHERE id = ' . $id;

//execute the query
$result = $connection->query($sql);

//check for and retrieve the object
if ($result->num_rows > 0) {
	$object = $result->fetch_assoc();
	//echo '<pre>';   //<pre> is used to display code in a readable format
	//print_r($object);
	//echo '</pre>';
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object['event_name']; ?></title>
	</head>
	<body>
		<h1><?php echo $object['event_name']; ?></h1>
		<p><?php echo $object['notes']; ?></p>
		<p><?php echo $object['location']; ?></p>
		<p>Date: <?php echo $object['date']; ?></p>
		<p>Time: <?php echo $object['time']; ?></p>
		<p><?php echo $object['event_budget']; ?></p>
		<p><?php echo $object['ticket_vendor']; ?></p>
		<p><?php echo $object['tickets_sold']; ?></p>
	</body>
</html>