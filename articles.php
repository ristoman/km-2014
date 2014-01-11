
<?php 

function article_listing($id){
	$route = "./articles/". $id . ".php";
	require($route);
	echo "<div class='col-lg-4 col-md-4 col-sm-4 col-xs-6'>
			<article>
				<a href='post.php?article={$id}'>
				<h6 class='milli'>{$headline}</h6>";
				get_image('article/' . $id .'/', 'cover.jpg');
				echo " <h5>{$title}</h5>
				</a>
			</article>
		</div>";
}

function get_article($id){
	$route = "articles/". $id . ".php";
	include($route);
	echo "<html lang='en-US'><head><title>{$title} | Klassik Magazine</title>";
   	include('header.php');
   	include('get_media.php');
   	echo" <div class='article'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-8 col-md-8 col-sm-8'>
						<div id='headline'>";
						
						get_image('article/' . $id , 'splash.jpg');

	echo"						
								<h1 class='gamma'>{$title}</h1>
								<h2 class='epsilon'>{$headline}</h2>
								<div class='social'>
											<div class='fb-share-button' data-href='http://klassikmagazine.com/photographer.php?id={$id}' data-type='button'></div>
											<a href='//www.pinterest.com/pin/create/button/' data-pin-do='buttonBookmark' ><img src='//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png' /></a>
											 <a href='https://twitter.com/share' class='twitter-share-button' data-lang='en'>Tweet</a>
											<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>
											</div>
						<div id='article-cover'>
						
						
								
						</div></div> ". $text .
				"	</div>
					</div>
				</div>
			</div>
		</div>
	";
	include('footer.php');

}

?>