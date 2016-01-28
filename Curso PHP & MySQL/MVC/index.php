<?php

require_once ('models/class.Conexion.php');
require_once ('controllers/libs/Smarty.class.php');

$accion = isset($_GET['accion']) ? $_GET['accion'] : 'home';

if (is_file('controllers/' . $accion . '.Controller.php')) {
    include_once('controllers/' . $accion . '.Controller.php');
} else {
    include_once('controllers/error.Controller.php'); 
}