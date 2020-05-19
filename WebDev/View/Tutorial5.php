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
    <h2>Week 5</h2>
    <hr>
    <p>One of the security features for users uploading articles to the website is the reporter validation feature. Users on the website must be verified as a reporter to upload articles. This is achieved by including a column in the users table with the type char(1). Reporters will have ‘Y’ assigned to the column whereas regular users will automatically be assigned ‘N’. Admin users are the only users that can verify another user as a reporter, this makes sure that only trusted users on the website can upload articles. An upload article page will only be displayed once a user has been verified as a reporter, this will be hidden from regular users. A redirect security feature has also been implemented. If any users attempt to access the upload article page by URL, they will be redirected to the homepage if they are not logged in as a reporter.</p>
    <p>reCAPTCHA is a security feature provided by Google that has been implemented. reCaptcha is a free security service that can be used to protect against spam and the misuse of forms. The advantage of reCAPTCHA is it prevents against the use of spam robots. reCAPTCHA presents the user with a question that must be answered before the form is completed, this makes it extremely difficult or impossible for spam robots to fill out forms. The questions presented become more difficult each time the user attempts to fill out the form within a short time period. ReCAPTCHA will be used on the login, registration and upload articles form. If a user gains access to a trusted reporters account by guessing their details or a reporter has shared them, reCAPTCHA will prevent the user rapidly spamming the website with article uploads.</p>
    <p>Input validation is a security feature of the upload article form. Similar to the registration and login form input validation has been implemented to ensure only safe and accurate data is entered by the user. HTML and PHP are used to ensure that only valid data is accepted. PHP functions strlen(); and preg_match(); are used to analyse the length and characters entered by the user, if statements are then used to decide if the data is valid. Image file validation is a feature of the upload article form, as reporters have the option to upload a file from their phone, tablet or desktop. Image file validation is important as it can prevent dangerous and harmful files being uploaded. Image validation is achieved by creating an array of acceptable image extensions, and using the in_array() function to determine if the image type matches an extension in the array.<p>
     <p>Prepared statements have been used throughout the site. The security benefits of using a prepared statement is that the insert statement is compiled separately and executed once the parameters are passed into the statement. This means that the statement cannot be altered as the statement will not execute any SQL injected by an attacker. Attackers may attempt to perform harmful statements to retrieve or delete data.</p>
     
     
   </div>
   <div class="col">
   </div>
   
 </div>
</div>

<!--Footer-->
<?php include_once 'Template/footer.php'; ?>
</body>
</html>