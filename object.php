
<?php

$id = $_REQUEST['id'];

$title = '';
$event = '';
$description = '';
$code = '';
$date = '';

if ($id == 1){ 
	$title = "Barn Event";
	$event = "Barn Bash Summer Nights";
	$description = "Restless Heart";
	$code = "alert(This is a message)";
	$date = "August 25, 2017";
}
elseif ($id == 2){

	$title = "Barn Event";
	$event = "Labor Day Barn Bash";
	$description = "David Phelps";
	$code = "alert(This is a message)";
	$date = "September 4, 2017";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<h1><?php echo $event; ?></h1>
		<p><?php echo $description; ?></p>
		<pre>
			<?php echo $code; ?>
		</pre>
		<p>Date: <?php echo $date; ?></p>
	</body>
</html>