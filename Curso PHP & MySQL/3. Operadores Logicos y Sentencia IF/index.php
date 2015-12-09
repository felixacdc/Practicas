<?php

// mayor que >
// menor que <
// igual ==
// diferente que !=
// mayor o igual >=
// menor o igual que <=
// exactamente igual que ===

/*if ( CONDICION ){
	SI ESA CONDICION ES VERDADERA
}else{
	SI ESA CONDICION ES FALSA
}*/

$x = 10;
$y = 5;

// book: es cuando aparentementa algo esta bien pero no nos despliega el resultado que queremos un ejemplo de ello es este if porque hay un colicion entre las dos condiciones 
if ($x != $y){
	echo('Si, x es distinto que y');
}else if ($x > $y){
	echo('x es mayor que y');
}else{
	echo('no se cumple ninguna de las anteriores');
}

echo('<br/>');

$x = 6;
$y = '6';

if ($x === $y) {
	echo('Si, son exactamente iguales');
} else {
	echo "No, no son exactamente iguales";
}


?>