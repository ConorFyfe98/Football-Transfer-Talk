<?php
session_start();
if(isset($_POST['button'])){
 
  $Fname = filter_input(INPUT_POST, 'Fname', FILTER_SANITIZE_STRING);
  $Lname = filter_input(INPUT_POST, 'Lname', FILTER_SANITIZE_STRING);
  $Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
  $Username = filter_input(INPUT_POST, 'Username', FILTER_SANITIZE_STRING);
  $Password = filter_input(INPUT_POST, 'Password', FILTER_SANITIZE_STRING);


// ensure captcha is ticked
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
    if(empty($_POST["Fname"]) || empty($_POST["Lname"]) || empty($_POST["Email"]) || empty($_POST["Username"]) || empty($_POST["Password"]) || empty($_POST["CPassword"])){ echo "<center>Please ensure all fields are filled in.</center>";}else{

     //validate input
     if (strlen($Fname) > 30){ 
       echo "First name must contain less than 30 characters.";
     }else{
       
      if (!preg_match("/^([a-zA-Z']+)$/",$Fname)) {
        echo "First name must only contain letters."; 
      }else{
       
       if (!preg_match("/^([a-zA-Z']+)$/",$Lname)) {
        echo "Last name must only contain letters."; 
      }else{
       
       if (!preg_match("/^([a-zA-Z']+)$/",$Username)) {
        echo "Username must only contain letters."; 
      }else{
       
       if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
      }else{

// Ensure password is strong
       if (strlen($Password) < 8) {
         echo "Password too short!";
       }else{
        
        if (!preg_match("#[0-9]+#", $Password)) {
          echo "Password must include at least one number!";
        }else{
          
         if (!preg_match("#[a-zA-Z]+#", $Password)) {
          echo "Password must include at least one letter!";
        }else{

          
         
	//Ensure that password and conformation password match
          if( $_POST['CPassword'] == ($_POST['Password'])){
			//encrypt password
            $Salt = "cf01passwordSalt";
            $Password = $Password . $Salt;
            $Password = sha1($Password);
			//attempt registration
            include '../Model/regMod.php';
          }
          else
          { 
            echo "<center>Passwords do not match.</center>";
          }  
        }
      }
    }
  }
}
}
}
}
}
}
}

?>