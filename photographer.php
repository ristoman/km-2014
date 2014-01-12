   <?php
   $photographers=array('Aaron Sosa', 'Cade Martin', 'Fran Martinez', 'Jonas Jensen', 'Karim Hesham', 'Kristin Sinclair', 'Lisa Sciascia', 'Robin Westfield');
   include('header.php'); 
   include('get_media.php');

   	$id= $_GET['id'];
   	$route = (int) $id;
	$route++;
	$dir = 'im/photographer/'. $route ;
	$route = 'photographer/'.$route ;
    // integer starts at 0 before counting
    $i = 0;

    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
?>
	<html lang="en-US">
	<head>
	<title><?php echo $photographers[$id];?> | Klassik Magazine</title>
   	<div id="photographer">
			<div class='container'>
				<div class='row'>
					<div id='headline' class='col-lg-12'>
						<div class='col-lg-12'>
							<?php echo "<h1>{$photographers[$id]}</h1>
										<h2>Featured Photographer</h2>
											<div class='social'>
											<div class='fb-share-button' data-href='http://klassikmagazine.com/photographer.php?id={$id}' data-type='button'></div>
											<a href='//www.pinterest.com/pin/create/button/' data-pin-do='buttonBookmark' ><img src='//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png' /></a>
											 <a href='https://twitter.com/share' class='twitter-share-button' data-lang='en'>Tweet</a>
											<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>
											</div>"; 
							?>
						</div>
					</div>
				</div>
				<div class="row">
					<div id='photo-slideshow' class='carousel slide' data-interval='4000' data-ride='carousel'>
	  					<ol class='carousel-indicators'>
	  						<li data-target='#photo-slideshow' data-slide-to='0' class='active'></li>
	  					<?php
	  						
	  						for ($count=1; $count<$i; $count++){
						    echo "<li data-target='#photo-slideshow' data-slide-to='{$count}'>
						    </li>";
						    }

						?>
					  	</ol>
  						<div class='carousel-inner'>
						<?php

					    	for ($count=0; $count<$i; $count++){
							    carousel_element($route , $count);
			  				}
						?>
	 					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<?php 
		echo"<div id='article-content'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12'>";
							
							$text = (file_exists($route .'/interview.php') ? file_get_contents($route .'/interview.php') : '') ;
							echo $text;

			echo" 	</div>
				</div>
				<div class='col-lg-12'>";
							include('newsletter.php');
			echo" </div>
			</div>
		</div>";
	
	include('footer.php') ?>
</html>