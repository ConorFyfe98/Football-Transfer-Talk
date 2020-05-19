<html>
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
	<?php include_once 'Template/header.php'; ?>
	<center>
		<h3>List of Articles:</h3>
		<br>
		<?php

		$xml = simplexml_load_file("XML/newsarticles.xml") ;
		$xsl = simplexml_load_file("stylearticlelists.xsl");
		$proc = new XSLTProcessor();
		$proc->importStyleSheet($xsl);
		$result = $proc->transformtoXML($xml);
		echo $result;

		?>
	</center>

	<?php include_once 'Template/footer.php'; ?>

</body>
</html>
