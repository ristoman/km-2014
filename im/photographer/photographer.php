<html lang="en-US">
	<head>
	<title>International Agency for the Promotion of Culture | Klassik Magazine</title>
   <?php include_once('header.php') 
   $photographers=['Aaron Sosa', 'Cade Martin', 'Fran Martinez', 'Jonas Jensen', 'Karim Hesham', 'Kristin Sinclair', 'Lisa Sciascia', 'Robin Westfield'];
   ?>
  <div id='article-cover'>
			<div class='container'>
				<div class='row'>";
				<?php
					$id=$_GET['id'];
					get_image('photographer', . $id . '.jpg', $photographers[$id] );
				?>
		 </div>
			</div>
		</div>
		<div id='article-content'>
			<div class='container epsilon'>
				<div class='row'>
					<div id='headline' class='col-lg-12'>
						<div class='col-lg-8 col-md-8 col-sm-8 col-xs-8'>
							<h1 class='gamma'>{$title}</h1>
						</div>
						<div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>
							<h2 class='epsilon'>{$headline}</h2>
						</div>
					</div>
					<div class='col-lg-8 col-md-8 col-sm-8'>
						<p><span class='dropcap'>T</span>he legend of Chanel brand has been unsurpassed since Gabrielle Chanel made the radical move of creating a perfume even though being a ‘’couturier’’. The rest is history. Even more, the House of Chanel has been fortunate enough to have Karl Lagerfeld as a creative director, a personality that maintained in terms of concept the Chanel legacy, revolutionizing in a creative way. There was something new to view in each Chanel collection, be it Resort, Haute Couture or Ready-to-Wear. Karl has the magic stick that creates iconic pieces and accessories even out of nothing, something that, along with his unique personality, have made him one of the most influencing person in fashion today.</p>
						<p>But the Chanel phenomenon is slightly more difficult to explain. As a brand based in accessories also, one or two of the handbags are iconic (the 2.55 for instance) and therefore, easily recognizable, meaning they are constantly on demand. Several other Chanel goods aren’t in fact easily identifiable as Chanel unless you know where to look (a clasp here, a chain there) and then be ready to pay the high prize. As for the clothes, the House of Chanel is one of the oldest Haute Couture Houses and yet the actual clothes have never seized to be on great demand, making them a prosperous business almost equally as the accessories one.</p>
						<p>Chanel as a brand has managed to maintain a certain ‘’relationship’’ with her customers, producing items that will eventually ‘’sell out’ ’still it owes a great deal of this publicity to advertising campaigns and magazine editorials. Some of Chanel campaigns have been ranked as ‘’iconic’’, part of fashions visual history, being shot by the best fashion photographers as a norm. Let’s have a look at some of them and the way apparel is being projected as a part of oneself identity.</p>
					</div>
					<div class='col-lg-4 col-md-4 col-sm-4 hidden-xs centered'>
						<img src='http://placehold.it/300x600'
					</div>
				</div>
			</div>
		</div>";