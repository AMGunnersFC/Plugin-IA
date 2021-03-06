<?php
   //include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="staffFormstylesheet.css">
<link rel="stylesheet" href="Pikaday-master/css/pikaday.css">
</head>
<body>
<main id="formImplement">
<script src="../ajax_form.js"></script>
<!--<script src="tableVisual.js"></script>-->

<form name="mealForm" onSubmit="return submitForm()" method= "post">

	<h1>Book Your Shabbat Meals</h1>

	<div><p>First Name:<br>
	<input id="FirstName" class="FormElements" type= "text" name= "FirstName" ></p></div>

	<div><p>Last Name:<br>
	<input id="LastName" class="FormElements" type= "text" name= "LastName" ><p></div>

	<div><p>Contact Number:<br>
	<input id="TelNo" class="FormElements" type= "tel" name= "TelNo"><p></div>

	<div><p>Email Address:<br>
	<input id="EmailAdd" class="FormElements" type= "email" name= "EmailAdd" ><p></div>

	<div><p>Home Address:<br>
	<input id="HomeAdd" class="FormElements" type= "text" name= "HomeAdd"><p></div>
	<br>

	<div><p>Shabbat Date:<br>
	<input id="UserDate" class="FormElements" type= "text" name= "UserDate" ><p></div>

	<div><p>Meals:<br>
	<select id="MealChoice" class="FormElements" name= "MealChoice">
  		<option value="" disabled selected>Select your Option</option>
  		<option value="Both Meals">Friday Dinner and Saturday Lunch (US$150)</option>
 		<option value="Dinner Only">Friday Dinner Only (US$75)</option>
  		<option value="Lunch Only">Saturday Lunch Only (US$75)</option>
		</select><p></div>

	<div><p>Number of Seats:<br>
	<input id="NoSeats" class="FormElements" type= "number" name= "NoSeats"><p></div>

	<div id="tableSeat"><p>Table Choice:<br>
	<input id="TableNo" class="FormElements" type= "number" name= "TableNo"><p></div>
	<!-- connect tabe number choice range to the amount of tables available and check if
	there are enough seats available in the chosen table for the amount of people reserving.
	Perhaps have a countdown on every table with the amount of seats left-->
	<br>
	<input class="buttons" type= "reset">
	<input class="buttons" type= "submit">

</form>
<h2 id="message"></h2>

<!--<div id="tableVisual"></div>-->
<img src="floorPlan.jpg" id="tableVisual" alt="floorPlan">
<!--<map name="floorMap">
  <area shape="rect" coords="0,0,82,126" alt="Sun" href="sun.htm">
  <area shape="circle" coords="90,58,3" alt="Mercury" href="mercur.htm">
  <area shape="circle" coords="124,58,8" alt="Venus" href="venus.htm">
</map>-->
<div id="selected"> </div>
<!--<script src="moment.min.js"></script>-->
<script src="moment.min.js"></script>
<script src="Pikaday-master/pikaday.js"></script>
<script>
var picker = new Pikaday(
{
		field: document.getElementById('UserDate'),
		firstDay: 1,
		minDate: new Date(2018, 0, 1),
		maxDate: new Date(2025, 12, 31),
		yearRange: [2018,2025],
		onSelect: function() {
            var date = document.createTextNode(this.getMoment().format('DD/MM/YYYY'));
						document.getElementById('selected').innerHTML=date.textContent;
    }
});
</script>
</main>
</body>
</html>
