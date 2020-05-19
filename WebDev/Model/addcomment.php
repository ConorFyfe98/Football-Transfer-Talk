<?php

include_once 'Connection.php';

		$query = $con->prepare("
			INSERT INTO comments(ArticleID, Username, Comment, CommentTime)
			VALUES (:ArticleID, :Username,:Comment, :CommentTime)
			
			");


		$success = $query->execute([
			'ArticleID' => $ArticleID,
			'Username' => $Username,
			'Comment' => $Comment,
			'CommentTime' => $CommentTime
		]);

		$count = $query->rowCount();

		if ($count > 0) {
			header("Location: ../View/Article.php?id=" . $ArticleID . "");
		} else {
			echo"Sorry please try again.";
		}

?>