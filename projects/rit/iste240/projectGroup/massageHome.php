<!DOCTYPE html>
<html lang="en">
	<head> <!--Begin Head-->
		<meta charset="UTF-8">
		<title>Massage Homepage</title>
		<link rel="stylesheet" href="assets/css/navstyle.css">
		<link rel="shortcut icon" type="image/png" href="assets/image/samplelogo.png"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="assets/css/generalLayout.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</head> <!--End Head-->
	<body> <!--Begin Body-->
	
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
						<img src="assets/image/massageHome.jpg" alt="Massage Interior" class = "resSliderImage">
					</div>
					<div class="item">
						<img src="assets/image/massageHome1.jpg" alt="Massage Interior" class = "resSliderImage">
					</div>
					<div class="item">
						<img src="assets/image/massageHome2.jpg" alt="Massage Interior" class = "resSliderImage">
					</div>
				</div>
			</div>
			
			<div class="indpages">
				<img src="assets/image/classicMassage.jpg" alt="Classic Massage">
				<h1>Classic Massage:</h1>
				<p>	
					A classic massage is used to support long term health and 
					provide rehabilitative care to individuals. Our therapists 
					use gentle pressure with long flowing movements for total 
					relaxation.
				</p>
			</div>
			
			<div class="indpages">
				<img src="assets/image/deepTissue.jpg" alt="Deep Tissue Massage">
				<h1>Deep Tissue Massage:</h1>
				<p>	
					Deep tissue massages focus on realigning deeper layers of 
					muscles and connective tissues. This procedure is beneficial 
					for individuals who are experience chronic tension and 
					contractions such as low back tightness, sore shoulders, 
					and stiff necks. Our therapists apply deeper pressure and 
					slow movements to alleviate the stress.
				</p>
			</div>
			
			<div class="indpages">
				<img src="assets/image/hotStone.jpg" alt="Hot Stone Massage">
				<h1>Hot Stone Massage:</h1>
				<p>	
					Our Hot stone massage treatment is a special treatment we 
					offer; our therapists apply smoother heated stones while 
					performing the massage treatment. Stones are also placed 
					in various parts of the body while they massage different 
					areas. The heat from the stones warm up tensed muscles so 
					our therapists can work with deep tissue tension more 
					effectively.
				</p>				
			</div>
			
			<!--div class="buttonsend">
				<a href="massageAppointment.php" class="scheduleButton">Schedule an Appointment</a>
			</div> <end class="buttonsend"-->
			
			<div class="buttonsend">
				<a href="massageAppointment.php"> 
					<div class="scheduleButton">
						Schedule an Appointment
					</div> <!-- end class="scheduleButton"-->
				</a>
			</div> <!-- end class="buttonsend"-->
			
		</div> <!-- end id="content"-->
	</div> <!-- end class="wrapper"-->
	
	<?php
		include 'footer.html';
	?>
	</body><!--End Body-->
</html>