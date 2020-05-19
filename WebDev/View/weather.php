<html>
<head>
	<?php include_once 'Template/head.php'; ?>
	<script>
		function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}
	</script>
</head>
<body>
	<!-- Header-->
	<?php include_once 'Template/header.php'; ?>

	<?php
	error_reporting(0);
	$get = json_decode(file_get_contents('http://ip-api.com/json/'),true);
	date_default_timezone_set($get['timezone']);
	$apikey ='d1b8e2e8cc57094c58f7f21f741ff961';
	$city = 'Ecclefechan,gb';
	//link to external api
	$string = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=".$apikey."";
	//decode the data received
	$data = json_decode(file_get_contents($string),true);
	
	$temp = $data['main']['temp'];
	//assign retrieved data to variables
	$country =  "<h1><b>".$data['name'].",".$data['sys']['country']."</h1></b>";
	$desc = "<b><p>".$data['weather'][0]['description']."</p></b>";
	$temperature =  "<b>Temperature:".$temp."°C</b><br>";
	$clouds = "<b>".$data['clouds']['all']."% Cloudy</b><br>";
	$windspeed = "<b>Wind Speed:".$data['wind']['speed']."m/s</b><br>";
	//display data
	echo "<center>".$country."</center>";
	echo "<center><h2>".$desc."</h1></center>";
	
	echo "<center>".$temperature."</center>";
	echo "<center>".$clouds."</center>"; 
	echo "<center>".$windspeed."</center>";
	?>	

</div>
<?php include_once 'Template/footer.php'; ?>
</body>
</html>