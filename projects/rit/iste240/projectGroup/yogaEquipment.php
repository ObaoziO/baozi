<!DOCTYPE html>
<html lang="en">
	<!--Begin Head-->
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="assets/css/navstyle.css">
		<link rel="shortcut icon" type="image/png" href="assets/image/samplelogo.png"/>
		<link rel="stylesheet" href="assets/css/generalLayout.css">
		<title>Yoga Equipment Homepage</title>
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
						<img src="assets/image/yoga1.jpg" alt="Massage Interior" class = "resSliderImage">
					</div>
					<div class="item">
						<img src="assets/image/yoga2.jpg" alt="Massage Interior" class = "resSliderImage">
					</div>
					<div class="item">
						<img src="assets/image/yoga3.jpg" alt="Massage Interior" class = "resSliderImage">
					</div>
				</div>
			</div>

			<div class="indpages">
				<img src="assets/image/fitnessBall.jpg" alt="Yoga Pants">
				<h1>Fitness Ball: $20.00</h1>
				<p>	Fitness Ball 75cm – Fitness ball has 2500lb rating and is ideal for core training routines. <br><br><br></p>
			</div>
			
			<div class="indpages">
				<img src="assets/image/yogaMats.jpg" alt="Yoga Mats">
				<h1>Yoga Mats: $10.00 </h1>
				<p>	¼ inch Yoga Mat (24” x 72) - Quarter inch thick yoga mat, available in various colours.<br><br></p>
			</div>
			
			<div class="indpages">
				<img src="assets/image/yogaBlock.jpg" alt="Yoga Block">
				<h1>Yoga Block: $6.00 - $7.00</h1>
				<p>	Yoga Block 4” x 6” x 9” – 4 inch tall yoga block available in various colours.<br><br>Yoga Block 3” x 6” x 9” – 6 inch tall yoga block available in various colours.</p>
			</div>		
				
		</div> <!-- end id="content"-->
	</div> <!-- end id="wrapper"-->
	
	<?php
		include 'footer.html';
	?>
	
	</body>
</html>
