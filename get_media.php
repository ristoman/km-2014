<?php

function carousel_element($directory, $i, $alt='', $linked=false) {

echo "<div class='item";
	  		
	  			if ($i==0) {echo " active";}

	  		echo"'>";
	  			

	  				if ($linked) {echo "<a href='{$directory}.php?id={$i}'>";}
	  			$i++;
	  				get_image($directory, $i . '.jpg' , $alt);

	  			if ($linked) {echo"</a>";}

	  		echo "<div class='carousel-caption'>
	  				<h2>{$alt}</h2>
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