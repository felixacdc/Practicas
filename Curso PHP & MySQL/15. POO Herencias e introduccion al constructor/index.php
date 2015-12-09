<?php 

# class crea una clase
class Automovil {

	# atributos
	# protected permite que los atributos sean heredados
	protected $color;
	protected $velocidad;
	protected $motor;
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

class Moto extends Automovil{

	private $ruedas;

	/*public function Ruedas($parametro) {
		$this -> ruedas = $parametro;
		return $this -> ruedas;
	}*/

	// creacion de constructor
	public function __construct($ruedas_cantidad ,$velocidad , $motor , $color) {
		$this -> ruedas = $ruedas_cantidad;
		$this -> velocidad = $velocidad;
		$this -> motor = $motor;
		$this -> color = $color;
	}

	public function Color() {
		return $this -> color;
	}

	public function Arrancar_2() {
		echo 'Esta es la nueva velocidad: ' , $this -> velocidad , ' Este es el nuevo motor ' , $this -> motor , ' esta es la cantidad de ruedas ' , $this -> ruedas;
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

echo '<h1>Moto</h1>';
$moto = new Moto(2 , '200 Km/h' , '12 cilindros' , 'Azul');
echo $moto -> Color();
echo '<br/>';
$moto -> Arrancar_2();
echo '<br/>';
$moto -> Frenar();
/*echo 'La moto tiene ' , $moto -> Ruedas(2) , ' ruedas <br/>';
echo $moto -> Arrancar('200 Km/h' , '12 cilindros');
echo $moto -> DeterminarColor('Rojo');*/

 ?>