<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" type="image/png" href="assets/image/samplelogo.png"/>	
		<link rel="stylesheet" href="assets/css/generalLayout.css" type="text/css">	
		<link rel="stylesheet" href="assets/css/navstyle.css" type="text/css">
		<title> Massage - Appointment </title>
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
			<div id="content" style="height:335px; width:450px">
				<div id="leftContainer" style="height:338px; width:450px">
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

							$sql = "SELECT * FROM massageAppointment WHERE id = '$confirmationNumber'";
							$result = $conn->query($sql);
							$row_cnt = $result->num_rows;

							if($row_cnt > 0){

								$row = $result->fetch_assoc();

								echo "<h2>Appointment Details</h2>";
								echo "<p> Confirmation number: " . $row['id'] . "</p>";
								echo "<p> Name: " . $row['firstName'] . " " . $row['lastName'] . "</p>";
								echo "<p> Massage type: " . $row['massageType'] . "</p>"; 
								echo "<p> Instructor: " . $row['instructor'] . "</p>";

								echo "<p> Date: " . date('m-d-Y', strtotime($row['date'])) . "</p>";
								echo "<p> Hour: " . date('H:i', strtotime($row['date'])) . "</p>";

								if($row['massageLength'] == 1){
									echo "<p>Session length: 30 minutes</p>";
									echo "<p>Session value: $ 15.00</p>";
								}
								if($row['massageLength'] == 2){
									echo "<p>Session length: 1 hour</p>";
									echo "<p>Session value: $ 30.00</p>";
								}
							}
							else{

								$message = "The confirmation number you tried is not a valid one. Plese try again.";
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

