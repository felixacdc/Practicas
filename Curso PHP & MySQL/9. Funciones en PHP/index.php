<?php 

function Mensaje()
{
	$c="Esto es un mensaje de una funcion";

	return $c;
}

echo(Mensaje());
echo('<br/>');

function Sumar($a = 3 , $b = 6){
	return $a + $b;
}

echo Sumar(5,9) . '<br/><br/><br/>';

function Condicion($x = 1){
	if ($x > 0) {
		$c = 'Es mayor que 0';
	} else {
		$c = 'No es mayor que 0';
	}
	
	return $c;
}

echo Condicion(-6);
?>