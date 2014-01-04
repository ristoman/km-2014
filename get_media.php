<?php

function carousel_element($directory, $i) {
	  		$photographers=['Tina Patni', 'Suresh', 'Photographer'];
	  		$artist = $photographers[($i-1)];

	  		echo "<div class='item";
	  			if ($i==1) {echo " active";}
	  		echo"'>
	  			<img class='img-responsive' src='im/{$directory}/{$i}.jpg' alt='KM15 Cover by {$artist}'>
	  				<div class='carousel-caption'><p>Foto: {$artist} </p>
	  			</div>
	  		</div>";

}

?>