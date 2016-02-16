<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Pizza Order</title>

	<?php 
	include 'header.php';
	?>

		<div id="container">
			<h2>Your Delicious Pizza Order!</h2>

			<?php
			//----------
			// Get the user's Information
			$custName = $_POST['customerName'];
			$custID = $_POST['customerID'];
			$pizzaSize = $_POST['pizzaSize'];
			$pizzaTopping = $_POST['pizzaTopping'];
			//$pizzaType = $_POST['pizzaType'];
			//$toppingType = $_POST['toppingType'];

			echo $custName . ", your order of Pizza is ready!"; /* echo "your order" . $_POST['customerName']; */
			echo "<br>Pizza size is: " . $pizzaSize . ". ";
			echo "<br>Topping choice is: " . $pizzaTopping . ". ";

			// ----------------------------------
			// validate the customer ID for numerics
			if (empty($custID))
			{
				echo "<p>The ID is invalid.</p>";
				echo "<p> 
						<form action = 'orderform.php'>
						<p>
							<input type = submit value = 'ok'>
						</p>
						</form>
					</p>";
			}
			else { // first else
				if(!is_numeric($custID))
				{
					echo "Customer ID is not Numeric!";
					echo "<p> 
							<form action = 'orderform.php'>
							<p>
								<input type = submit value = 'ok'>
							</p>
							</form>
						</p>";
				}

			// ----------------------------------
			// This code determines the size, topping, and final cost of the pizza.
			else { // pizza sizes
				switch ($pizzaSize) 
				{
					case 'Personal Pan':
						$pizzaCost = 7.99;
						$pizzaType = "Personal Pan Pizza";
						break;

					case 'Small':
						$pizzaCost = 10.99;
						$pizzaType = "Small Pizza";
						break;

					case 'Medium':
						$pizzaCost = 13.99;
						$pizzaType = "Medium Pizza";
						break;

					case 'Large':
						$pizzaCost = 16.99;
						$pizzaType = "Large Pizza";
						break;

					default:
						$pizzaCost = 13.99;
						$pizzaType = "Medium Pizza";
						break;
			    }// end of switch

			//else { // pizza toppings
				switch ($pizzaTopping) 
				{
					case 'None':
						$toppingCost = 0;
						$toppingType = "No Extra Toppings";
						break;

					case 'One':
						$toppingCost = 2.00;
						$toppingType = "One Topping";
						break;

					case 'Two':
						$toppingCost = 3.00;
						$toppingType = "Two Toppings";
						break;

					case 'Three':
						$toppingCost = 3.75;
						$toppingType = "Three Toppings";
						break;

					default:
						$toppingCost = 0;
						$toppingType = "No Extra Toppings";
						break;
				}// end of switch
			//} // end else pizza toppings

			// Calculate the Tax
				//$totalCost = ($pizzaCost + $toppingCost) * 1.08; // 8% tax
				$taxAmount = ($pizzaCost + $toppingCost) * 0.08; // 8% tax
				$totalCost = ($pizzaCost + $toppingCost) + $taxAmount;
			// Print the Recipt
				setlocale(LC_MONETARY, 'en_US');

				echo "<div id = 'receipt'>";
				echo "<br>";
				echo "<br>Pizza Price: " . money_format('%(#6n', $pizzaCost);
				echo "<br>Topping Price: " . money_format('%(#6n', $toppingCost);
				echo "<br>Tax Amount: " . money_format('%(#6n', $taxAmount);
				echo "<br>Total Cost of your order is: " . money_format('%(#6n', $totalCost);
				echo "<p>Thank you for your order!</p>";
				echo "</div>";
			} // end else switch

		} // end first else

		?>
		</div> 
		
	<?php 
	include 'footer.php';
	?>

	</body>
</html>