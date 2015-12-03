<?php 

include '../includes/comunes.php';

# crear objeto smarty
$template = new Smarty(1);


$template->display('public/admin.tpl');

 ?>