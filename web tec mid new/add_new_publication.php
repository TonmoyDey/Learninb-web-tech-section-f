<?php 
    session_start();
    if(!isset($_SESSION['role']))
    {
        header('location: login.php');
    }
?><html>
<head>
	<title>Add New Publication</title>
</head>
<body>
	<h1>Add New Publication</h1>
	<?php
		if($_POST) {
			$bookName = $_POST['bookName'];
			$publicationName = $_POST['publicationName'];
			$file = fopen("addNewPublication.txt", "a");
			fwrite($file, $bookName . "," . $publicationName . "\n");
			fclose($file);
			echo "<p>New publication has been added.</p>";
		}
	?>
	
	<form method="post" action="add_new_publication.php">
		<label for="bookName">Book Name:</label>
		<input type="text" name="bookName"><br>
		
		<label for="publicationName">Publication Name:</label>
		<input type="text" name="publicationName"><br>
		
		<input type="submit" value="Add Publication">
        
	</form>
</body>
</html>
