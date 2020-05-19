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
      <h2>Week 12</h2>
      <hr>
      <p>The final task included implementing the use of an external API / Web Service into the website. An external API is used to display information about the current weather in a specified location in world. Displaying up to date weather information is achieved through the use of OpenWeatherMap.orgs API. OpenWeatherMap is an online service that offer free use of APIs containing accurate data about the current weather status of over 200,000 cities around the world. Information on the weather such as the temperature, wind speed, cloudiness, humidity, sunrise and sunset can be retrieved from the API and displayed in a presentable fashion on a website. Although OpenWeatherMap provide a free version of the API, there are restrictions in place for using the web service without any costs. Users not paying for the service cannot make as many calls per minute as subscribed users. In order to make a request to retrieve weather data from the API, an API- key is required. Requests made to the API without the inclusion of an API key will not be processed. An API-key can be obtained by registering an account with OpenWeatherMap. Once registered an API-key will be provided and activated within an hour of creating the account. OpenWeatherMap record the number of calls an account makes per minute by tracking the unique API-key to the account. If too many requests per minute are made, then the account will be suspended and an email will be sent requesting the account upgrades to a paid subscription. It is important that the unique API-key is kept safe and secure to prevent a third-part using the API-key to make requests, as this could possibly result in the account being charged. The login system on OpenWeatherMaps helps keep the API-key for each account secure. The website files containing the request to the external API must also be kept secure as this is where the API-key will be used.</p>
      <center><img src="images/Tutorial12PHPFunctions.jpg" class="img-responsive"  alt="Screenshot of PHP code"></img></center>
      <p>PHP is used to request and retrieve the temperature, cloudiness and wind speed of a location from the external API, the results can either be received in JSON or XML. The PHP functions json_decode() and file_get_contents() function are both used. A link to the OpenWeatherMap API that contains the parameter values of the desired city and API-key is placed within the file_get_contents() function. The json_decode() function is then used to decode the weather information results retrieved from the file_get_contents() function. The up to date weather data of the chosen location retrieved from the external API is displayed using echo statements.</p>
      
    </div>
    <div class="col">
    </div>
    
  </div>
</div>

<!--Footer-->
<?php include_once 'Template/footer.php'; ?>
</body>
</html>