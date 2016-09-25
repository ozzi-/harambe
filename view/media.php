<?php
	$ytmediaFilePath=__DIR__."/../data/ytmedia";
	$ytmediaFileContent = @file_get_contents($ytmediaFilePath,true);
	if($ytmediaFileContent=== FALSE){
		die("Error loading the media file. Please call the admin silly names for his crime.");
	}
	$ytmediaFileContent=preg_replace( "/\r|\n/", "", $ytmediaFileContent);
	$ytmediaArr = explode("+",$ytmediaFileContent);
	$ytmediaCount = count($ytmediaArr);
	foreach ($ytmediaArr as $ytmedia){
		echo("<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/$ytmedia\" frameborder=\"0\" allowfullscreen></iframe>");
	}
?>