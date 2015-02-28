<!DOCTYPE html>
<html>
<head>
	
	<meta charset=UTF-8>
	<!-- Bootstrap core CSS -->
	<link href="include/bootstrap/css/bootstrap.css" rel="stylesheet">
	<!-- Bootstrap theme -->
	<link href="include/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
	<!--<link href="include/ajax.js">-->
	<!--<script src="include/main.js"></script>-->
	<script src="include/jquery-1.10.2.js"></script>
	<link rel="stylesheet" type="text/css" href="include/styles.css">
	
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
	<!--<script src="./include/main.js"></script>	-->
	<title>trvBud</title>
	<script>

$( "#test" ).click(function() {
	console.dir("test!");
});


$( "#city-in" ).keydown(function() {
	console.dir("keydown!");
	populate();
});

// function to be called on every key press in the text-box
function populate(){
	var input = $('#city-in').val();
	console.dir(input);
	options = {
		"url": "https://babbage.cs.missouri.edu/~pld9bc/hackillinois/trvBud/include/util/autoTextbox.php",
		"content": "data",
		"format": "json"
	};
	$.get("https://babbage.cs.missouri.edu/~pld9bc/hackillinois/trvBud/include/util/autoTextbox.php?search="+input, options, function(data) {
		processData(data);
	});// end get
}// end populate

function processData( data ){
	console.dir(data);
}// end processData

	</script>
	
</head>
<body id="body">
	<!--
	<div class="btn-group" role="group" aria-label="...">
		<?php
				session_start();
				if(isset($_SESSION['login_user'])){
						echo "<button type='button' class='btn btn-default'>Profile</button>";
						echo "<button type='button' class='btn btn-default'>Logout</button>";
					} else {
						echo "<button type='button' class='btn btn-default'>Login</button>";
					};
			
		?>
	</div> -->
	<br>
	
	<div id="tit">	
		<button type="button" class="btn btn-default btn-lg" action="create()">trvBud</button>
	</div>
	

	<div id="addCities">
		<center>
		<br>
		<div class="input-group" id="dopeDiv">
		  <input type="text" class="form-control" placeholder="Name or Zipcode.." aria-describedby="basic-addon1" id="city-in">
		</div>
		<br>
		<!--Adding a new part-->
		<div class="input-group">
		  <button type="button" class="btn btn-default" action="addCity()">+</button>
  		  <button type="button" class="btn btn-default" id="test">+</button>
		</div>
	</div>

		
	<!-- run scripts at end of page for faster loading -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="include/bootstrap/dist/js/bootstrap.min.js"></script>
 </body>
