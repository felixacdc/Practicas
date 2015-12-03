<?php 

class Estatico {

	private $propiedad;

	public function __construct($parametro) {
		$this -> propiedad = $parametro;
	}

	public function Impreso() {
		return $this -> propiedad;
	}

	// con un metodo static podemos axeder a el sin necesidad de que crear o instancear la clase
	public static function ImpresoDos($algo) {
		return $algo;
	}
}

 ?>