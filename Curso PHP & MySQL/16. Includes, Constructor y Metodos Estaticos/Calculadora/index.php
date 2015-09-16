<?php 

include ('class.Imprimir.php');

$calculadora = new Imprimir(1 , 6);

$calculadora -> Sumar();

echo '<br/>';

echo '<h1>ESTATICO</h1>';

include ('class.Estatico.php');

/*$objeto = new Estatico('Esto es lo del estatico');

echo $objeto -> Impreso();*/

echo Estatico::ImpresoDos('Esto es lo que paso por el static function');

?>