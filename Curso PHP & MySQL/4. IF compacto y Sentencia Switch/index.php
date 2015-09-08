<?php 

$x = 9;
$y = 12;

/*
if ($x === $y) {
	echo('Si, son exactamente iguales');
} else {
	echo "No, no son exactamente iguales";
}
*/

// IF COMPACTO
$x == $y ? $c = 'Si, son iguales' : $c = 'No, no son iguales';

#MOSTRAR IF COMPACTO
echo($c);
echo('<br/>');
echo('<br/>');

#SENTENCIA SWITCH
/*
	switch (ELEMENTO) {
	case 'value':
		LO QUE PASA CUANDO ESTE SEA EL ELEMENTO
		break;
	
	default:
		LO QUE PASA SI NO CONSIGIO NUNCA EL ELEMENTO
		break;
	}
*/

$nombre = 'Juan';

switch ($nombre) {
	case 'Juan':
		echo("El nombre encontrado fue " . $nombre);
		break;
	case 'Pablo':
		echo("El nombre encontrado fue " . $nombre);
		break;
	default:
		echo('Ninguno de los anteriores casos era');
		break;
}

?>