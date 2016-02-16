<! DOCTYPE html>
<html lang="en">
	<head>
		<!-- Yuqing Guo ISTE240 Exercise 09 -->	
		<meta charset=utf-8 />  
		<title>EX09: PHP Part 3 - Authentication</title>
	</head>
	<body>
	
	<form name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    	<div>
    		<label for="username">Username</label>
    		<input type="username" name="username" placeholder="username" required>
  		</div>
  		<div>
  			<label for="password">Password</label>
       		<input type="password" name="password" placeholder="password" required>
       	</div>
       		<input type="submit" value="Login">
	</form>

	<?php
		// Identify the server information
		$servername = "localhost";
		$usernamedb ="yxg2464"; // better to prompt the user for this
		$passworddb = "fr1end"; // prompt the user for this too of course
		$dbname = "yxg2464"; // a database on your server
		
		$username = $_POST['username']; // database table column name 
		$password = $_POST['password']; // database table column name 
		$encryptPassword = sha1($password);
		
		// Create a connection to the server
		$conn = new mysqli($servername, $usernamedb, $passworddb, $dbname);
		
		// Check connection
		if ($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}
		
		// Create a query string
		$sql = "select username, password from auth24001YG
		where username = '$username' and password = '$encryptPassword'";
		
		// Execute the query on the server connection
		$result = $conn->query($sql);
		
		// Validate if username and password matches what's in the database
		// Check to see if results were found
		if ($result->num_rows > 0) {
			// Opens up a welcome message if the username and password matches
	    	echo "Welcome!";
		
		} // end if num_rows > 0
		else {
	    	echo "Please enter your username and password.";
		    //echo "The username or password you entered is incorrect. "; // Incorrect username and/or password.
			//echo "username: " . $username;
			//echo " password: " . $password;
		}
		
		$conn->close(); // close the connection to the database on the server
	?>
	
	</body>
</html>