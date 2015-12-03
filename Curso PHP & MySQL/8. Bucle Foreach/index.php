<?php

$personas = array(
	'Pedro' => array(
		'sexo' => 'Masculino',
		'ojos' => 'Azul',
		'altura' => 1.80),
	'Maria' => array(
		'sexo' => 'Femenino',
		'ojos' => 'Negros',
		'altura' => 1.60),
	'Alex' => array(
		'sexo' => 'Masculino',
		'ojos' => 'Verdes',
		'altura' => 1.69),
	'Carlos' => array(
		'sexo' => 'Masculino',
		'ojos' => 'Negros',
		'altura' => 1.87),
	'Carla' => array(
		'sexo' => 'Femenino',
		'ojos' => 'Verdes',
		'altura' => 1.64),
	'Juan' => array(
		'sexo' => 'Masculino',
		'ojos' => 'Negros',
		'altura' => 1.76),
	);

foreach ($personas as $key => $value) {
	echo('<strong>Nombre: </strong>' . $key . ' :: ' .$value['sexo'] . ' su color de ojos es ' .$value['ojos'] . ' y su altura es ' .$value['altura']);
	echo('<br/>');
}

?>