<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" type="image/png" href="assets/image/samplelogo.png"/>	
			<title> Retreat - Booking </title>
	</head>
	<body>			
		<?php
			$servername = 'localhost';
			$username = 'group5';
			$password = 'fr1end';
			$dbname = 'group5';

			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$roomType = $_POST['roomType'];
			$nights = $_POST['nights'];
			$date = $_POST['date'];

			$conn = new mysqli($servername, $username, $password, $dbname);

			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT id FROM retreatBooking WHERE dateFrom = '$date' AND room = '$roomType'";
			$result = $conn->query($sql);
			$row_cnt = $result->num_rows;

			if($row_cnt > 0){
				$message = "The room selected is unavailable on this date, please try another one.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			else{
				$query = "
				INSERT INTO `group5`.`retreatBooking` (`id`, `firstName`, `lastName`, `room`, `dateFrom`, `email`, `nights`) VALUES (NULL, '$fname', '$lname', '$roomType', '$date', '$email', '$nights');";
				
				$conn->query($query);

				$sql = "SELECT id FROM retreatBooking WHERE firstName = '$fname' AND lastName = '$lname' AND  email = '$email' ";
				$result = $conn->query($sql);

				$row = $result->fetch_assoc();

				$message = "The room has been booked successfuly.\\n\\nThe confirmation number is: " . $row['id'];
				echo "<script type='text/javascript'>alert('$message');</script>";
			}

			echo "<script language=\"javascript\">\n";
			echo "window.location=\"retreatBooking.php\";";
			echo "</script>";

	        $conn->close();
		?>			
	</body>
</html>

