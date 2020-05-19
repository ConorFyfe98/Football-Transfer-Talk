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
		<h3>Find more news:</h3>
		<br>
		<?php
		//load xml file from url
		$xml = simplexml_load_file("https://www.eyefootball.com/football_news.xml") ;
		//load xslt stylesheet
		$xsl = simplexml_load_file("stylearticlelists.xsl");
		//declare new XSLTProcessor
		$proc = new XSLTProcessor();
		$proc->importStyleSheet($xsl);
		$result = $proc->transformtoXML($xml);
		echo $result;

		?>
	</center>

	<?php include_once 'Template/footer.php'; ?>

</body>
</html>
