<?php

include_once 'Connection.php';

$query = $con->prepare("
	
	UPDATE users SET Reporter = 'N'
	WHERE UserID = :id
	");

$success = $query->execute([
	'id' => $id
]);

header("Location: ../View/Admin.php");
?>