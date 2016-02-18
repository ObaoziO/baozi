<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" type="image/png" href="assets/image/samplelogo.png"/>	
		<title> Massage - Appointment </title>
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
			$instructor = $_POST['instructor'];
			$massageType = $_POST['massageType'];
			$massageLength = $_POST['massageLength'];
			$date = $_POST['date'];

			$conn = new mysqli($servername, $username, $password, $dbname);

			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT id FROM massageAppointment WHERE date = '$date' AND instructor = '$instructor'";
			$result = $conn->query($sql);
			$row_cnt = $result->num_rows;

			if($row_cnt > 0){
				$message = "This instructor is unavailable at this date and time, please try another one or get in touch with our Appointment Supervisor.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			else{
				$day = date('d', strtotime($date));
				$month = date('m', strtotime($date));
				$year = date('Y', strtotime($date));
				$jd = GregorianToJD($month, $day, $year);
				$dayOfWeek = JDDayOfWeek ($jd,0);

				if($instructor === 'Marry Pendleton' && $dayOfWeek === 0){
					$message = "This instructor is unavailable on Sundays, please try another day or get in touch with our Appointment Supervisor.";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
				elseif($instructor === 'Marry Pendleton' && $dayOfWeek === 2 || $dayOfWeek === 4){
					$message = "This instructor is unavailable on Tuesdays and Thursdays, please try another day or get in touch with our Appointment Supervisor.";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
				elseif($instructor === 'Claudette Hester' && $dayOfWeek === 1 || $dayOfWeek === 3 || $dayOfWeek === 5){
					$message = "This instructor is unavailable on Mondays, Wednesdays and Fridays, please try another day or get in touch with our Appointment Supervisor.";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
				elseif($instructor === 'Claudette Hester' && $dayOfWeek === 6){
					$message = "This instructor is unavailable on Saturdays, please try another day or get in touch with our Appointment Supervisor.";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}

				else{
					$query = "
					INSERT INTO `group5`.`massageAppointment` (`id`, `firstName`, `lastName`, `instructor`, `date`, `email`, `massageLength`,
					`massageType`) VALUES (NULL, '$fname', '$lname', '$instructor', '$date', '$email', '$massageLength',
					'$massageType');";
					
					$conn->query($query);

					$sql = "SELECT id FROM massageAppointment WHERE firstName = '$fname' AND lastName = '$lname' AND  email = '$email' ";
					$result = $conn->query($sql);

					$row = $result->fetch_assoc();

					$message = "The appointment has been made successfuly.\\n\\nThe confirmation number is: " . $row['id'];
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
			}

			echo "<script language=\"javascript\">\n";
			echo "window.location=\"massageAppointment.php\";";
			echo "</script>";

	        $conn->close();
		?>			
	</body>
</html>

