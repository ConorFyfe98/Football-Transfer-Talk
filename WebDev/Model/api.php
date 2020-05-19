  <?php
  include_once 'Connection.php';
  
  function displayAllArticles(){
  	global $con;
  	$query = $con->prepare("
  		SELECT *
  		FROM newsarticles
  		ORDER BY ArticleID DESC
  		
  		");
  	
  	$query->execute();
  	$results = $query->fetchAll(PDO::FETCH_OBJ);
  	return json_encode($results);
  }
  
  function searchArticlesByDate(){
  	global $con;
  	$searchDate = filter_input(INPUT_POST, 'Date', FILTER_SANITIZE_STRING);
  	$query = $con->prepare("
  		
  		SELECT *
  		FROM newsarticles
  		WHERE ArticleDate LIKE '$searchDate%'
      ORDER BY ArticleID DESC
      
      ");
  	$query->execute();
  	$results = $query->fetchAll(PDO::FETCH_OBJ);
  	return json_encode($results);
   
  	
  }
  
  function displayArticleByID(){
  	global $con;
  	$id=$_GET['id'];
  	$query = $con->prepare("
  		SELECT *
  		FROM newsarticles
  		WHERE ArticleID=$id
  		
  		");
  	
  	$query->execute();
  	$results = $query->fetchAll(PDO::FETCH_OBJ);
  	return json_encode($results);
  } 
  

  
  function displayComments(){
  	global $con;
  	$id=$_GET['id'];
  	$query = $con->prepare("
  		SELECT * FROM comments where ArticleID=$id ORDER BY CommentTime DESC
  		
  		");
  	
  	$query->execute();
  	$commentresults = $query->fetchAll(PDO::FETCH_OBJ);
  	return json_encode($commentresults);
  	
  }
  
  function displayAllAccounts(){
  	global $con;
  	$query = $con->prepare("
  		SELECT *
  		FROM users
  		ORDER BY Username ASC
  		
  		");
  	
  	$query->execute();
  	$results = $query->fetchAll(PDO::FETCH_OBJ);
  	return json_encode($results);
  }
  
  function displaySensorData(){
    
   global $con;
   $query = $con->prepare("
     SELECT *
     FROM sensordata
     ORDER BY id DESC
     LIMIT 10
     
     
     ");
   $query->execute();
   while($results = $query->fetchAll(PDO::FETCH_ASSOC)){
    return $results; 
  }
}

?>