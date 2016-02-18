<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="assets/css/aurko.css" type="text/css">
		<link rel="stylesheet" href="assets/css/navstyle.css" type="text/css">	
		<link rel="shortcut icon" type="image/png" href="assets/image/samplelogo.png"/>	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<title> Retreat - Home Page </title>
	</head>
	
	<body>
		<!--Link Page header-->
		<?php include 'header.html';?>
			<!--Begin Body Wrapper-->
			<div id="cafeBody">
			
				<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
					<!-- Carousel indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>   
				   <!-- Carousel items -->
					<div class="carousel-inner">
						<div class="active item">
							<img src="assets/image/roomdinning.jpg" alt="Dinning Room" class = "resSliderImage">
						</div>
						<div class="item">
							<img src="assets/image/roomsingle.jpg" alt="Single Room" class = "resSliderImage">
						</div>
						<div class="item">
							<img src="assets/image/roomdouble.jpg" alt="Double Room" class = "resSliderImage">
						</div>
						<div class="item">
							<img src="assets/image/roomdeluxe.jpg" alt="Deluxe Room" class = "resSliderImage">
						</div>
					</div>
				</div> <!-- end id="myCarousel" -->	

				<h3>
					Enjoy a relaxing stay at our overnight retreats, 
					each of our rooms are designed to provide our guests 
					a comfortable environment where they can relax and 
					partake in various events we provide throughout our 
					facility.
				</h3>
				<!--Begin Info Row-->
				<div class="infoRow">
					<div class="infoColumn">
						<img src="assets/image/roomsinglesmall.jpg" alt="Single Room">
						<h1>Single</h1>
						<p>Our single room includes one bed and a complimentary 
							breakfast for every night stayed, we also include two 
							vouchers for yoga sessions throughout the day and one 
							massage session.<br><br>
							Single Room – $75 per night
						</p>
					</div><!-- /End Column -->
		
					<div class="infoColumn">
						<img src="assets/image/roomdoublesmall.jpg" alt="Double Room">
						<h1>Double</h1>
						<p>Our double room includes two beds and a complimentary 
							breakfast for every night stayed, we also include four 
							vouchers for yoga sessions throughout the day and two 
							massage sessions.<br><br>
							Double Room - $140 per night
						</p>
					</div><!-- /End Column -->
					<div class = "infoColumn">
						<img src="assets/image/roomdeluxesmall.jpg" alt="Deluxe Room">
						<h1>Deluxe</h1>
						<p>Our deluxe room includes pre-paid meals, access to 
							all yoga sessions for the day, and two one hour 
							sessions for each night stayed.<br><br>
							Deluxe Room - $250 per night
						</p>
					</div>
					<div class = "clear"></div>
				</div><!-- /End Info Row -->

				
				<div class="button">
					<!--Scheduling Button-->
					<a href="retreatBooking.php" name="scheduleButton" class = "retreatBTN">Schedule an Appointment</a>
				</div>
			</div>  <!-- body wrapper-->


		<!--Link page footer-->
		<?php include 'footer.html';?>
	</body>
</html>



