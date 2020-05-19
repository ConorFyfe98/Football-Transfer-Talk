<?php
include 'Connection.php';

//encrypt password
$sql = "SELECT * FROM users WHERE Username = :Username
AND Password = :Password";

$stmt = $con->prepare($sql);
$success = $stmt->execute(['Username'=> $Username, 'Password' => $Password]);

if($success && $stmt->rowCount() > 0){
 $User = $stmt->fetch(PDO::FETCH_OBJ);
 $Admin = $User->Admin;
 $Reporter = $User->Reporter;
 //   Check if user is an admin or not.
 if($Admin == 'Y'){
  $_SESSION['Admin'] = true;
}
else {
 $_SESSION['Admin']= false;
}
//Check if user is a reporter or not.
if($Reporter == 'Y'){
  $_SESSION['Reporter'] = true;
}
else {
 $_SESSION['Reporter']= false;
}
//relocate to index
header("Location: index.php");
$_SESSION['loggedIn'] = true;
$_SESSION['Username'] = $Username;
}
else
{
	//display error message
  echo "<center>Username or Password is incorrect, Please try again.</center>";
  
}
?>