 <a href="index.php"><div class="p-3 mb-2 bg-warning text-dark" ><center><h2>Football Transfer Talk</h2></center></div></a>
 
 <div class="topnav" id="myTopnav">
  <a href="index.php" class="active">FTT</a>
  <a href="index.php">Home</a>
  <a href="Tutorial1.php">Tutorials</a>
  <a href="IoT.php">IoT</a>
  <a href="articlelist.php">Article list</a>
  <a href="morenews.php">More News</a>
  <a href="rss.php">RSS</a>
  <a href="weather.php">Weather</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<?php
$cookie_name = "Username";
//$_SESSION['Username'];
//echo $Username;
if (isset($_SESSION['loggedIn'])) {
  if (!isset($_COOKIE[$cookie_name])) {
    echo "";
  } else {
    
    echo "<center><h3>Hello " . $_COOKIE[$cookie_name] . " !</h3></center>";
    
  }
}

//if user is logged in then display log out button
if (isset($_SESSION['loggedIn'])) {
  if ($_SESSION['loggedIn']) {

    echo "<center>Logged in as: ". $_SESSION['Username']. " | <a href='../Controller/Logout.php'>Log Out</a></center>";
  }
  
    //if an admin is logged in display link to admin page
  if (isset($_SESSION['Admin'])) {
    if ($_SESSION['Admin']) {
      echo "<center><a href='Admin.php'>Admin</a></center>";
    }
  }
  
    //if user is a reporter then display upload article page.
  if (isset($_SESSION['Reporter'])) {
    if ($_SESSION['Reporter']) {
      echo "<center><a href='UploadArticle.php'>Upload Article</a></center>";
    }
  }
  
} else { // if user is not logged in display Register and Log in page link
  echo "<center><a href='Register.php'>Register</a> | ";
  echo "<a href='Login.php'>Log In</a></center>";
}

?>