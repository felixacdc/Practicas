<?php 

class Calcular {

	protected $num;
	protected $num2;
	protected $resultado;

	public function __construct($a , $b) {
		$this -> num = $a;
		$this -> num2 = $b;	
	}

	public function Sumar() {
		$this -> resultado = $this -> num + $this -> num2;
		return $this -> resultado ;
	}
}

 ?>