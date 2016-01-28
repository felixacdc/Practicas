<?php

$view = new Smarty(0);

if ( isset($_POST['ej']) ) {
    $view->assign(array('form' => 'You sent the form'));
} else {
    $view->assign(array('form' => 'You did not send the form'));
}

$view->display('home.tpl');