<?php

include 'db-connection.php';

$page = $_REQUEST['page'];

//determine which page to show
if ($page == 'show') {

	$id = $_REQUEST['id'];
	show($id);
}
elseif ($page == 'create') {

	create();
}

//load the show page
function show($id) {
	global $connection;

	$object = array('title' => '', 'event' => '', 'description' => '', 'code' => '', 'date' => '', );

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

	//load the view file
	include 'event-show-view.php';
}

function create() {
	include 'event-create-view.php';
}


?>