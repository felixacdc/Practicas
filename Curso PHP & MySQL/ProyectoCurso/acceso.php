<?php

session_start();

if (isset($_SESSION['user'])) {
	echo 'Has iniciado sesion: ', $_SESSION['user'];
} 

 ?>
