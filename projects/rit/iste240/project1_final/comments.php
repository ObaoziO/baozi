<!DOCTYPE html>
<html>
	<head>
		<title>Comments</title>

		<?php 
			include 'header.php';
		?>
			
			<h1> Comments </h1>
			
			</div> <!-- end id="siteheader" -->
			
			<div id="content">
				<div id="containerBig">
				
				
					<div class="commentsform">
		
						<!-- add empty fields for each (id - optional/not needed), Name, and Comment to enter new data-->
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
							<div>
								<label for="Name">Name:</label>
								<input type="text" name="Name" size="30" />
							</div>
							<div>
								<label for="Comment">Comment:</label>
								<textarea name="Comment" rows="3" cols="30"></textarea>
							</div>

							<p> <!-- submit button-->
								<input type="submit"  name="submit"  value=" Submit Comment"/>
							</p>
						</form>

					</div> <!-- end class="container"-->

					<?php

						// Identify the server information
						$servername = "localhost";
						$username = "yxg2464"; // better to prompt the user for this
						$password = "fr1end"; // prompt the user for this too of course
						$dbname = "yxg2464"; // a database on your server
						$Name = $_POST['Name'];
						$Comment = $_POST['Comment'];

						// Create a connection to the server
						$conn = new mysqli($servername, $username, $password, $dbname);


						// Check connection
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						} 

						
						// insert (new) data into table
						$sql = " INSERT INTO finalcomments (Name, Comment) 
							     VALUES ('$Name', '$Comment') "; 
						
						$stat = $conn->prepare($sql); 
						$stat->execute();
						
						// Create a query string
						$sql = "SELECT Name, Comment FROM finalcomments";
						
						// Execute your query on the server connection
						$result = $conn->query($sql);

					?>


					<div class="comments">
						<?php
							// Check to see if results were found
							if ($result->num_rows > 0) {

							    // output data of each row
							    while($row = $result->fetch_assoc()) {
									echo "Name: " . $row["Name"] . "<br>";
									echo "Comment: " . $row["Comment"] . "<br>" . "<br>";
								} // end while fetch_assoc
								
							} // end if num_rows
							else {
							    echo "0 results"; // NO results were found in the query
							}
						?>
					</div> <!-- end class="comments" -->


					<?php
						
						$conn->close(); // close the connection to the database on the server

					?>

					
				</div> <!-- end id="containerBig" -->
			</div> <!-- end id="content" -->
		
		<?php 
			include 'footer.php';
		?>

		</div> <!-- end id="wrapper" -->
	</body>
</html>