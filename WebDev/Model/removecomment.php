<?php

include_once 'Connection.php';

$id = $_GET['id'];

$query = $con->prepare("
        
        DELETE FROM comments
        WHERE CommentID = :id
        ");

$success = $query->execute([
    'id' => $id
]);

//header("Location: ../View/index.php?" . $ArticleID . ");
?>