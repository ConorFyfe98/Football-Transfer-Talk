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
    <h2>Week 4</h2>
    <hr>
    <p>One of the security features of the registration and login form is Input validation. Input validation is a method of ensuring that only the expected format of data is entered by the user, this helps prevent against an SQL injection attack. Validating input increases the chances of safe and accurate data being accepted from the user. Input validation has been implemented on the front end of the site, but more importantly the backend using PHP as this is more secure. The number of characters and certain types of characters have been restricted on the form to protect against an attack. Functions are used to analyse the data and are combined with if statements to determine if the data received should be accepted, or an error message should be displayed. The strlen(); function is used to check the length of the input. The preg_match(); function is used to search the string for a match in the pattern, this can be used to restrict the use of special characters or numbers. filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL); is used to ensure that the user has provided a valid email format. </p>
    <p>The use of prepared statements is another security feature to protect against SQL injection attacks. Prepared statements allow the database to be queried securely by separating the query statement and the data entered by the user. The users input is later passed as a parameter into the statement template. This prevents attackers from altering the statement and performing a dangerous database query.</p>
    <p>Password conformation is a security feature of the registration form. Users are required to enter their password into the form twice, the passwords are then compared to check if the passwords match. The benefit of this security feature is, there is less chance of a user making a typing mistake twice, compared to entering their password once. Ensuring the user’s password is correct will prevent user frustration, as it saves the user having to go through a password resetting process. A hide and show password function is another option for ensuring the user enters the correct password. However, users may skip showing the password during the registration process. Therefore the hide and show function has been implemented into the login form only and not the registration.</p>
    <p>Password Encryption is a security feature of the website that ensures user’s passwords are stored safe and secure. Password encryption converts the user’s password into a bunch of random letters, numbers and special characters that are not understandable or readable. Password encryption protects the passwords as if hacker gains access to the database, they will have to go through the difficult process of decrypting the passwords. Encryption is essential as it protects user’s sensitive details that may be used for other accounts such as their bank account. Leakage of details would have a detrimental effect on the websites reputation.</p>
    <p>A security feature of the website is the use of POST instead of GET to pass information between locations. GET sends data visibly through the URL, this is not secure for sensitive information as any data being passed is visible. The POST method enhances the sites security as data is sent as a package in a separate communication with the script. The data entered by the user will not be visible in the URL, allowing passwords to be kept more secure.</p>
    
    
  </div>
  <div class="col">
  </div>
  
</div>
</div>

<!--Footer-->
<?php include_once 'Template/footer.php'; ?>
</body>
</html>