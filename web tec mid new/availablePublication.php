<html>
<?php 
    session_start();
    if(!isset($_SESSION['role']))
    {
        header('location: login.php');
    }
?>
<head>
	<title>Available Publications</title>
</head>
<body>
    <fieldset>
	<legend><h1>Available Publications</h1></legend>
	<?php
		$file = fopen("addNewPublication.txt", "r");
		echo "<ul>";
		while(!feof($file)) {
			$line = fgets($file);
			if($line != "") {
				$parts = explode(",", $line);
				echo "<li>" . $parts[0] . " - " . $parts[1] . "</li>";
			}
		}
		echo "</ul>";
		fclose($file);
	?>
    </fieldset>
</body>
</html>
