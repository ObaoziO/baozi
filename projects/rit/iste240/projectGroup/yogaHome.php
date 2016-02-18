<!DOCTYPE html>
<html lang="en">
	<!--Begin Head-->
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="assets/css/navstyle.css" type="text/css">	
		<link rel="shortcut icon" type="image/png" href="assets/image/samplelogo.png"/>	
		<link rel="stylesheet" href="assets/css/generalLayout.css" type="text/css">
		<title>Yoga - Homepage</title>
	</head><!--End Head-->
	<!--Begin Body-->
	<body>
	
	<!--Link page Header-->
	<?php 
		include 'header.html';
	?>
		
	<!--Begin Page Body-->

	<div id="wrapper">
		<div id="content">
			<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
			   <!-- Carousel items -->
				<div class="carousel-inner">
					<div class="active item">
						<img src="assets/image/yogaCarousel1.jpg" alt="Massage Interior" class = "resSliderImage">
					</div>
					<div class="item">
						<img src="assets/image/yogaCarousel2.jpg" alt="Massage Interior" class = "resSliderImage">
					</div>
					<div class="item">
						<img src="assets/image/yogaCarousel3.jpg" alt="Massage Interior" class = "resSliderImage">
					</div>
				</div>
			</div>
			
			<div class="indpages">
				<img src="assets/image/yogaBeginner.jpg" alt="Yoga Beginner">
				<h1>Beginner Session:</h1>
				<p>	Our beginner session introduces individuals who are new to yoga to easy exercises that are not too difficult and easy to pick up. Our instructors are available to help participants at all times. Don’t worry if you’ve never tried yoga before, this class is here to change that.<br><br><br></p>
			</div>
			
			<div class="indpages">
				<img src="assets/image/yogaIntermediate.jpg" alt="Yoga Intermediate">
				<h1>Intermediate Session:</h1>
				<p>	Our intermediate session is for individuals who understand the basic yoga stances and procedures, this class is to further your knowledge of various types of yoga, as well as mastering what you already know. <br><br></p>
			</div>
			
			<div class="indpages">
				<img src="assets/image/yogaAdvanced.jpg" alt="Yoga Advanced">
				<h1>Advanced Session:</h1>
				<p>	Our advanced session is for individuals who are experienced with various types of yoga stances and maneuvers. Each class is designed for participants to push their body’s limits.</p>				
			</div>
			
			<!--div class="buttonsend">
				<a href="yogaSchedule.php" class="scheduleButton">See the Yoga Schedule</a>
			</div> < end class="buttonsend"-->
			
			<div class="buttonsend">
				<a href="retreatBooking.php"> 
					<div class="scheduleButton">
						Book a Retreat
					</div> <!-- end class="scheduleButton"-->
				</a>
			</div> <!-- end class="buttonsend"-->
			
		</div> <!-- end id="content"-->
	</div> <!-- end class="wrapper"-->

	<!--Link page Footer-->
	<?php
		include 'footer.html';
	?>
	
	</body><!--End Body-->
</html>