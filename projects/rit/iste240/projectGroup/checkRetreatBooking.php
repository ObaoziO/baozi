<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" type="image/png" href="assets/image/samplelogo.png"/>	
		<link rel="stylesheet" href="assets/css/generalLayout.css" type="text/css">	
		<link rel="stylesheet" href="assets/css/navstyle.css" type="text/css">
		<title> Retreat - Booking </title>
		<style>
			h2{
				text-align: center;
			}
			#leftContainer{
				border-style: solid;
				border-color: #EEE;
				left:6px;
				top:5px;


			}
		</style>

	</head>

	<body>

		<?php 
			include 'header.html';
		?>

		<div id="wrapper" style="text-align:left">	
			<div id="content" style="height:317px; width:450px">
				<div id="leftContainer" style="height:320px; width:450px">
					<div id="createContainer">
						<?php
							$servername = 'localhost';
							$username = 'group5';
							$password = 'fr1end';
							$dbname = 'group5';

							$confirmationNumber = $_POST['confirmationNumber'];
							

							$conn = new mysqli($servername, $username, $password, $dbname);

							if ($conn->connect_error) {
		    					die("Connection failed: " . $conn->connect_error);
							}

							$sql = "SELECT * FROM retreatBooking WHERE id = '$confirmationNumber'";
							$result = $conn->query($sql);
							$row_cnt = $result->num_rows;

							if($row_cnt > 0){

								$row = $result->fetch_assoc();

								echo "<h2>Appointment Details</h2>";
								echo "<p>Confirmation number: " . $row['id'] . "</p>";
								echo "<p>Name: " . $row['firstName'] . " " . $row['lastName'] . "</p>";
								echo "<p>Room type: " . $row['room'] . "</p>"; 
								
								$checkIn = date('m-d-Y', strtotime($row['dateFrom']));

								if($row['nights'] === '1'){
									$checkOut = date('m-d-Y', strtotime($row['dateFrom'] .' +1 day'));
								}
								else if($row['nights'] === '2'){
									$checkOut = date('m-d-Y', strtotime($row['dateFrom'] .' +2 day'));
								}
								echo "<p>Period of Staying:</p> ";
								
								echo "Check-in:  " . $checkIn . "</br>";
								echo "Check-out: " . $checkOut . "</br>";

								setlocale(LC_MONETARY, 'en_US');

								$nightsToBeCalculated = intval($row['nights']);
								
								if($row['room'] === "Single Room"){
									$nightsToBeCalculated *= 75;
									echo "<p>Value per night: $ 75.00</p>";
									echo "<p>Total value: " . money_format('%(#6n', $nightsToBeCalculated) . "</p>";
								}
								else if($row['room'] === "Double Room"){
									$nightsToBeCalculated *= 140;
									echo "<p>Value per night: $ 140.00</p>";
									echo "<p>Total value: " . money_format('%(#6n', $nightsToBeCalculated) . "</p>";
								}
								else if($row['room'] === "Deluxe Room"){
									$nightsToBeCalculated *= 250;
									echo "<p>Value per night: $ 250.00</p>";
									echo "<p>Total value: " . money_format('%(#6n', $nightsToBeCalculated) . "</p>";
								}
							}
							else{

								$message = "The confirmation number you have tried is not valid. Plese try again.";
								echo "<script type='text/javascript'>alert('$message');</script>";

								echo "<script language=\"javascript\">\n";
								echo "window.location=\"massageAppointment.php\";";
								echo "</script>";
							}
					        $conn->close();
						?>				
					</div><!-- end id="createContainer"-->
				</div>	<!-- end id="rightContainer"-->										
			</div> <!-- end id="content"-->
		</div><!-- end id="wrapper" -->	

		<?php
			include 'footer.html';
		?>
	</body>
</html>

