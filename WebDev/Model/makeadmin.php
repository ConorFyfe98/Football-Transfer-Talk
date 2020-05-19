<?php

include_once 'Connection.php';

$query = $con->prepare("
        
        UPDATE users SET Admin = 'Y'
        WHERE UserID = :id
        ");

$success = $query->execute([
    'id' => $id
]);

header("Location: ../View/Admin.php");

