<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="assets/css/abigail.css">
		<link rel="stylesheet" href="assets/css/navstyle.css" type="text/css">
		<link rel="shortcut icon" type="image/png" href="assets/image/samplelogo.png"/>	
		<link rel="stylesheet" href="assets/css/generalLayout.css" type="text/css">	
		<title>Location</title>
	</head>
	<body>
	
	<?php include "header.html";?>
	
	<div id="wrapper">
	<div id="locationContent"> <!-- locationWrapper is changed to locationContent -->
		<div class = "center"><h2>Location</h2></div>
		
		<iframe 
			style="height: 540px; width: 900px;" src="http://www.mapquest.com/embed?hk=1PU5Mgu" 
			marginwidth="0" marginheight="0" frameborder="0" scrolling="no">
		</iframe>

		<!--<p id="left">
			1600 Park Ave
			Rochester, NY 14623 
		</p>
		<p id="right">
			585-555-1234
		</p>-->
	</div> <!-- end id="locationContent"-->
	</div> <!-- end id="wrapper"-->
		
	<?php include "footer.html";?>

	</body>
</html>