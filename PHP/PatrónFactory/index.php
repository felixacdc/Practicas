<?php

require_once ('User.php');
require_once ('Coffee.php');
require_once ('AuthenticationService.php');
require_once ('CoffeeMaker.php');
require_once ('BarTender.php');

/**
  * Creacion de interfaz:
  * Para usarla en una interfaz en una clase se agrega (implements <NombreInterfaz>)
  */ 
interface BeverageMaker {

	public function make();

}

class Controller
{
	private $auth;

	public function __construct(AuthenticationService $auth)
	{
		$this->auth = $auth;
	}
	
	public function action(BeverageMaker $beverageMaker)
	{
		$user = $this->auth->user();
		$beverage = $beverageMaker->make();

		$message = $user->drink($beverage);

		// Vista
		require ('View.php'); 
	}
}

$auth = new AuthenticationService(array('name' => 'Felix'));

$controlador = new Controller($auth);

$controlador->action(new BarTender());