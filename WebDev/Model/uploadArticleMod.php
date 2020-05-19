<?php
include 'Connection.php';
//prepare statement
$query = $con->prepare("
    INSERT INTO newsarticles(Headline, SubHeadline, Description, MediaLink, MediaLink2, ArticleDate, Author)
    VALUES (:Headline, :SubHeadline, :Description, :MediaLink, :MediaLink2, :ArticleDate, :Author)
    
    ");

//assign parameters
$success = $query->execute([
    'Headline' => $Headline,
    'SubHeadline' => $SubHeadline,
    'Description' => $Description,
    'MediaLink' => $MediaLink,
    'MediaLink2' => substr($MediaLink2, -11),
    'ArticleDate' => $ArticleDate,
    'Author' => $Author
]);

$count = $query->rowCount();
//if count over 1 successfully uploaded
if ($count > 0) {
    echo"Insert Successful";
    header("Location: index.php");
} else {
    echo"Submission Failed.";	
}
?>