<?php
session_start();

if(isset($_POST['button'])){
  $Username = filter_input(INPUT_POST,'Username', FILTER_SANITIZE_STRING);
  $Password = filter_input (INPUT_POST,'Password', FILTER_SANITIZE_STRING);
//ensure captcha is filled out
  if(isset($_POST['g-recaptcha-response']))
    $captcha=$_POST['g-recaptcha-response'];

  $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Le_LnQUAAAAACKn-eiJgSVNYrS-7yOB4sl7Qqqs&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
  if($response['success'] == false)
  {
    echo "Please check the captcha form.";
  }
  else
  {

	//Check no fields are empty, if empty display error message.
    if(empty($_POST["Username"]) || empty($_POST["Password"])){ echo "<center>Please ensure all fields are filled in.</center>"; }else{
	  //encrypt password	
      $Salt = "cf01passwordSalt";
      $Password = $Password . $Salt;
      $Password = sha1($Password);
      //attempt login
      include '../Model/loginMod.php';
      
    }
  }
}
//create cookie for username
$cookie_name = "Username";
$cookie_value = $un;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>