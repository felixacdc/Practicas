<?php 

include ('class.Calcular.php');

class Imprimir extends Calcular{

	public function Sumar() {
		// Llama a una funcion del padre o de la clase que se hereda
		parent::Sumar();

		echo 'El resultado es igual a: ' , $this -> resultado;
	}
}

 ?>