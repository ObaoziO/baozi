<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Pizza Order</title>

	<?php 
		include 'header.php';
	?>

	<div id="container">
		<h2>Order a Delicious Pizza!</h2>

		<form name="OrderForm" action="orderprocess.php"  onsubmit="return validateForm();" method="post">
			<p>Name:  <input type="text" name="customerName"  /></p>
			<p>ID:  <input type="text"  name="customerID"  /></p>

			<p> 

			Check the size of Pizza you would like to order:<br />
				<input type="radio" name = "pizzaSize" value = "Personal Pan"/>Personal Pan<br />
				<input type="radio" name = "pizzaSize" value = "Small"/>Small<br />
				<input type="radio" name = "pizzaSize" value = "Medium" checked="true"/>Medium<br />
				<input type="radio" name = "pizzaSize" value = "Large"/>Large<br />
			
			<!--/p>

			<p--> 
			<br />
			
			Select the number of toppings you want on your pizza:<br />
				<input type="radio" name = "pizzaTopping" value = "None" checked="true"/>No Extra Toppings<br />
				<input type="radio" name = "pizzaTopping" value = "One"/>One Topping<br />
				<input type="radio" name = "pizzaTopping" value = "Two"/>Two Toppings<br />
				<input type="radio" name = "pizzaTopping" value = "Three"/>Three Toppings<br />
			
			</p>

			<p>
				<input type="submit"  name="Submit"  value=" Send Form"  />
			</p>
		</form>

	</div>

	<?php 
		include 'footer.php';
	?>

	</body>
</html>