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