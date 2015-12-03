<?php
	
	for ($i=0; $i < 10; $i++) { 
		$datos[] = array("ronda" => $i, "jugadores" => array(
				array("nombre" => "Suarez", "puntos" => rand(0,100)),
				array("nombre" => "Messi", "puntos" => rand(0,100)),
				array("nombre" => "Neymar", "puntos" => rand(0,100))
			));
	}

	header("Content-type: application/json");
	echo json_encode($datos);
?>