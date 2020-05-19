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
    <h2>Week 3</h2>
    <hr>
    <p>The task of week three was to implement an API for the news article table in the database. API stands for “Application Programming Interface”. An API includes functions and procedures that allow for the communication of data or features between two or more applications or services. The API will be used to access and retrieve articles from the database that will then be displayed in the websites view. The API includes a connection file that contains the connection details required to access the database containing the articles. To begin with, three functions have been created, the number of functions in the API are likely to increase. The code in the API file can be seen below.</p>
    <div class='panel-body'><center><img src="images/Tutorial3API.jpg" class="img-responsive"   alt="Screenshot of API code"></img></center></div>
    <p>The first function displayAllArticles() retrieves all of the news articles in the database. The searchArticlesByDate() function selects and retrieves the articles in the database where the date matches the date entered by the user. The final function displayArticleByID() displays the article that the user has selected to view, by getting the id and retrieving the article in the database that matches the id. The results retrieved from the database are then encoded into JSON format using the json_encode() function. JSON is a common language used to transfer data around the internet, JSON allows any language to be able to access the API.</p>
    <p>The functions within the API to retrieve articles from the database are called from the websites view. The article results in JSON format are decoded using the json_decode() function. The results are placed into a loop to display all the articles in a presentable manner to the user. The code in the view can be seen below.</p>
    <div class='panel-body'><center><img src="images/Tutorial3View.jpg" class="img-responsive"  alt="Screenshot of API code"></img></center></div>
    <p>An advantage of using an API is all the CRUD functions related to articles are stored in the one file. CRUD stands for the Create, Update, Retrieve and Delete. This is an advantage as the API can be used to view all of the functions available to be performed within the site. These functions can then be called multiple times throughout the site, this will improve code readability as code will not be repeated. Calling functions within the API increases efficiency as time can be saved calling a function to the view compared to creating a new function each time. Functions within an API can be trusted that they will perform successfully due to previous testing. It is a good idea for developers to make use of an API as they are relatively simple to implement if the developer has knowledge of MySQL. An API will increase the scalability and maintainability of an application as code is separated and can be reused, having functions separate to the view will increase code readability.</p>
    
    
  </div>
  <div class="col">
  </div>
  
</div>
</div>

<!--Footer-->
<?php include_once 'Template/footer.php'; ?>
</body>
</html>