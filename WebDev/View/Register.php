<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'Template/head.php'; ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
            <form id="insert_reg" method="POST">
               <p class="text-center h3 mb-4">Register</p>
               <label for="Fname">First Name: </label>
               <input type="text" name="Fname" id="Fname" class="form-control" maxlength="128" placeholder="First Name" ><br>
               <label for="lname">Last name: </label>
               <input type="text" name="Lname" id="Lname" class="form-control" maxlength="128" placeholder="Last Name" ><br>
               <label for="lname">Email: </label>
               <input type="email" name="Email" id="Email" class="form-control" maxlength="128" placeholder="E-mail" ><br>
               <label for="username">Username: </label>
               <input type="text" name="Username" id="Username"  class="form-control" maxlength="28" placeholder="Username" ><br>
               <label for="password">Password: (Must be atleast 8 characters including a letter and number.)</label>
               <input type="password" name="Password" id="Password" class="form-control" maxlength="500" placeholder="Password" ><br>
               <label for="cpassword">Confirm Password: </label>
               <input type="password" name="CPassword" id="CPassword" class="form-control" maxlength="500" placeholder="Confirm Password" ><br>
               <div class="g-recaptcha" data-sitekey="6Le_LnQUAAAAAPjYqANwt2QZHdyMD1rffagAtoXQ"  style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
               <center><input name="button" id="submit" class="btn btn-warning" type="submit" value="Sign up"></center>
           </form>
           <?php include '../Controller/regCon.php';?>
       </div>
       
       

   </div>
   <div class="col">
   </div>

</div>
</div>

<!--Footer-->
<?php include_once 'Template/footer.php'; ?>

</body>
</html>