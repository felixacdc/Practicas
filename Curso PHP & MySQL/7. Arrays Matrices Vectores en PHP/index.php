<?php

$p = "pertenece al array";
$numeros = array(1,5,'pablo',$p);
$sa = '<br/>';

echo($numeros[0]);
echo($sa);
echo($numeros[3]);

echo('<h1>ARRAY ASOCIATIVO</h1>');
echo($sa);

# el nombre de las posiciones de los vectores se llaman claves
$x = array(
	1 => 'numero uno',
	'pedro' => 'Pedro tiene hambre'
	);

echo($x['pedro']);

?>