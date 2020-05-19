 <?php
 include 'Connection.php';
 //prepare statement
 $query = $con->prepare("
  INSERT INTO users(Fname, Lname, Email, Username, Password, Admin, Reporter)
  VALUES (:Fname, :Lname, :Email, :Username, :Password, 'N', 'N')
  
  ");

// assign parameters
 $success = $query->execute([
  'Fname' => $Fname,
  'Lname' => $Lname,
  'Email' => $Email,
  'Username' => $Username,
  'Password' => $Password
]);

 $count = $query->rowCount();
//if row count is greater than 0 user is now registered
 if ($count > 0) {
  echo "You are now registered. <a href='Login.php'>Click here to log in.</a>";
  header("Location: Login.php");
} else {
  echo"Username or E-mail is already in use.";
}
?>