<style>
    form {
        margin: 20px;
        padding: 20px;
        border: 1px solid black;
        border-radius: 5px;
    }

    input[type="text"], input[type="submit"] {
        padding: 5px;
        margin: 5px;
        border-radius: 3px;
        border: 1px solid grey;
    }

    input[type="submit"] {
        background-color: green;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: darkgreen;
    }

    div {
        margin: 10px;
        padding: 10px;
        border-radius: 3px;
    }

    div.color-red {
        background-color: pink;
        color: red;
    }

    div.color-green {
        background-color: lightgreen;
        color: green;
    }
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
		<legend> <h1>Notifications</h1></legend>
		<form action="../controllers/viewNotificationHandler.php" method="post">
			<table>
				<tr>
					<th>Title</th>
					<th>Description</th>
				</tr>
				<?php foreach($notifications as $notification): ?>
					<tr>
						<td><?php echo $notification['title']; ?></td>
						<td><?php echo $notification['description']; ?></td>
					</tr>
				<?php endforeach; ?>
			</table>
		</form>
	</fieldset>
</body>
</html>

		
