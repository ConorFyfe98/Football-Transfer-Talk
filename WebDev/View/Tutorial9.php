<!doctype html>
<html lang="en">
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
	<?php include_once 'Template/header.php'; ?>

	<?php include_once 'Template/tutorialDropdown.php'; ?>
	<!--Columns-->
	<div class="container">
		<div class="row">
			
			<div class="col">
			</div>

			<div class="col-12">
				<h2>Week 9</h2>
				<hr>
				<p>The task for this week was to complete the third and final step of the IoT sub-project. Sensor data should have been gathered in the previous tasks by using the ElectricImp device, and storing the data in a database in a JSON format. However the previous tasks were unable to be completed due to the Wi-Fi connection, therefore, mock sensor data in JSON format was entered into the database. The task was to display the mock sensor data from the database in a presentable way that is readable for users. JQuery Mobile is a mobile-first framework that is used by developers to create applications or websites that are responsive and accessible on all popular smartphone, tablet, and desktop devices. Developers can create a single application designed for a mobile and the application will be able to scale up suitably to devices with larger resolutions. JQuery Mobile is an extension of the JQuery library to include features specifically for mobile. The implementation of JQuery Mobile is very simple and easy to learn. The JQuery Mobile library can be incorporated into the website by providing links to the CDN files in the head of the HTML as seen below. </p>
				<center><img src="images/Tutorial9CDNLinks.jpg" class="img-responsive"  alt="Screenshot of CDN Links"></img></center>
				<p>The JQuery Mobile library is now available for use within the website, the layout of the page can be built using the following tags with confidence that the website will be responsive. </p>
				<p>&lt;div data-role="header"&gt;</p>
				<p>&lt;div role="main" class="ui-content"&gt;</p>
				<p>&lt;table id="myTable" class="display" style="text-align: center;"&gt;</p>
				<p>&lt;div data-role="footer"&gt;</p>
				<p>The header tag is used to create a header at the top of the page.  The main tag is where the the table containing the sensor readings page will be displayed. The table tag is used within the main to display the results from the sensor readings. The footer tag is used to create a footer for the bottom of the page.
					<p>The JQuery Mobile library is used to create a responsive table across all platforms, this will allow the sensor data to be viewed presentably. PHP is used to retrieve the last ten sensor readings from the table using the following MySql statement:</p>
					<p>SELECT *
						FROM sensordata
						ORDER BY id DESC
					LIMIT 10</p>
					<p>An array including the function json_decode() is used to decode and display the lastest ten sensor readings retrieved from the database in JSON format.</p>
					<center><img src="images/Tutorial9DisplayResults.jpg" class="img-responsive" alt="Screenshot of Display table"></img></center>
				</p>The readability of the data has been increased, through the use a function within the library that highlights the row the user has selected.</p>
				<center><img src="images/Tutorial9Function.jpg" class="img-responsive"  alt="Screenshot of Function code"></img></center>
				<p>The application successfully displays the last 10 sensors readings in a readable manner through the use of JQuery Mobile and PHP. The method of using JQuery Mobile has ensured that the data presented within the table is readable on all mobile devices.</p>
			</div>
			<div class="col">
			</div>
			
		</div>
	</div>
</div>

<!--Footer-->
<?php include_once 'Template/footer.php'; ?>
</body>
</html>