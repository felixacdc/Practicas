<?php 

# class crea una clase
class Automovil {

	# atributos
	private $color;
	private $velocidad;
	private $motor;
	public $prueba;

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

	public function MiMetodo($parametro) {
		$this -> prueba = $parametro;
		return $this -> prueba;
	}
}

echo '<h1>FERRARI</h1>';
#instanciar una clase
$ferrari = new Automovil(); # <-- Crear una instancia

$ferrari -> Arrancar('200 Km/h' , '12 cilindros');
$ferrari -> DeterminarColor('Rojo');
$ferrari -> Frenar();

echo '<br/>';
$ferrari -> prueba;
echo $ferrari -> MiMetodo('Hola soy Felix');

 ?>