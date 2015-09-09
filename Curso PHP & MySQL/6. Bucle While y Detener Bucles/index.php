<?php

$s = 0;
$limit = 30;
$sa = '<br/>';

while ($s <= $limit) {
	echo($s);
	echo($sa);
	$s++;

	if ($s == 5) {
		echo($s);
		echo($sa);
		break; //detiene toda ejecucion del bucle
	}
}


?>