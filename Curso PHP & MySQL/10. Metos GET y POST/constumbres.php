<?php 

####### BUENAS PRACTICAS O COSTUMBRES DE PROGRAMACION #######

# No utilizar comillas dobles sino comillas simples
$c = 'Yo soy C';
$a = 'Easaasoaspsaopasosp $c';

# No utilizar parentesis en echo
# Evitar la concatenacion
echo $a , $c , 'En mi cadena de texto';

# eliminar las variables de la memoria temporal de php
unset($a , $c);

?>