<html>
<html>
<head>
	<title>Admin Dashboard</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		h1 {
			font-size: 24px;
			margin-top: 20px;
			margin-bottom: 10px;
		}

		ul {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		li {
			margin-bottom: 5px;
		}

		li a {
			display: block;
			padding: 10px;
			background-color: lightblue;
			text-decoration: none;
			color: black;
			border-radius: 5px;
		}

		li a:hover {
			background-color: lightgreen;
			color: white;
			transition: all 0.3s ease-in-out;
		}

		fieldset {
			border: 2px solid black;
			border-radius: 5px;
			margin: 10px;
			padding: 10px;
		}

		legend {
			font-weight: bold;
			font-size: 18px;
		}
	</style>
</head>
<body>
	<fieldset>
		<legend><h1>ADMIN DASHBOARD</h1></legend>

		<fieldset>
			<legend><h3>Reservation</h3></legend>
			<ul>
				<li><a href="display.php">Item Available</a></li>
				<li><a href="reservation_check_publication.php">Reservation Check</a></li>
				<li><a href="reservation.php"> Insert Reservation</a></li>
			</ul>
		</fieldset>

		<fieldset>
			<legend><h3>Notification</h3></legend>
			<ul>
				<li><a href="createNotification.php">Create Notification</a></li>
				<li><a href="viewNotification.php">View Notification</a></li>
			</ul>
		</fieldset>

		<fieldset>
			<legend><h3>Search</h3></legend>
			<ul>
				<li><a href="search_publication.php">Search</a></li>
			</ul>
		</fieldset>

		<fieldset>
			<legend><h3>Publication</h3></legend>
			<ul>
				<li><a href="add_publication.php">Add New Publication</a></li>
			</ul>
		</fieldset>

		<fieldset>
			<legend><h3>Borrow and Return</h3></legend>
			<ul>
				<li><a href="borrow_return.php">Borrow and Return</a></li>

			</ul>
		</fieldset>

	</fieldset>
</body>
</html>
