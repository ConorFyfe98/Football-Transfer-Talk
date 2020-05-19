<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <script src='https://www.google.com/recaptcha/api.js'>
  </script>
  <?php include_once 'Template/head.php'; ?>

</head>
<body>
 <!-- Header-->
 <?php include_once 'Template/header.php'; ?>
 
 
 <!--Columns-->
 <div class="container">
  <div class="row">
   <!--<form class="form-inline">-->
    
    <!--Display the main article-->
    <?php
    $id=$_GET['id'];
    include("../Model/api.php");
    $results = displayArticleByID();
    $resultsjson = json_decode($results) ;
    for ($i=0 ; $i<sizeof($resultsjson) ; $i++) {
     
      echo "<div class=col-sm>";
      echo "<div class='panel panel-default'>";
      echo "<div class='panel-heading'><h4><b>".$resultsjson[$i] -> Headline."</b></h4></div>";
      echo "<div class='panel-body'><img src ='".$resultsjson[$i] -> MediaLink. "'class='img-responsive' style='width:100%' alt='Image has not displayed'></div>";
      echo "<div class='panel-heading'><b>".$resultsjson[$i] -> SubHeadline."</b></div>";
      echo "<div class='panel-footer'>".$resultsjson[$i] -> Description."";
      if(!empty($resultsjson[$i] -> MediaLink2)){
       echo "<br><div class='video-responsive'><iframe width='560' height='315' src='https://www.youtube.com/embed/".$resultsjson[$i] -> MediaLink2."' frameborder='0' frameborder='0' allowfullscreen></iframe></div>";
     }else{   
     }
     echo "</div>";
     echo "<div class='panel-footer'><p><b>Author: </b>".$resultsjson[$i] -> Author." <p><b>Date: </b>".$resultsjson[$i]-> ArticleDate."</div>";
     echo "</div>";
     
     
     
   }

   ?>
   <!--Comments heading-->
   <h3>Comments</h3>
   <hr></hr>
   
   <?php
   if (isset($_SESSION['loggedIn'])) {
    if ($_SESSION['loggedIn']) {
     ?>
     
     <div class="form-group">
      <form id="insert_reg" method="POST" name="addcomment">
       <input type='hidden' name='ArticleID' value='<?php echo "$ArticleID"; ?>'/>
       <input type='hidden' name='Username' value='<?php echo "$Username"; ?>'/>
       <input type="text" name="Comment" id="Comment" class="form-control" placeholder="Write a comment here..." maxlength="500" required><br>
       <center><input name="commentbutton" id="submit" class="btn btn-warning" type="submit" value="Submit"></center>
     </form>
     <?php include '../Controller/addCommentCon.php';?>
   </div>
   
   
   
   <hr>
   
   
   <?php
   
   
   
   
 }}else{
  echo"<center>To leave a comment please <a href='Login.php'>Log in</a> or <a href='Login.php'>Register</a></center>";
  echo "<hr></hr>";
}

?>




<?php
$commentresults = displayComments();
$commentresultsjson = json_decode($commentresults) ;

for ($i=0 ; $i<sizeof($commentresultsjson) ; $i++) {
	$output .= "<p><b><h5>" .$commentresultsjson[$i]->Username . "</b> | "  .$commentresultsjson[$i]->CommentTime. "</h5></p>";
	$output .= "<p>" .$commentresultsjson[$i]->Comment. "</p>";
	$output .= "<hr>";
  
}
echo $output;
?>

</div>

</div>
</div>


<!--Footer-->
<?php include_once 'Template/footer.php'; ?>


</body>
</html>