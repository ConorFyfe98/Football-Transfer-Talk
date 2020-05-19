<?php
session_start();
if(!$_SESSION['Reporter']){
  header('location: index.php');
}
?>
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


 <!--Columns-->
 <div class="container">
  <div class="row">
    
   <div class="col">
   </div>

   <div class="col-8">
     <div class="form-group">
      <form id="insert_reg" method="POST" enctype="multipart/form-data">
       <p class="text-center h3 mb-4">Upload an Article</p>
       <label for="Headline">Headline: </label>
       <input type="text" name="Headline" id="Headline" class="form-control" placeholder="Headline"><br>
       <label for="SubHeadline">Sub headline: </label>
       <input type="text" name="SubHeadline" id="SubHeadline" class="form-control" placeholder="Sub headline"><br>
       <label for="SubHeadline">Description: (Must be more that 160 characters)</label>
       <input type="text" name="Description" id="Description" class="form-control" placeholder="Description"><br>
       <label for="image">Image: </label>
       <input type="file" name="image" id="image"  class="form-control" ><br>
       <label for="MediaLink2">YouTube Video URL: </label>
       <input type="MediaLink2" name="MediaLink2" id="MediaLink2" class="form-control" placeholder="YouTube Video URL Only"><br>
       <center><input name="button" id="submit" class="btn btn-warning" type="submit" value="Submit"></center>
     </form>	
   </div>
   <?php include_once '../Controller/uploadArticleCon.php';?>
   
 </div>
 <div class="col">
 </div>
 
</div>
</div>

<!--Footer-->
<?php include_once 'Template/footer.php'; ?>

</body>
</html>