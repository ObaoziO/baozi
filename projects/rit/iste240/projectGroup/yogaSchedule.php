<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="assets/css/navstyle.css" type="text/css">	
		<link rel="shortcut icon" type="image/png" href="assets/image/samplelogo.png"/>
		<link rel="stylesheet" href="assets/css/generalLayout.css" type="text/css">	
		<title> Yoga Schedule </title>
	</head>
	<body>
		
	<?php 
		include 'header.html';
	?>

	<div id="wrapper">		
		<div id="content">
			<div id="calendar">
				<iframe src="https://www.google.com/calendar/embed?showTabs=0&amp;showTz=0&amp;mode=WEEK&amp;height=550&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=g.rit.edu_3d4l045fm8s88hc3rhsnmkqj2c%40group.calendar.google.com&amp;color=%23333333&amp;ctz=America%2FNew_York" 
				style=" border-width:0 " width="1000" height="550" frameborder="0" scrolling="no"></iframe>
			</div>
		</div> <!-- end id="homepages"-->
		<div class="blankSpace"> </div>
	</div> <!-- end id="wrapper"-->

	<?php
		include 'footer.html';
	?>
	
	</body>
</html>
