<?php  
	$covers=['Tina Patni', 'Tina Patni', 'Suresh Natajaran'];
  	$photographers=['Aaron Sosa', 'Cade Martin', 'Fran Martinez', 'Jonas Jensen', 'Karim Hesham', 'Kristin Sinclair', 'Lisa Sciascia', 'Robin Westfield'];
?>

<html lang="en-US">
	<head>
	<title>International Agency for the Promotion of Culture | Klassik Magazine</title>
   <?php include('header.php') ?>

	  <div id='cover'>
	  	<div class='container'>
	  		<div class='row'>
	  			
		  			<div id='cover-slideshow' class='carousel slide' data-interval='4000' data-ride='carousel'>
		  			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				  			<div class='carousel-inner'>
							  		<?php
							  			carousel_element("cover", 0, $covers[0]);
							  			carousel_element("cover", 1, $covers[1]);
							  			carousel_element("cover", 2, $covers[2]);
							  		?>
							</div>
						<ol class='carousel-indicators'>
						 	<li data-target='#cover-slideshow' data-slide-to='0' class='active'></li>
						   	<li data-target='#cover-slideshow' data-slide-to='1'></li>
						 	<li data-target='#cover-slideshow' data-slide-to='2'></li>
						</ol>
					</div>
						</div>
			</div>
		</div>
	 </div>
	<div id="photographers">
		<div class="container">
			<div class="row padded centered">
				<h2 class="gamma centered headline">Photographers</h2>
				<div id="photographer-carousel" class="carousel slide" data-interval="3000" data-ride="carousel">
						<!-- Indicators -->
					<ol class="carousel-indicators">
					    <li data-target="#photographer-carousel" data-slide-to="0" class="active"></li>
					    <li data-target="#photographer-carousel" data-slide-to="1"></li>
					    <li data-target="#photographer-carousel" data-slide-to="2"></li>
					    <li data-target="#photographer-carousel" data-slide-to="3"></li>
					    <li data-target="#photographer-carousel" data-slide-to="4"></li>
					    <li data-target="#photographer-carousel" data-slide-to="5"></li>
					    <li data-target="#photographer-carousel" data-slide-to="6"></li>
					    <li data-target="#photographer-carousel" data-slide-to="7"></li>
					</ol>

					  <!-- Wrapper for slides -->
					<div class="carousel-inner">
					    <?php
					    	for ($i=0; $i<8; $i++){
					    	
	  						carousel_element("photographer", $i , $photographers[$i], true);

	  						}
	  					?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="recommend">
		<div class="container">
			<div class="row padded">
				<h2 class="gamma centered headline">We recommend</h2>
				<div class="col-lg-8 col-md-8 col-sm-8">
					<ul>
						<li><a href="http://www.abudhabiyachtshow.com" title="Abu Dhabi Yacht Show" target="_blank"><?php get_staticImage('recommend', 'abu_dhabi_yacht_show', 'gif', 'Abu Dhabi Yacht Show') ?></a></li>
					    <li><a href="http://www.bhpc.com" title="Beverly Hills Polo Club" target="_blank"><img src="static/im/recommend/beberly_hills_polo_club.gif" alt="Beverly Hills Polo Club" /></a></li>
					    <li><a href="http://www.marinabaysands.com" title="Marina Bay Sands" target="_blank"><img src="http://klassikmagazine.com/wordpress/images/marinabay.jpg" alt="Marina Bay Sands" /></a></li>
					    <li><a href="http://www.harrods.com" title="Harrods" target="_blank"><img src="static/im/recommend/harrods.gif" alt="Harrods" /></a></li>
					    <li><a href="http://www.pologstaad.ch" title="Polo Club Gstaad" target="_blank"><img src="static/im/recommend/polo_club_gstaad.gif" alt="Polo Club Gstaad" /></a></li>
					    <li><a href="http://www.ascot.co.uk" title="Royal Ascot" target="_blank"><img src="static/im/recommend/royal_ascot.gif" alt="Royal Ascot" /></a></li>
					        <li><a href="http://gstaadautomobileclub.ch/" title="Gstaad Automobile Club" target="_blank"><img src="static/im/recommend/gstaad_automobile_club.gif" alt="Gstaad Automobile Club" /></a></li>
					   <li><a href="http://www.boot.de" title="Boot Dusseldorf" target="_blank"><img src="static/im/recommend/boot_dusseldorf.gif" alt="Boot Dusseldorf" /></a></li>
					   <li><a href="http://www.arabiantravelmarket.com" title="Arabian Travel Market" target="_blank"><img src="static/im/recommend/arabian_travel_market.gif" alt="Arabian Travel Market" /></a></li>
					   <li><a href="http://www.gouv.mc" title="Moncao" target="_blank"><img src="static/im/recommend/monaco.gif" alt="" /></a></li>
					   <li><a href="http://www.worldpolotour.com/tournaments/costasmeralda.htm" title="Cost Smeralda Polo" target="_blank"><img src="static/im/recommend/costa_smeralda_polo.gif" alt="Cost Smeralda Polo" /></a></li>
					    <li><a href="http://www.klassikpremium.com" title="Klassik Premium" target="_blank"><img src="http://klassikmagazine.com/wordpress/images/kp_icon.jpg" alt="Klassik Premium" /></a></li>
					    <li><a href="http://www.polo-st-tropez.com" title="Polo Club Saint Tropez" target="_blank"><img src="static/im/recommend/polo_club_saint_tropez.gif" alt="Polo Club Saint Tropez" /></a></li>
					    <li><a href="http://www.americanexpress.com" title="American Express" target="_blank"><img src="static/im/recommend/american_express.gif" alt="American Express" /></a></li>
					    <li><a href="http://www.cavotagoo.gr" title="http://www.cavotagoo.gr" target="_blank"><img width="150"src="http://klassikmagazine.com/wordpress/images/cavotagoo.jpg" alt="http://www.cavotagoo.gr" /></a></li>
					    <li><a href="http://www.dubaitourism.ae" title="Dubai Tourism" target="_blank"><img src="http://klassikmagazine.com/wordpress/images/dubai.jpg" alt="Dubai Tourism" /></a></li>
					    <li><a href="http://www.burjkhalifa.ae/" title="Burj Khalifa" target="_blank"><img width="300" src="http://klassikmagazine.com/wordpress/images/burj.jpg" alt="Burj Khalifa" /></a></li>
					    <li><a href="http://www.artbasel.com" title="Art Basel Miami Beach" target="_blank"><img src="static/im/recommend/art_basel_miami_beach.gif" alt="Art Basel Miami Beach" /></a></li>
					    <li><a href="http://www.boatshowdubai.com" title="Dubai International Boat Show" target="_blank"><img src="static/im/recommend/dubai_international_boat_show.gif" alt="Dubai International Boat Show" /></a></li>
					    <li><a href="http://www.mosboatshow.ru" title="Moscow Boat Show" target="_blank"><img src="static/im/recommend/moscow_boat_show.gif" alt="Moscow Boat Show" /></a></li>
					    <li><a href="http://www.polostmoritz.com" title="Polo St Moritz" target="_blank"><img src="static/im/recommend/polo_st_moritz.gif" alt="Polo St Moritz" /></a></li>
					    <li><a href="http://www.baselworld.com" title="Baseworld" target="_blank"><img src="static/im/recommend/baselworld.gif" alt="Baseworld" /></a></li>
					    <li><a href="http://www.salonnautiquecannes.com" title="Cannes Boat Show" target="_blank"><img src="static/im/recommend/cannes_boat_show.gif" alt="Cannes Boat Show" /></a></li>
					    <li><a href="http://www.dubaiworldcup.com" title="Dubai World Cup" target="_blank"><img src="static/im/recommend/dubai_world_cup.gif" alt="Dubai World Cup" /></a></li>
					    <li><a href="http://www.masdar.ae" title="Masdar" target="_blank"><img src="http://klassikmagazine.com/wordpress/images/masdar.jpg" alt="Masdar" /></a></li>
					    <li><a href="http://www.presidentscup.ae/" title="President of the UAE Cups Series" target="_blank"><img src="static/im/recommend/presiden_of_the_uae_cups_series.gif" alt="President of the UAE Cups Series" /></a></li>
					    <li><a href="http://www.concourslondon.com" title="Concours London" target="_blank"><img src="http://klassikmagazine.com/wordpress/images/concours.jpg" alt="Concours" /></a></li>
					    <li><a href="http://www.batilux.com" title="Batilux Monaco" target="_blank"><img src="static/im/recommend/batilux_monaco.gif" alt="Batilux Monaco" /></a></li>
					    <li><a href="http://www.chinaboatshow.org/" title="China guangzhou International Boat Show" target="_blank"><img src="static/im/recommend/china_guangzhou_international_boat_show.gif" alt="China guangzhou International Boat Show" /></a></li>
					    <li><a href="http://www.festival-cannes.org" title="Festival Cannes" target="_blank"><img src="static/im/recommend/festival_cannes.gif" alt="Festival Cannes" /></a></li>
					    <li><a href="http://www.astartesuites.gr" title="www.astartesuites.gr" target="_blank"><img src="http://klassikmagazine.com/wordpress/images/astarte.jpg" alt="www.astartesuites.gr" /></a></li>
					    <li><a href="http://www.ralphlauren.com/shop/index.jsp?categoryId=1870143" title="Ralph Lauren Pink Pony Auction" target="_blank"><img src="static/im/recommend/ralph_lauren_pink_pony_auction.gif" alt="Ralph Lauren Pink Pony Auction" /></a></li>
					    <li><a href="http://www.trump.com/" title="Trump" target="_blank"><img src="static/im/recommend/trump.gif" alt="Trump" /></a></li>
					    <li><a href="http://www.pologstaad.ch" title="Hublot Polo Gold Gstaad" target="_blank"><img src="static/im/recommend/hublot_polo_gold_gstaad.gif" alt="Hublot Polo Gold Gstaad" /></a></li>
					    <li><a href="http://www.concorsodeleganzavilladeste.com/en/" title="Concorso d'eleganza Villa D'Este" target="_blank"><img src="static/im/recommend/concorso_d_eleganza_villa_d_este.gif" alt="Concorso d'eleganza Villa D'Este" /></a></li>
					    <li><a href="http://www.zayednationalmuseum.ae" title="Zayed National Museum" target="_blank"><img src="http://klassikmagazine.com/wordpress/images/zayed.jpg" alt="Zayed National Museum" /></a></li>
					    <li><a href="http://www.sarojin.com" title="Sarojin" target="_blank"><img src="http://klassikmagazine.com/wordpress/images/sarojin.jpg" alt="http://www.sarojin.com" /></a></li>
					    <li><a href="http://www.thepalmbeachclub.com/" title="The Palm Beach Club" target="_blank"><img src="static/im/recommend/the_palm_beach_club.gif" alt="The Palm Beach Club" /></a></li>
					    <li><a href="http://www.tsum.ru" title="TSUM" target="_blank"><img src="static/im/recommend/tsum.gif" alt="TSUM" /></a></li>
					    <li><a href="http://www.visitabudhabi.ae/en/" title="Abu Dabhi" target="_blank"><img src="static/im/recommend/abu_dabhi.gif" alt="Abu Dabhi" /></a></li>
					    <li><a href="http://www.clinicaclaros.com/" title="Clinica Claros" target="_blank"><img src="static/im/recommend/claros.gif" alt="Clinica Claros" /></a></li>
					    <li><a href="http://www.clinicatoscana.com" title="Clinica Toscana" target="_blank"><img src="static/im/recommend/toscana.gif" alt="Clinica Toscana" /></a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<iframe width="300" scrolling="no" height="193" frameborder="0" style="border:0;outline:0" src="http://cdn.livestream.com/embed/hdfashiontv?layout=4&color=0…88888&iconColor=0x777777&allowchat=true&height=193&width=300"></iframe>
				</div>
			</div>
		</div>
	</div>
	<div id="ads" class="centered">
		<div class="container">
			<div class="row padded">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<img src="http://placehold.it/468x60" />
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<img src="http://placehold.it/468x60" />
				</div>
			</div>
		</div>
	</div>
	<div id="articles">
		<div class="container">
				<h2 class="gamma centered headline">Articles</h2>
				<div class="row padded">
					<div class="col-lg-9 col-md-9 col-sm-9">
						<div class="row">
							<?php 

							for ($i=1; $i<10; $i++){
								article_listing($i);
							}

							?>
						</div>
					</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="newsletter">
						<h5 class="headline">Subscribe to Klassik Magazine</h5>
							<p>Be the first to know when the next issue will be out.</p>
							<form>
								<input placeholder="Your Email">
								<button>Submit</button>
							</form>
					</div>
					<div class="ad centered padded hidden-xs">
						<img src="http://placehold.it/160x600">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="videos">
		<div class="container">
			<div class="row padded">
				<h2 class="gamma centered headline">Videos</h2>
				<div class="col-lg-8 col-md-8">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<a href="//bigthink.com/videos/whats-the-problem-with-the-individual-mandate" target="_blank">
							<article>
								<h6 class="headline">Big Think</h6>
								<img class="img-responsive" src="http://placehold.it/360x240" />
								<h5>Van Jones</h5>
								<h3 class="delta">What's the Problem with the Individual Mandate?</h3>
							</article>
							</a>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<a href="//bigthink.com/videos/the-secret-lives-of-the-brain-david-eagleman-live-on-big-think-2" target="_blank">
							<article>
								<h6 class="headline">Big Think</h6>
								<img class="img-responsive" src="http://placehold.it/360x240" />
								<h5>David Eagleman</h5>
								<h3 class="delta">The Secret Lives of the Brain</h3>
							</article>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<a href="//bigthink.com/ideas/assessing-your-strengths-and-weaknesses" target="_blank">
							<article>
								<h6 class="headline">Big Think</h6>
								<img class="img-responsive" src="http://placehold.it/360x240" />
								<h5>Robert Steven Kaplan</h5>
								<h3 class="delta">Assessing Your Strengths and Weaknesses</h3>
							</article>
							</a>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<article>
							<a href="http://bigthink.com/ideas/we-need-thinking" target="_blank">
								<h6 class="headline">Big Think</h6>
								<img class="img-responsive" src="http://placehold.it/360x240" />
								<h5>Slavoj Zizek</h5>
								<h3 class="delta">We Need Thinking</h3>
							</article>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<a href="http://bigthink.com/ideas/the-power-of-the-critic" target="_blank">
							<article>
								<h6 class="headline">Big Think</h6>
								<img class="img-responsive" src="http://placehold.it/360x240" />
								<h5>Ben Brantley</h5>
								<h3 class="delta">The Power of the Critic</h3>
							</article>
							</a>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<a href="http://bigthink.com/ideas/where-does-creativity-come-from" target="_blank">
							<article>
								<h6 class="headline">Big Think</h6>
								<img class="img-responsive" src="http://placehold.it/360x240" />
								<h5>Eric Kandel</h5>
								<h3 class="delta">Where Does Creativity Come From?</h3>
							</article>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
					<img src="http://placehold.it/300x600" />
				</div>
			</div>
		</div>
	</div>
	<div id="press">
		<div class="container">
			<div class="row padded">
				<div class="col-lg-8 col-md-8 col-sm-8 zeta">
					<h2 class="gamma centered headline">Press</h2>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<ul>
								<li><a href="http://www.cbsnews.com/sections/60minutes/main3415.shtml" target="_blank">60 Minutes</a></li>
								<li><a href="http://www.aljazeera.com/" target="_blank">Al Jazeera </a></li>
								<li><a href="http://http://www.aldaily.com/" target="_blank">Arts &amp; Letters Daily</a></li>
								<li><a href="http://http://bigthink.com/" target="_blank">Big Think </a></li>
								<li><a href="http://www.csmonitor.com/" target="_blank">Christian Science Monitor</a></li>
								<li><a href="http://edition.cnn.com/" target="_blank">CNN</a></li>
								<li><a href="http://www.commentarymagazine.com/" target="_blank">Commentary</a></li>
								<li><a href="http://www.current.com/" target="_blank">Current</a></li>
								<li><a href="http://www.daylife.com/" target="_blank">Daylife</a></li>
								<li><a href="http://elpais.com/" target="_blank">El Pais</a></li>
								<li><a href="http://www.europarl.es/view/es/index.html" target="_blank">European Parliament</a></li>
								<li><a href="http://fora.tv/" target="_blank">Fora TV</a></li>
								<li><a href="http://www.foreignaffairs.com/" target="_blank">Foreign Affairs</a></li>
								<li><a href="http://www.globalpost.com/" target="_blank">Global Post</a></li>
								<li><a href="http://gulfnews.com/" target="_blank">Gulf News</a></li>
								<li><a href="http://www.lefigaro.fr/" target="_blank">Le Figaro</a></li>
								<li><a href="http://www.lesechos.fr/" target="_blank">Les Echos</a></li>
								<li><a href="http://www.lemonde.fr/" target="_blank">Le Monde</a></li>
								<li><a href="http://www.latimes.com/" target="_blank">Los Angeles Times</a></li>
								<li><a href="http://www.livemint.com/Home.aspx" target="_blank">Mint</a></li>
								<li><a href="http://www.monocle.com/" target="_blank">Monocle </a></li>
								<li><a href="http://www.msnbc.msn.com/" target="_blank">MSNBC</a></li>
								<li><a href="http://www.npr.org/" target="_blank">National Public Radio </a></li>
								<li><a href="http://www.nationalreview.com/" target="_blank">National Review Online</a></li>
								<li><a href="http://www.pbs.org/wgbh/pages/frontline/" target="_blank">PBS Frontline</a></li>
								<li><a href="http://www.portfolio.com/" target="_blank">Portfolio</a></li>
								<li><a href="http://www.realclearpolitics.com/" target="_blank">Real Clear Politics</a></li>
								<li><a href="http://www.rollingstone.com/" target="_blank">Rolling Stone</a></li>
								<li><a href="http://www.salon.com/" target="_blank">Salon</a></li>
								<li><a href="http://www.texasmonthly.com/" target="_blank">Texas Monthly</a></li>
								<li><a href="http://www.theatlantic.com/" target="_blank">The Atlantic</a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<ul>
								<li><a href="http://www.theaustralian.com.au/" target="_blank">The Australian</a></li>
								<li><a href="http://www.guardian.co.uk/" target="_blank">The Guardian</a></li>
								<li><a href="http://www.economist.com/" target="_blank">The Economist</a></li>
								<li><a href="http://forward.com/" target="_blank">The Forward</a></li>
								<li><a href="http://www.chron.com/" target="_blank">The Houston Chronicle</a></li>
								<li><a href="http://www.thenation.com/" target="_blank">The Nation</a></li>
								<li><a href="http://www.tnr.com/" target="_blank">The New Republic</a></li>
								<li><a href="http://www.nytimes.com/" target="_blank">The New York Times</a></li>
								<li><a href="http://www.newyorker.com/" target="_blank">The New Yorker</a></li>
								<li><a href="http://www.thesundaytimes.co.uk/sto/?CMP=INTstp2" target="_blank">The Sunday Times</a></li>
								<li><a href="http://www.washingtontimes.com/" target="_blank">The Washington Times</a></li>
								<li><a href="http://europe.wsj.com/home-page" target="_blank">The Wall Street Journal</a></li>
								<li><a href="http://timesofindia.indiatimes.com/" target="_blank">Times of India</a></li>
								<li><a href="http://www.7days.me/" target="_blank">7Days</a></li>
								<li><a href="http://www.albayan.ae/" target="_blank">Al Bayan</a></li>
								<li><a href="http://www.alittihad.ae/" target="_blank">Al Ittihad </a></li>
								<li><a href="http://www.emirates247.com/" target="_blank">Emirates 24/7</a></li>
								<li><a href="http://www.emaratalyoum.com/" target="_blank">Emarat Al Youm</a></li>
								<li><a href="http://www.wam.ae/" target="_blank">WAM</a></li>
								<li><a href="http://gulfnews.com/" target="_blank">Gulf News</a></li>
								<li><a href="http://www.godubai.com/" target="_blank">Go Dubai</a></li>
								<li><a href="http://www.khaleejtimes.com/" target="_blank">Khaleej Times</a></li>
								<li><a href="http://www.thenational.ae/" target="_blank">The National</a></li>
								<li><a href="http://gulfnews.com/about-gulf-news/al-nisr-portfolio/xpress" target="_blank">XPRESS</a></li>
							</ul>
						</div>
					</div>
				<div class="col-lg-4 col-md-4 col-sm-4" id="issues">
					<h2 class="gamma centered headline">All Issues</h2>
				</div>
			</div>
		</div>
	</div>
	<?php require_once('footer.php') ?>
</html>