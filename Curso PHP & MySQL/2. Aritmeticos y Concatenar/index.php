<?php
	
	// suma +
	// resta -
	// multiplicacion *
	// divicion /
	// resto %
	
	$sa = '<br/>';
	
	$x = 2;
	$y = 3;

	$z = $x + $y;

	echo($z);
	echo($sa);

	$z = $x - $y;

	echo($z);
	echo($sa);

	$z = $x * $y;

	echo($z);
	echo($sa);

	$z = $x / $y;

	echo($z);
	echo($sa);

	$z = $x % $y;

	echo('Esto es el resto: ' . $z);
	echo($sa);

	// concatenar

	$hola = 'Hola yo soy ';
	$pri = 'Prinick';
	echo($hola . $pri);

?>