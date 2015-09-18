<?php 

include 'includes/comunes.php';

# crear objeto smarty
$template = new Smarty(0);

$template->assign(array(
  'variable' => 'Hola todo bien',
  'variable2' => 'Hola soy variable 2'
  ));

$template->display('public/index.tpl');

 ?>