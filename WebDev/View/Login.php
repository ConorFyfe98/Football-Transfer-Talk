<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include_once 'Template/head.php'; ?>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script>
   function passwordVisibility() {
    var password = document.getElementById("Password");
    if (password.type === "password") {
      password.type = "text";
    } else {
      password.type = "password";
    }
  } 
  
</script>
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


<body>
  <?php include_once 'Template/header.php'; ?> 

  <!--Columns-->
  <div class="container">
    <div class="row">

      <div class="col">
      </div>


      <div class="col-8">
       <div class="form-group">
        <form id="attempt_login" method="POST" name="login">
         <p class="text-center h3 mb-4">Sign in</p>
         <label for="username">Username: </label>
         <input type="text" class="form-control" name="Username" id="Username" maxlength="28" placeholder="Username" ><br>
         
         <label for="password">Password: </label>
         <input type="password" class="form-control" name="Password" id="Password" maxlength="500" placeholder="Password" ><br>
         
         <label for="checkbox">Show password? </label>
         <input type="checkbox" onclick="passwordVisibility()" name ="checkbox" id ="checkbox">
         
         <div class="g-recaptcha" data-sitekey="6Le_LnQUAAAAAPjYqANwt2QZHdyMD1rffagAtoXQ" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
         <center><button name = "button" class="btn btn-warning" id="submit" type="submit" value="Log in">Log in</button></center>
       </form>
       <?php include '../Controller/loginCon.php';?>
     </div>

   </div>

   <div class="col">
   </div>

 </div>	
</div>
</div>

<!--Footer-->
<?php include_once 'Template/footer.php'; ?>

</body>
</html>