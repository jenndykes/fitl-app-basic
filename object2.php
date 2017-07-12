<?php
$title = "Barn Event";
$event = "Labor Day Barn Bash";
$description = "David Phelps";
$code = "alert(This is a message)";
$date = "September 4, 2017";
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