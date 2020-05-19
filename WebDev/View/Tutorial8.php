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
      <h2>Week 8</h2>
      <hr>
      <p>The task for week 8 is the second tasks in the IoT sub-project and continued on from last week’s task to gather data using the sensors and functions of an ElectricImp. The task this week is to store the data gathered by the Electric Imp in a database using a suitable design and method. The device code from the previous task is to used again, however, the code has been altered slightly as seen below.</p>
      <center><img src="images/Tutorial8DeviceCode.jpg" class="img-responsive" alt="Screenshot of Device code"></img></center>
      <p>The code uses the same functions as last week to gather the data from the sensors. However, instead of displaying the data using the server.log(); function, the code now sends the data as a variable named “message” to the agent. The code performed in the agent can be seen below.</p>
      <center><img src="images/Tutorial8AgentCode.jpg" class="img-responsive"  alt="Screenshot of Agent code"></img></center>
      <p>The const url is the address location for the data to be sent. The sensor data received from the device code is encoded into JSON and sent to the server using the POST method. A PHP file must be created to receive the data and send the data to be stored in a database. The options and methods available for storing the data received from the agent must be considered before the code in the PHP file is developed. The data could be stored in a NoSQL document database. The data is stored as a document containing a JSON data string along with a document key, and index items that allow navigation to the key. The advantage of adopting this method would be due to its flexibility for agile development, as fields and indexes can be added to the database with ease. This method is suitable when it is anticipated that the number of required fields will increase. Another option to store the data received would be to decode the JSON and store the data in a relational database. A column would be created for each individual piece of sensor data received within the JSON. This design would require a large amount of columns, and would be difficult to add additional columns to the database if they were required. The suitable method adopted is to store the data in JSON form in a relational database with a unique identifier for each of the readings, and the date the data was received. This is more efficient as it prevents the process of decoding the JSON data and entering the data into different database columns. All the sensor readings will be stored together, this method also allows for flexibility in the future as additional sensor readings can be added. The database design can be seen below.</p>
      <center><img src="images/Tutorial8Database.jpg" class="img-responsive"  alt="Screenshot of Agent code"></img></center>
      <p>The PHP to insert the data into the database would use the function file_get_contents() to create a JSON string of the sensor data received. The JSON string would then be inserted into a prepared statement, that will insert the data into the database along with an ID and a timestamp of the date/time the data was inserted.</p>
    </div>
    <div class="col">
    </div>
    
  </div>
</div>

<!--Footer-->
<?php include_once 'Template/footer.php'; ?>
</body>
</html>