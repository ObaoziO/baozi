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
		<title>Lotus</title>
	</head><!--End Head-->
	<!--Begin Body-->
	<body>
	
	<!--Link page Header-->
	<?php 
		include 'header.html';
	?>
		
	<div id="wrapper">
		<div id="content">
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
						<img src="assets/image/massageHome3.jpg" alt="Massage Interior" class = "resSliderImage">
					</div>
					<div class="item">
						<img src="assets/image/yoga4.jpg" alt="Yoga" class = "resSliderImage">
					</div>
					<div class="item">
						<img src="assets/image/meditation01.jpg" alt="Meditation" class = "resSliderImage">
					</div>
					<div class="item">
						<img src="assets/image/roomdinning.jpg" alt="Dinning Room" class = "resSliderImage">
					</div>
				</div> <!-- end class="carousel-inner" -->
			</div> <!-- end id="myCarousel" class="carousel slide" -->
			
		</div>  <!-- end id="content"-->
	</div> <!-- end class="wrapper"-->
	<!--End Page Body-->

	<!--Link page Footer-->
	<?php
		include 'footer.html';
	?>
	
	</body><!--End Body-->
</html>