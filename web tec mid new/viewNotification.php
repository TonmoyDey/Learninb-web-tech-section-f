<?php 
    session_start();
    if(!isset($_SESSION['role']))
    {
        header('location: login.php');
    }
?>
<html>
<body><fieldset>
	<legend><h1>View Notifications</h1></legend>
	<?php
		$file = fopen("notifications.txt", "r");
		while(!feof($file)) {
			$title = fgets($file);
			$message = fgets($file);
			if($title != "") {
				echo  $title;
				echo "<p>" . $message . "</p><br>";
			}
		}
		fclose($file);
	?>
    </fieldset>
</body>
</html>
