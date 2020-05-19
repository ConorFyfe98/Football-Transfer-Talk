<!DOCTYPE html>
<html>

<body>
	<?php
	try{
		$host = '';
		$dbname = '';
		$username = '';
		$password = '';
		
		$con = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8',$username,$password);
		echo "";
	} catch(PDOException $e){
		die("connection failed");
		$connect = 'non';
	}
	?>
</body>
</html>