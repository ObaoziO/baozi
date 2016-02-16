<!DOCTYPE html>
<html lang = "en">
	<head>
		<!-- Yuqing Guo ISTE.240 Exercise 08 -->	
		<meta charset=utf-8 />  
		<title>exo - Exercise 08</title>
		<link rel="stylesheet" type="text/css" href="assets/css/ex08.css">
	</head>
	<body>

	<div id="container">
		
		<!-- add empty fields for each (id - optional/not needed), name, and comment to enter new data-->
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<div>
				<label for="name">Name:</label>
				<input type="text" name="name" size="30" />
			</div>
			<div>
				<label for="comment">Comment:</label>
				<textarea name="comment" rows="3" cols="30"></textarea>
			</div>
			
			<!--p>Name:  <input type="text" name="name"  />
			<br>Comment:  <input type="text"  name="comment"  /></p-->

			<p> <!-- submit botton-->
				<input type="submit"  name="submit"  value=" Submit Form"  />
			</p>
		</form>
		<hr>
	</div>
	
	<?php 		//print out data
		include "ex08data.php"; 
	?>

	</body>
</html>