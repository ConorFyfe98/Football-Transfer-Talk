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
 <!-- Header-->
 <?php include_once 'Template/header.php'; ?>
 
 <?php include_once 'Template/tutorialDropdown.php'; ?>

 <!--Columns-->
 <div class="container">
  <div class="row">
    
   <div class="col">
   </div>

   <div class="col-12">
    <h2>Week 2</h2>
    <hr>
    <center><img src="images/Tutorial2RelationalDiagram.jpg" class="img-responsive"  alt="Relation Diagram"></img></center>
    <p>The diagram above shows the database design to store the data required for the site to perform. Designing a database that is suitable for a website is a high priority task, as the database holds the information required for the site to function. The database for the website includes three tables; users, newsarticles, and comments. The three tables are suitable for storing the required data of the website. Article data stored in the database will be displayed on the website. Users of the website will be able to leave comments on articles and upload articles if they are verified as a reporter. </p>
    <p>The relationships between the tables is suitably designed for the website to perform, these are presented in the diagram above. Each user can make one or more comments and each comment can only have one user. Users can create one or more articles, while every article must only have one user responsible for the articles creation. Articles can have many comments, while each comment in the database can only be related to one article. </p>
    <p>The columns of the user table allow the users account details to be suitably stored. To verify if a user should have access to admin or reporter features, two columns are included in the user table Admin and Reporter. Both columns have the type char (1), every new user will automatically be assigned ‘N’ in both the columns to identify they are not an admin or a reporter. Admin users will have access to an admin panel that contains functions to change a regular user’s account to an Admin or Reporter account. ‘Y’ will be assigned to the column if a user is granted as an Admin or Reporter, the user will then be able to access the admin panel or upload an article. The columns in newsarticle table allow article data to be successfully stored. The table features a MediaLink column that stores an images data uploaded by a user as a file or URL. MediaLink2 will allow the user to upload a video or potentially an audio file. The comments and newsarticle table both feature a column with the type timestamp, this is used to store the current date and time the article or comment is inserted into the database. Overall the database design allows for the required data to be stored effectively and successfully for the website to perform.</p>
    <p>A summary is displayed for each of the articles on the homepage. The full article can be viewed by clicking the title of the article or the full article button. The PHP function substr(); is used to create a summary by displaying a section of the full articles description. The articles details including the description are retrieved from the database, and the substr(); function is used to display the first 160 characters of the description. The code can be seen below.</p>
    <center><img src="images/Tutorial2Substr.jpg" class="img-responsive"  alt="Relation Diagram"></img></center>
  </div>
  <div class="col">
  </div>
  
</div>
</div>

<!--Footer-->
<?php include_once 'Template/footer.php'; ?>
</body>
</html>