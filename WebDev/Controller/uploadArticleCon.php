<?php
session_start();


if(isset($_POST['button'])){
	//sanatize input received
	$Headline = filter_input(INPUT_POST, 'Headline', FILTER_SANITIZE_STRING);
	$SubHeadline = filter_input(INPUT_POST, 'SubHeadline', FILTER_SANITIZE_STRING);
	$Description = filter_input(INPUT_POST, 'Description', FILTER_SANITIZE_STRING);
	$MediaLink2 = filter_input(INPUT_POST, 'MediaLink2', FILTER_SANITIZE_STRING);
	$ArticleDate = date("Y:m:d H:i:s");
	$Author = $_SESSION['Username'];

	//validate image by declaring acceptable extensions
	$ValidExtension = array("jpg", "JPG", "jpeg", "JPEG", "png", "PNG", "gif", "GIF");
	$temp = explode(".", $_FILES["image"]["name"]);
	$extension = end($temp);
	//compare file type to the extensions, if a match the file is accepted
	if (($_FILES["image"]["size"] < 4000000) && in_array($extension, $ValidExtension)){
		if($_FILES['image']['error'] >0){
			echo "Sorry an error occurred. Please try a different image.". $_FILES['image']['error'] . '';
		}
		else{
			//create a random number to be added to the file name
			$rand = rand();

			$filetmp = $_FILES['image']['tmp_name'];
			$filename = $_FILES['image']['name'];
			$randnum = rand();
			//identify file path for image to be stored
			$filetype = $_FILES['image']['type'];
			$filepath = $randnum.basename($_FILES["image"]["name"]);
			@move_uploaded_file($_FILES['image']['tmp_name'], $filepath);

			$MediaLink = $filepath;
			
			//Check no fields are empty, if empty display error message.
			if(empty($_POST["Headline"]) || empty($_POST["SubHeadline"]) || empty($_POST["Description"]))
			{ 
				echo "<center>Please ensure at least Headline, Subheadline, Description and Image are filled in.</center>";
			}
			else
			{
				//validate description length
				if(strlen($_POST["Description"]) <= 160){
					echo "Description must be longer.";
				}
				else
				{
					//attempt to insert article
					include '../Model/uploadArticleMod.php';

				}

			}

		}
	}
}
?>