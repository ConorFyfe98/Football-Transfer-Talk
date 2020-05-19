  <!DOCTYPE html>
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

   <!--Search Bar-->

   <div class="container">
    <div class="row">
      <div class=col-sm>
        <br></br><!--temp-->
        <label for="Date">Search articles by date:  </label>
        <form class="form-inline mr-auto" method="POST" action="SearchResults.php">
          
          <input type="date" name="Date" id="Date" maxlength="32"><br>
          <input id="submit" type="submit" value="Search">
        </form>
        <br></br><!--temp-->
      </div>
    </div>
  </div>

  <!--Columns-->
  <div class="container">
    <div class="row">

      <?php
      include("../Model/api.php");
      $results     = displayAllArticles();
      $resultsjson = json_decode($results);
      for ($i = 0; $i < sizeof($resultsjson); $i++) {
        
        echo "<div class=col-sm-4>";
        echo "<div class='panel panel-default'>";
        echo "<div class='panel-heading'><b><div class='text'><a href='Article.php?id=" . $resultsjson[$i]->ArticleID . "' style='text-decoration:none;'>" . $resultsjson[$i]->Headline . "...</a></div></b></div>";
        echo "<div class='panel-body'><img src ='" . $resultsjson[$i]->MediaLink . "'class='img-responsive' style='width:100%;' alt='Image has not displayed'></div>";
        echo "<div class='panel-footer'><p>" . substr($resultsjson[$i]->Description, 0, 160) . "...</p> <p><b>Date: </b>" . $resultsjson[$i]->ArticleDate . "";
        echo "<center><a href='Article.php?id=" . $resultsjson[$i]->ArticleID . "' class='btn btn-warning'>Full Article</a></center>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
      }

      ?>
      
      
      
      
      
    </div>
  </div>

  <!--Footer-->
  <?php include_once 'Template/footer.php'; ?>

</body>
</html>