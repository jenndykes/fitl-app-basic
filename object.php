
<?php

$id = $_REQUEST['id'];

$object = array('title' => '', 'event' => '', 'description' => '', 'code' => '', 'date' => '', );

if ($id == 1){ 
	$object =  array(
		'title' => 'Barn Event', 
		'event' => 'Barn Bash Summer Nights',
		'description' => 'Restless Heart',
		'code' => 'alert(This is a message)',
		'date' => 'August 25, 2017',
		);
	}
elseif ($id == 2){

	$object =  array(
		'title' => 'Barn Event', 
		'event' => 'Labor Day Barn Bash',
		'description' => 'David Phelps',
		'code' => 'alert(This is a message)',
		'date' => 'September 4, 2017',
		);
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object['title']; ?></title>
	</head>
	<body>
		<h1><?php echo $object['event']; ?></h1>
		<p><?php echo $object['description']; ?></p>
		<pre>
			<?php echo $object['code']; ?>
		</pre>
		<p>Date: <?php echo $object['date']; ?></p>
	</body>
</html>