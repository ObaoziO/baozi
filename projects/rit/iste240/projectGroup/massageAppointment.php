<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="shortcut icon" type="image/png" href="assets/image/samplelogo.png"/>
		<link rel="stylesheet" href="assets/css/generalLayout.css" type="text/css">	
		<link rel="stylesheet" href="assets/css/navstyle.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>	
	<title> Massage - Appointment </title>
	</head>
	<body>
	
		<?php 
			include 'header.html';
		?>

		<div id="wrapper" style="text-align:left">	
			<div id="content" style="height:490px; width:900px">
				<div id="leftContainer">
					<div id="instructorOne">
						<div class="avatar"> <img src="assets/image/portrait2.jpg" alt="Picture" width="110" height="110"></div>
						<h2>Marry Pendleton</h2>
						<br>
						<p>Availability:</p>
						<p>Monday, Wednesday and Friday: 7am - 11pm</p>
						<p>Saturday: 9am - 12pm</p>
					</div>	
					<div id="instructorTwo">
						<div class="avatar"> <img src="assets/image/portrait4.jpg" alt="Picture" width="110" height="110"></div>
						<h2>Claudette Hester</h2>
						<br>
						<p>Availability:</p>
						<p>Tuesday and Thursday: 7am - 11pm</p>
						<p>Sunday: 9am - 12pm</p>
					</div>
				</div><!-- end id="leftContainer"-->
				<div id="rightContainer">
					<div id="createContainer">
							<h2 style="text-align:center">Schedule an Appointment</h2>
							<form name="createForm" action="createMassageAppointment.php" method="post">
								First Name: <input type="text" required=""  placeholder="Your first name" name="fname"/><br>
								Last Name: <input type="text" required=""  placeholder="Your last name" name="lname"/><br>
								Email: <input type="email" required="" placeholder="email@example.com" name="email"/><br>
								Instructor: <select name="instructor">
												<option value="Marry Pendleton">Marry Pendleton</option>
												<option value="Claudette Hester">Claudette Hester</option>
											</select><br>
								Massage type: <select name="massageType">
												<option value="Classic Massage">Classic Massage</option>
												<option value="Deep Tissue Massage">Deep Tissue Massage</option>
												<option value="Hot Stone Massage">Hot Stone Massage</option>
											  </select><br>
								Massage length: <select name="massageLength">
													<option value="1">30 Minutes Session - US$ 15.00</option>
													<option value="2">1 Hour Session - US$ 30.00</option>
												</select><br>
								Date: <input type="text" value="" required="" name="date" id="datetimepicker7"/><br>
								<input type="submit" name="Submit" value="Make Appointment"/>
							</form>
					</div><!-- end id="createContainer"-->
					<div id="verifyContainer">
						<h2 style="text-align:center"> Appointment Details</h2>
						<form name="verifyForm" action="checkMassageAppointment.php" method="post">
							Confirmation number: <input type="text" required="" name="confirmationNumber"/><br>
							<input type="submit" name="Submit" value="Detail"/>
						</form>
					</div>
				</div>	<!-- end id="rightContainer"-->									
			</div> <!-- end id="content"-->		
		</div> <!-- end id="wrapper"-->	

		<?php
			include 'footer.html';
		?>

	</body>

	<script src="./jquery.js"></script>
	<script src="./jquery.datetimepicker.js"></script>

	<script>
		$('#datetimepicker').datetimepicker({
		dayOfWeekStart : 1,
		lang:'en',
		disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
		startDate:	'1986/01/05'
		});
		$('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});

		$('.some_class').datetimepicker();

		$('#default_datetimepicker').datetimepicker({
			formatTime:'H:i',
			formatDate:'d.m.Y',
			//defaultDate:'8.12.1986', // it's my birthday
			defaultDate:'+03.01.1970', // it's my birthday
			defaultTime:'10:00',
			timepickerScrollbar:false
		});

		$('#datetimepicker10').datetimepicker({
			step:5,
			inline:true
		});
		$('#datetimepicker_mask').datetimepicker({
			mask:'9999/19/39 29:59'
		});

		$('#datetimepicker1').datetimepicker({
			datepicker:false,
			format:'H:i',
			step:5
		});
		$('#datetimepicker2').datetimepicker({
			yearOffset:222,
			lang:'ch',
			timepicker:false,
			format:'d/m/Y',
			formatDate:'Y/m/d',
			minDate:'-1970/01/02', // yesterday is minimum date
			maxDate:'+1970/01/02' // and tommorow is maximum date calendar
		});


		$('#datetimepicker5').datetimepicker({
			datepicker:false,
			allowTimes:['12:00','13:00','15:00','17:00','17:05','17:20','19:00','20:00'],
			step:5
		});
		$('#datetimepicker6').datetimepicker();
		$('#destroy').click(function(){
			if( $('#datetimepicker6').data('xdsoft_datetimepicker') ){
				$('#datetimepicker6').datetimepicker('destroy');
				this.value = 'create';
			}else{
				$('#datetimepicker6').datetimepicker();
				this.value = 'destroy';
			}
		});
		var logic = function( currentDateTime ){
			if (currentDateTime && currentDateTime.getDay() == 0 || currentDateTime && currentDateTime.getDay() == 6){
				this.setOptions({
					minTime:'9:00',
					maxTime: '12:30'
				});
			}else
				this.setOptions({
					minTime:'7:00',
					maxTime:'23:00'
				});
		};
		$('#datetimepicker7').datetimepicker({
			onChangeDateTime:logic,
			onShow:logic, step:30,
		});
		$('#datetimepicker8').datetimepicker({
			onGenerate:function( ct ){
				$(this).find('.xdsoft_date')
					.toggleClass('xdsoft_disabled');
			},
			minDate:'-1970/01/2',
			maxDate:'+1970/01/2',
			timepicker:false
		});
		$('#datetimepicker9').datetimepicker({
			onGenerate:function( ct ){
				$(this).find('.xdsoft_date.xdsoft_weekend')
					.addClass('xdsoft_disabled');
			},
			weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
			timepicker:false
		});
		var dateToDisable = new Date();
			dateToDisable.setDate(dateToDisable.getDate() + 2);
		$('#datetimepicker11').datetimepicker({
			beforeShowDay: function(date) {
				if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
					return [false, ""]
				}

				return [true, ""];
			}
		});
		$('#datetimepicker12').datetimepicker({
			beforeShowDay: function(date) {
				if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
					return [true, "custom-date-style"];
				}

				return [true, ""];
			}
		});
		$('#datetimepicker_dark').datetimepicker({theme:'dark'})
</script>
</html>
