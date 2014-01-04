<?php

function carousel_element($directory, $i) {
	  		$photographers=['Tina Patni', 'Suresh', 'Photographer'];
	  		$artist = $photographers[($i-1)];
	  		$alt =  'KM15 Cover by' . $artist;

	  		echo "<div class='item";
	  		
	  			if ($i==1) {echo " active";}

	  		echo"'>";
	  		
	  		get_image($directory, $i . '.jpg' , $alt);
	  			
	  		echo "<div class='carousel-caption'><p>Foto: {$artist} </p></div></div>";
}

function get_image($route, $id, $alt=''){
	echo "<img class='img-responsive' src='im/{$route}/{$id}' alt='{$alt}' />";
}

function get_staticImage($route, $id, $alt=''){
	echo "<img src='static/im/{$route}/{$id}' alt='{$alt}' />";
}

?>