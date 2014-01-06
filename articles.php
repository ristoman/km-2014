<?php

function article_listing($id){
	$route = "./articles/". $id . ".php";
	require_once($route);
	echo "<div class='col-lg-4 col-md-4 col-sm-4 col-xs-6'>
			<article>
				<a href='post.php?article={$id}'>
				<h6 class='headline'>{$headline}</h6>";
				get_image('article/' . $id .'/', 'cover.jpg');
				echo " <h3 class='delta'>{$title}</h3>
				</a>
			</article>
		</div>";
}

function get_article($id){
	$route = "./articles/". $id . ".php";
	include($route);
	echo "<html lang='en-US'>
	<head>
	<title>{$title} | Klassik Magazine</title>";

   	include('header.php');

   	echo"<div id='article-cover'>
			<div class='container'>
				<div class='row'>";
					get_image('article/' . $id , 'splash.jpg');
			echo "	<div id='headline' class='col-lg-12'>
						<div class='col-lg-8 col-md-8 col-sm-8 col-xs-8'>
							<h2 class='delta'>{$headline}</h2>
							<h1 class='beta'>{$title}</h1>
							<h2 class='social'>
											<div class='fb-share-button' data-href='http://klassikmagazine.com/photographer.php?id={$id}' data-type='button'></div>
											<a href='//www.pinterest.com/pin/create/button/' data-pin-do='buttonBookmark' ><img src='//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png' /></a>
											 <a href='https://twitter.com/share' class='twitter-share-button' data-lang='en'>Tweet</a>
											<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>
											</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id='article-content'>
			<div class='container epsilon'>
				<div class='row'>
					<div class='col-lg-8 col-md-8 col-sm-8'>
							{$text}
					</div>
					<div class='col-lg-4 col-md-4 col-sm-4 hidden-xs centered'>
						<img src='http://placehold.it/300x600'
					</div>
				</div>
			</div>
		</div>
	";
	include('footer.php');

}

?>