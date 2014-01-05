<?php

function carousel_element($directory, $i, $alt='', $linked=false) {

echo "<div class='item";
	  		
	  			if ($i==1) {echo " active";}

	  		echo"'>";
	  		
	  			

	  				if ($linked) {echo "<a href='{$directory}.php?id={$i}'>";}
	  			
	  				get_image($directory, $i . '.jpg' , $alt);

	  			if ($linked) {echo"</a>";}

	  		echo "<div class='carousel-caption'>
	  				<h1> {$alt} </h1>
	  				
	  				<h2>Makeup: Pinolo</h2>
	  				<h2>Illumination: Budello</h2>
	  				<h2>Hair: Bottino</h2>
	  				<h2>Agent: Strozzino</h2>
	  				<h2>Tegame: Tua Madre, S.A.</h2>
	  			</div>
	  		</div>";
}

function get_image($route, $id, $alt=''){
	echo "<img class='img-responsive' src='im/{$route}/{$id}' alt='{$alt}' />";
}

function get_staticImage($route, $id, $alt=''){
	echo "<img src='static/im/{$route}/{$id}' alt='{$alt}' />";
}

?>