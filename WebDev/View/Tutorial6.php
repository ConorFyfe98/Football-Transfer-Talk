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
      <h2>Week 6</h2>
      <hr>
      <p>A framework in computing is a basic set of rules or procedures that a developer or group of developers can opt to use to develop their program in a systematic format to provide a structure to their overall project.</p>
      <p>A feature of popular PHP frameworks such as Laravel and Symfony is they implement the MVC software architecture pattern. MVC is an acronym that stands for Model, View, and Controller. The MVC architecture framework separates the application into three parts the model, the view and the controller. The model represents the data of which the application operates. The view is the user interface of the application, which can display data from the model via the controller, and also display options to the user that will allow the user to send actions and data to the controller. The controller receives data and actions from the view then passes them to manipulate or update data in the model, the controller also interacts with the view to display the data received from the model. The separation of the presentation from the view allows for better documentation and greater maintainability of the application.</p>
      <p>PHP frameworks allow for Rapid-Application-Development (RAD), Laravel and Symfony both feature PHP libraries allowing developers to create applications in a quicker period by using functions from the PHP libraries as oppose to writing time-consuming code from scratch to produce the required functions. These functions allow the developer to create well organized and maintainable code as functions can be re-used to prevent code repetition throughout the program. The developer can also feel reassured as code in the libraries will be up to date and tested to ensure it performs correctly.</p>
      <p>Security is a significant consideration when creating an application, PHP frameworks such as Laravel have security features that provide the developer's application with security within the framework. Laravel ensures that passwords are not visible as they are encrypted using both hash and salt, this provides security as if a hacker was able to gain access to the passwords they would be difficult to decrypt. Prepared SQL statements are also to prevent SQL injection attacks.</p>
      <p>Laravel comes with PHPUnit a testing feature that allows for test-driven development. PHPUnit enables the developer to perform unit tests on the code, by writing a test to ensure that the code will perform as expected to pass the test as opposed to loading the application in the browser to ensure the code performs correctly.</p>
    </div>
    <div class="col">
    </div>
    
  </div>
</div>

<!--Footer-->
<?php include_once 'Template/footer.php'; ?>
</body>
</html>