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
      <h2>Week 10</h2>
      <hr>
      <p>RSS can stand for “Rich Site Summary” or as it originally stood for “Real Simple Syndication”. RSS is an XML file that can be used to display the latest content of information within a website. An RSS feed has been implemented on the website. PHP is used to create the RSS feed that shows the news articles within the database of the site. PHP is used to retrieve the latest up to date articles within the news articles table and convert the data into a valid XML format. The data is then loaded into an XML file that can be used as an external RSS by other websites. The RSS feed has been created with the required XML tags. The channel tag includes tags that display the title of the website, a URL link to the website's homepage, and a description about the site. The item tag refers to the data of each article on the website. The item tag includes the title of the article, a URL link to the specific articles page, and a description of the article. The RSS was checked to ensure it was valid by using an online RSS XML file format validator.</p>
      <p>The RSS feed can be used by other websites, as they can retrieve the information from the site that is held within the XML file and display the data on their own website. An RSS feed is a useful feature as other websites using the sites RSS feed to show news articles will lead to the exposure of the websites content to more users. Due to the content of the website being exposed to more users, this could lead to an increase in traffic to the website, as other websites using the RSS feed should be providing a reference to the site. The RSS feed can be used internally to display articles within the database as it will be up to date. A page has been created that uses the RSS feed to display the list of articles the website contains and a link to each article. The list of articles allows the user to view all the news articles within the website easier, as they do not have to scroll through the homepage.</p>
      <p>An external RSS feed could be used to display news articles from other websites in conjunction with articles of the site to provide more content for users. An external RSS feed can improve the content of the website and help ensure the website is up to date as the latest news articles from other sites can be displayed. A news website that features a suitable amount of content that is up to date will encourage users to use the website regularly.</p>

    </div>
    <div class="col">
    </div>
    
  </div>
</div>

<!--Footer-->
<?php include_once 'Template/footer.php'; ?>
</body>
</html>