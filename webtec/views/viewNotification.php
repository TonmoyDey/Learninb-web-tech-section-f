<style>
    table {
        border-collapse: collapse;
        width: 50%;
        font-family: Arial, sans-serif;
    }
    th, td {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
 
</style>
<?php
require_once '../models/notification.php';

$notificationObj = new Notification();
$notifications = $notificationObj->getNotifications();

?>
<html>
<head>
	<title>View Notifications</title>
</head>
<body>
	<fieldset>
		<legend>Notifications</legend>
		<form action="../controllers/viewNotificationHandler.php" method="post">
			<table>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Description</th>
				</tr>
				<?php foreach($notifications as $notification): ?>
					<tr>
						<td><?php echo $notification['id']; ?></td>
						<td><?php echo $notification['title']; ?></td>
						<td><?php echo $notification['description']; ?></td>
					</tr>
				<?php endforeach; ?>
			</table>
		</form>
	</fieldset>
</body>
</html>