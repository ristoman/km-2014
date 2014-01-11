<?php
	require('articles.php');
	require_once('get_media.php');
	$post = $_GET['article'];
	
   	get_article($post);
?>
