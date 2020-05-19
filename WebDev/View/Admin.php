
<?php

session_start();
if(!$_SESSION['Admin']){
  header('location: index.php');
}
?>

<!DOCTYPE html>
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

 <!--Columns-->
 <div class="container">
  <div class="row">

    <?php
    include("../Model/api.php");
    $results     = displayAllAccounts();
    $resultsjson = json_decode($results);
    
    echo "<table class='table'>";
    echo "<th>Users</th><th>Admin Controls</th>";
    for ($i = 0; $i < sizeof($resultsjson); $i++) {
      echo "<tr>";
      echo "<td><b>First Name: </b>" . $resultsjson[$i]->Fname . "<br><b>Last Name: </b>" . $resultsjson[$i]->Lname . "<br><b>Email: </b>"  . $resultsjson[$i]->Email . "<br><b>Username: </b>"  . $resultsjson[$i]->Username . "<br><b>Admin: </b>"  . $resultsjson[$i]->Admin . "<br><b>Reporter: </b>"  . $resultsjson[$i]->Reporter . "</td>";
      echo "<td>" . "<a href='../Controller/makeAdminCon.php?id=". $resultsjson[$i]->UserID ."'><button>Verify Admin</button></a>" . "  " . "<a href='../Controller/makeReporterCon.php?id=" . $resultsjson[$i]->UserID . "'><button>Verify Reporter</button></a>" . " <br></br>" . "<a href='../Controller/removeAdminCon.php?id=" . $resultsjson[$i]->UserID . "'><button>Remove Admin</button></a>" . "  " . "<a href='../Controller/removeReporterCon.php?id=" . $resultsjson[$i]->UserID . "'><button>Remove Reporter</button></a>" . "</td>";
      
      echo "</tr>";
    }
    echo "</table>";
    ?>   
    
  </div>
</div>

<!--Footer-->
<?php include_once 'Template/footer.php'; ?>

</body>
</html>