<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

	<script>
		$(document).ready( function () {
			$('#myTable').DataTable();
		} );
	</script>
	
</head>
<body>
	<div data-role="page">
		
		<div data-role="header">
			<h1>Sensor Readings</h1>
		</div><!-- /header -->
		
		<div role="main" class="ui-content" >
			<table id="myTable" class="display" style="text-align: center;">
				<tr>
					<th>Sensor</th>
					<th>Date</th>
					<th>Temperature</th> 
					<th>Location</th>
				</tr>
				<?php 
				include("../Model/api.php");
				//retrieve sensor data from model
				$datareadings[] = displaySensorData();
				for($j = 0; $j < count($datareadings); $j++){
					for ($i=0 ; $i<sizeof($datareadings[$j]) ; $i++) {

						echo '<tr>';
						//decode json sensor data
						$decoderesults = json_decode($datareadings[$j][$i]['data']);
						echo '<td>'.$decoderesults->sensor.'</td>';
						echo '<td>'.$datareadings[$j][$i]['dttm'].'</td>';
						echo '<td>'.$decoderesults->temp.'°C</td>';
						echo '<td>'.$decoderesults->location.'</td>';
						
						echo '</tr>';
					}
				}

				?>
			</table>
		</ul>
	</div>
	
	<div data-role="footer">
		<h4>This is the ten latest sensor readings</h4>
	</div>
	
</div>
</body>
</html>