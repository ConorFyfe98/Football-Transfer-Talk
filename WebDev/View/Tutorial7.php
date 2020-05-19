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
      <h2>Week 7</h2>
      <hr>
      <p>The Internet of Things (IoT) is the interconnection of everyday devices/objects that are embedded with sensors and communication hardware that allows the object to collect, send and act on data received via the internet. These devices are becoming increasingly popular in homes throughout the country. Objects such as lights, heating, and many more can now be turned on and off via people’s smart phones, this is increasing user comfort and ease of performing daily tasks.</p>
      <p>There are four key layers of architecture in the Internet of Things, the sensor layer, communication layer, platform layer and application layer. The sensor layer uses a variety of sensors and functions to collect data from the object/device or the environment around the device.</p>
      <p>The task over the next three weeks is to work on an IoT sub-project. The task will include using sensors to gather data, store the data within a database and display the data on the website. Unfortunately the task could not be completed as connecting to the Wi-Fi was not possible.</p>
      <p>The task this week is to find the temperature of a room and display the room’s temperature on the console. An electric imp will be used as part of the sensor layer. An electric imp device is a device that uses sensors and functions to provide data. The electric imp has on-board Wi-Fi to the company’s server in California which can then connect and send data to a website. </p>
      <p>The first step is to register as a developer with electricimp.com and then begin the “blink-up” process. The electric imp application to perform the “blink-up” process can be downloaded from the Android or Apple Store. The “blink-up” process needs to be performed to turn the electric imp online. Wi-Fi credentials are entered into the application and the smartphone is placed over the electric imp. The screen will rapidly flash black and white, this is how the application transfers the data to the device. The ElectricImp will now be online and the developer will be able to access the web based IDE (Integrated Development Environment). Squirrel is the programming language used in the IDE, it has similarities to C++ and Java making it relatively easy to learn. Device code to display the sensor readings can be seen below.</p>
      <center><img src="images/Tutorial7DeviceCode.jpg" class="img-responsive" alt="Screenshot of XSLT code"></img></center>
      <p>The function hardware.voltage(); is used to read the voltage received from the pins 8 and 9 temperature sensors as a floating-point value in Volts. The voltage readings from the pins are then calculated into degrees Celsius. The server.log(); function is used to display the temperature readings on the console in the device log. The function hardware.lightlevel(); is another function that can be used to detect and read the light level through the devices light sensor. The light level is returned as a 16-bit unsigned integer where high values mean light conditions and low values mean dark conditions.</p>
    </div>
    <div class="col">
    </div>
    
  </div>
</div>

<!--Footer-->
<?php include_once 'Template/footer.php'; ?>
</body>
</html>