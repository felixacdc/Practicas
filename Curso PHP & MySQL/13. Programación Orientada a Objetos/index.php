<?php 

# class crea una clase
class Automovil {

	# atributos
	private $color;
	private $velocidad;
	private $motor;

	# creacion de metodos
	public function Arrancar($a , $b) {
		# this se usa para referenciar al objeto mismo, desde dentro
		$this -> velocidad = $a;
		$this -> motor = $b;
		echo 'Arranca a la velocidad de ' , $this -> velocidad , ' ya que su motor es de ' , $this -> motor;
	}

	public function DeterminarColor($color) {
		$this -> color = $color;
		echo ' Y tiene un color de ' , $this -> color;
	}

	public function Frenar() {
		echo ' Y ahora ha frenado';
	}
}

#instanciar una clase
$ferrari = new Automovil(); # <-- Crear una instancia

$ferrari -> Arrancar('200 Km/h' , '12 cilindros');
$ferrari -> DeterminarColor('Rojo');
$ferrari -> Frenar();

echo '<br/><br/>';


$porsche = new Automovil(); 

$porsche -> Arrancar('150 Km/h' , '8 cilindros');
$porsche -> DeterminarColor('Negro con fibra de carbono');

 ?>