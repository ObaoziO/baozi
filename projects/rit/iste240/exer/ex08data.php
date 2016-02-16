<!DOCTYPE html>
<html lang = "en">
	<head>
		<!-- Yuqing Guo ISTE.240 Exercise 08 -->	
		<meta charset=utf-8 />  
		<title>exo - Exercise 08</title>
	</head>
	<body>
	
	<?php

	// Identify the server information
	$servername = "localhost";
	$username = "yxg2464"; // better to prompt the user for this
	$password = "fr1end"; // prompt the user for this too of course
	$dbname = "yxg2464"; // a database on your server
	$id = $_POST['id'];
	$name = $_POST['name'];
	$comment = $_POST['comment'];

	// Create a connection to the server
	$conn = new mysqli($servername, $username, $password, $dbname);


	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	
	// insert (new) data into table
	$sql = " INSERT INTO comments (id, name, comment) 
		     VALUES ('$id', '$name', '$comment') "; 
	
	$stat = $conn->prepare($sql); 
	$stat->execute();
	
	// Create a query string
	$sql = "SELECT id, name, comment FROM comments";
	
	// Execute your query on the server connection
	$result = $conn->query($sql);

	// Check to see if results were found
	if ($result->num_rows > 0) {

	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "ID: " . $row["id"] . "<br>";
			echo "Name: " . $row["name"] . "<br>";
			echo "Comment: " . $row["comment"] . "<br>" . "<br>";
		} // end while fetch_assoc
	
    	//echo "ID: " . $id . "<br>";
		//echo "Name: " . $name . "<br>";
		//echo "Comment: " . $comment . "<br>" . "<br>";
		
	} // end if num_rows
	else {
	    echo "0 results"; // NO results were found in the query
	}
	
	$conn->close(); // close the connection to the database on the server

	?>
	
	
	</body>
</html>