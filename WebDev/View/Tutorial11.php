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
      <h2>Week 11</h2>
      <hr>
      <p>News article information from an external RSS feed has been included into the website to add more up to date news content to the website. An external RSS feed that contains articles about the latest football news has been found. The RSS feed is being used to display the titles of the news articles as a list of clickable links that will take the user to the original article. PHP is used to load the attributes and content of the XML file into a SimpleXMLElement object by using the simplexml_load_file function and passing in the URL of the external RSS feed to the function. The XSLT file is then loaded into a SimpleXMLElement by using the simplexml_load_file function and passing the XSLT file. XSLT is a styling language for XML that can be used to transform XML documents to HTML format. XSLT stands for “eXtensible Stylesheet Language for Transformations“. The XSLT file consist of a template that specify that if the data in the XML file matches the template, then a statement will be performed. If none of the elements or attributes in the XML are matches to the template then none of the statements will perform.  A section of the code in the XSLT file is displayed below.</p>
      <center><img src="images/Tutorial11XSLT.jpg" class="img-responsive"  alt="Screenshot of XSLT code"></img></center>
      <p>The code in the XSLT states that for each of the item matches in the XML, place the link and title of the item into HTML to create a list of title links. XPATH is used to find matches to the statements by navigating through the elements and attributes of the RSS feed in the XML file. A processor is then used to join the data from the XML file and the XSLT stylesheet, the result is then returned and displayed using an echo statement.</p>
      <p>An advantage of XSLT is the ability of being able to use templates and statements to transform data from an XML file into HTML format. Using XSLT to transform the data from an XML file into an HTML format allows the data within the XML to be displayed in a presentable fashion to the users of the website. The use of XPATH in XSLT to search and identify elements and attributes within an XML file can be easier to use and more efficient than using a scripting language. The separation of the XML file and XSLT means it is simple to adapt the XSLT file to change the HTML output, the XSLT can also be linked with multiple XML files if they follow they use the same elements and attributes.</p>

    </div>
    <div class="col">
    </div>
    
  </div>
</div>

<!--Footer-->
<?php include_once 'Template/footer.php'; ?>
</body>
</html>