<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="assets/css/navstyle.css" type="text/css">	
		<link rel="shortcut icon" type="image/png" href="assets/image/samplelogo.png"/>	
		<link rel="stylesheet" href="assets/css/generalLayout.css" type="text/css">	
		<title> Meditation - Home Page </title>
	</head>
	<body>
	
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
						<img src="assets/image/meditation01.jpg" alt="Meditation Image" class = "resSliderImage">
					</div>
					<div class="item">
						<img src="assets/image/meditationsound.jpg" alt="Sound Meditation" class = "resSliderImage">
					</div>
					<div class="item">
						<img src="assets/image/meditationzen.jpg" alt="Zen Meditation" class = "resSliderImage">
					</div>
					<div class="item">
						<img src="assets/image/meditationkyoga.jpg" alt="Meditation: Kundalini Yoga" class = "resSliderImage">
					</div>
				</div>
			</div> <!-- end id="myCarousel" -->
		
			<div class="indpages">
        		<img src="assets/image/meditationsoundsmall.jpg" alt="Sound Meditation">
       			<h1>Sound Meditation</h1>
       				<p>
						This meditation is practiced through the use of a 
						single tone during meditation. Throughout the meditation 
						we sit upright and chant a single tone and focus on that
						sound, clearing all other entities from our mind.
       				</p>
			</div>  <!-- end class="indpages"-->
		
			<div class="indpages">
        		<img src="assets/image/meditationzensmall.jpg" alt="Zen Meditation">
       			<h1>Zen Meditation</h1>
       				<p>
       					Also known as Zazen meditation, comes from Buddhism. 
       					During this meditation we acquire insight through 
       					observing the breath and the mind, and through 
						interaction with the instructor.
       				</p>
			</div>  <!-- end class="indpages"-->
		
			<div class="indpages">
        		<img src="assets/image/meditationkyogasmall.png" alt="Meditation: Kundalini Yoga">
       			<h1>Kundalini Yoga</h1>
       				<p>
       					Kundalini Yoga is a special meditation where we 
       					support the mind and guide the body through the 
       					use of breath, mantra, mudra, and focus. Kundalini 
       					Yoga is known to have a large variety of meditation 
       					techniques.
       				</p>
			</div>  <!-- end class="indpages"-->
			
			<div class="buttonsend">
				<a href="retreatBooking.php"> 
					<div class="scheduleButton">
						Book a Retreat
					</div> <!-- end class="scheduleButton"-->
				</a>
			</div> <!-- end class="buttonsend"-->
			
		</div> <!-- end id="content"-->
	</div> <!-- end class="wrapper"-->

	<?php 
		include 'footer.html';
	?>

	</body>
</html>



