<?php 

include ('class.Primera.php');


class Segunda extends Primera{

	public function Imprimir() {
		echo $this -> algo;
		echo '<br/>';
		echo $this -> algodos;
	}
}

 ?>