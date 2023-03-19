<html>
<?php 
    session_start();
    if(!isset($_SESSION['role']))
    {
        header('location: login.php');
    }
?>
<?php
		if($_POST) {
			$title = $_POST['title'];
			$message = $_POST['message'];
			$file = fopen("notifications.txt", "a");
			fwrite($file, $title . "\n");
			fwrite($file, $message . "\n\n");
			fclose($file);
			echo "<p>Notification created successfully!</p>";
		}
	?>
<html>
<head>
	<title>Create Notification</title>
</head>
<body>
    <fieldset>
	<legend><h1>Create Notification</h1></legend>
	<form method="post" action="createNotification.php">
		Title:
		       <input type="text" name="title" value="title"><br><br>
		Message: 
               <input type="text" name="message" value="message"><br><br>

		<input type="submit" value="Create">
	</form>
    </fieldset>
</body>
</html>

