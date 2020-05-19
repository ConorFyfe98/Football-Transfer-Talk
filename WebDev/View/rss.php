<?php
include_once '../Model/Connection.php';

global $con;
//perpare statement
$newsarticles = $con->prepare("
	SELECT SQL_CALC_FOUND_ROWS *
	FROM newsarticles
	ORDER BY ArticleID DESC
	");
$newsarticles->execute();
$results = array();
while($forum = $newsarticles->fetchAll(PDO::FETCH_ASSOC)){
	array_push($results, $forum); 
}

if(count($results)){
	//call function to create rss
	generateXML($results);
}

function generateXML($results){
	
	$dom = new DOMDocument('1.0', 'utf-8');
	$dom->formatOutput = true;	
	$root = $dom->createElement('rss'); 
	$dom->appendChild($root);
	$version = $dom->createAttribute("version");
	$root->appendChild($version);
	$versionValue = $dom->createTextNode("2.0");
	$version->appendChild($versionValue);
	
	$channel = $dom->createElement('channel');
	//create title
	$webpageTitle = "Football Transfer Talk";
	$webpageUrl = "https://mayar.abertay.ac.uk/~1604475/WebDev/View/index.php";
	$webpageDescription = "The latest transfer news from the world of football";
	
	$channelTitle = $dom->createElement('title', $webpageTitle); 
	$channel->appendChild($channelTitle);
	
	$channelLink = $dom->createElement('link', $webpageUrl); 
	$channel->appendChild($channelLink);
	
	$channelDescription = $dom->createElement('description', $webpageDescription); 
	$channel->appendChild($channelDescription);
	
	
	$root->appendChild($channel);

	//for each result place data into correct tag within the item tag
	for($j=0; $j<count($results); $j++){
		for($i=0; $i<count($results[$j]); $i++){
			$Headline = $results[$j][$i]['Headline'];
			$Domain = "https://mayar.abertay.ac.uk/~1604475/WebDev/View/Article.php?id=";
			$link = $results[$j][$i]['ArticleID'];
			$url = 'https://mayar.abertay.ac.uk/~1604475/WebDev/View/Article.php?id=' . $link . '';
			$Description = $results[$j][$i]['Description'];
			
			$newsarticle = $dom->createElement('item');
			
			$Headline = $dom->createElement('title', $Headline); 
			$newsarticle->appendChild($Headline);
			
			$link = $dom->createElement('link', $url); 
			$newsarticle->appendChild($link);
			
			$guid = $dom->createElement('guid', $url); 
			$newsarticle->appendChild($guid);

			
			$Description   = $dom->createElement('description', $Description); 
			$newsarticle->appendChild($Description);
			


			$channel->appendChild($newsarticle);
		}
	}
	//load rss feed to xml file
	echo $dom->save('XML/newsarticles.xml').''; 
	header("Location: ../View/XML/newsarticles.xml");
	
}