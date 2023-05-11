<!DOCTYPE html>
<html>
<head>
	<title>Formula 1 Racing - Circuits</title>
	<style>
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		header {
			font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
			color: #f1f1f1;
            background-color: #e91919;
            padding: 20px;
            text-align: center;
            display: flex;
            align-items: center;
        }
        header img {
            height: 50px;
            margin-right: 20px;
        }
		h1 {
			margin: 0;
		}
		nav {
			background-color: #333;
			color: #fff;
			display: flex;
			justify-content: space-between;
			padding: 10px 20px;
		}
		nav a {
			color: #fff;
			text-decoration: none;
			margin: 0 10px;
			padding: 10px;
			border-radius: 5px;
			transition: background-color 0.2s;
		}
		nav a:hover {
			background-color: #555;
		}
		.container {
			max-width: 800px;
			margin: 20px auto;
			padding: 0 20px;
		}
		.row {
			display: flex;
			flex-wrap: wrap;
			margin: 10px -10px;
		}
		.col {
			flex: 1;
			margin: 10px;
		}
		.card {
			background-color: #f1f1f1;
			padding: 20px;
			border-radius: 5px;
		}
		h2 {
			margin-top: 0;
		}
		.search-container {
			display: flex;
			align-items: center;
			margin-bottom: 20px;
		}
		.search-box {
			flex: 1;
			padding: 10px;
			border: none;
			border-radius: 5px;
			margin-right: 10px;
		}
		.search-button {
			background-color: #555;
			color: #fff;
			border: none;
			padding: 10px;
			border-radius: 5px;
			cursor: pointer;
		}
		select {
			padding: 10px;
			border: none;
			border-radius: 5px;
			margin-left: 10px;
			cursor: pointer;
		}
		table {
			border-collapse: collapse;
			width: 50%;
			margin-top: 50px;
		}
		th, td {
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}
		th {
			background-color: #ccc;
		}
	</style>
</head>
<body>
	<header>
		<img src="logo.jpeg" alt="Formula 1 Racing Logo">
		<h1>Formula 1 Racing</h1>
		<p style="font-size:larger"><br> &nbsp Experience the thrill of speed and precision in the world's most advanced racing sport</p>
	
		</header>
	<nav>
	<a href="test.html">Home</a>
		<a href="Drivers.php">Drivers</a>
		<a href="Teams.php">Teams</a>
		<a href="circuits.php">Circuits</a>
	</nav>
	<form method="POST">
		<label for="circuits">Select a Circuit:</label>
		<select name="circuits" id="circuits">
			<option value="">-- Select a Circuit --</option>
			<option value="Monza">Monza</option>
			<option value="Suzuka">Suzuka</option>
			<option value="Spa-Francorchamps">Spa-Francorchamps</option>
			
		</select>
		<input type="submit" name="search" value="Search">
	</form>
	<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if (isset($_POST['search'])) {
		$circuit = $_POST['circuits'];
		$query = "SELECT * FROM circuits WHERE name='$circuit'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) > 0) {
			echo '<table>';
			echo '<tr><th>Circuit Name</th><th>Location</th><th>Fastest Lap</th></tr>';
			while ($row = mysqli_fetch_assoc($result)) {
				echo '<tr>';
				echo '<td>' . $row['name'] . '</td>';
				echo '<td>' . $row['location'] . '</td>';
				echo '<td>' . $row['fastest lap'] . '</td>';
				echo '</tr>';
			}
			echo '</table>';
		} else {
			echo 'No circuits found.';
		}
	}
	mysqli_close($conn);
	
	?>
		
	<script>
		 searchBtn = document.getElementById('search-btn');
 

functionToExecute() {
	searchResults = document.getElementById('search-results');
  
  searchResults.style.display = 'block';
}

	</script>
</body>
</html>
                