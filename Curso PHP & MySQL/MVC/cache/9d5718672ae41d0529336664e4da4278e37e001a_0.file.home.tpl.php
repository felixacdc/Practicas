<?php /* Smarty version 3.1.27, created on 2016-01-28 20:55:50
         compiled from "/opt/lampp/htdocs/GitHub/Practicas/Curso PHP & MySQL/MVC/views/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:167318517756aa7246c68ec7_46653743%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d5718672ae41d0529336664e4da4278e37e001a' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/Practicas/Curso PHP & MySQL/MVC/views/home.tpl',
      1 => 1454010949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167318517756aa7246c68ec7_46653743',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56aa7246d0cb36_86565188',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aa7246d0cb36_86565188')) {
function content_56aa7246d0cb36_86565188 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '167318517756aa7246c68ec7_46653743';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Hello Home</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['form']->value;?>
</p>
    <form action="?acction=home" method="post">
        <input type="text" name="ej" placeholder="Click Me">
        <input type="submit" value="Aceptar">
    </form>
</body>
</html><?php }
}
?>