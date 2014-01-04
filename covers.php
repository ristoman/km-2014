<?php

$photographers=['Tina Patni', 'Suresh', 'Photographer'];
	  	for ($i=1; $i<4; $i++) {

	  		$artist = $photographers[($i-1)];

	  		echo "<div class='item";
	  			if ($i==1) {echo " active'";}
	  		echo"'>";
	  		echo "<img class='img-responsive' src='cover{$i}.jpg' alt='KM15 Cover by {$artist}'>";
	  		echo "<div class='carousel-caption'><p>Foto: {$artist} </p></div></div>";

	  	}
		echo "</div>";
?>