<?php
if(isset($_POST['commentbutton'])){
	$id=$_GET['id'];
	$ArticleID = $id;
	$Username = $_SESSION['Username'];

	$Comment = filter_input(INPUT_POST, 'Comment', FILTER_SANITIZE_STRING);
	$CommentTime = date("Y:m:d H:i:s");



	if(empty($_POST["Comment"])){ echo "<center>Please ensure comment section is filled in.</center>";}else{
		include '../Model/addCommentMod.php';
	}
	
}