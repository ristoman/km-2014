<?php

function article_listing($id, $headline, $title){
	echo "<div class='col-lg-4 col-md-4 col-sm-4 col-xs-6'>
			<article>
				<a href='article{$id}.php'>
				<h6 class='headline'>{$headline}</h6>";
				get_image('article/' . $id .'/', 'cover.jpg');
				echo " <h3 class='delta'>{$title}</h3>
				</a>
			</article>
		</div>";
}

function get_article($id, $headline, $title, $text='Empty Post'){

	echo "<div id='article-cover'>
			<div class='container'>
				<div class='row'>";
					get_image('article/' . $id .'/', 'splash.jpg');
					echo "<div id='headline' class='col-lg-12'>
						<div class='col-lg-8 col-md-8 col-sm-8 col-xs-8'>
							<h1 class='beta'>{$title}</h1>
							<h2 class='delta'>{$headline}</h2>
						</div>
					</div>";
		echo 	"</div>
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

}

?>