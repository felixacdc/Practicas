<?php /* Smarty version 3.1.27, created on 2015-09-18 07:00:02
         compiled from "C:\xampp\htdocs\Practicas\Curso PHP & MySQL\ProyectoCurso\estilos\templates\public\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1562255fb9a5208cb83_21366047%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a79531162cf6e6dbc40bd10f4eff8163bb2aaebc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practicas\\Curso PHP & MySQL\\ProyectoCurso\\estilos\\templates\\public\\index.tpl',
      1 => 1442551805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1562255fb9a5208cb83_21366047',
  'variables' => 
  array (
    'variable' => 0,
    'variable2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55fb9a520c5111_06585860',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55fb9a520c5111_06585860')) {
function content_55fb9a520c5111_06585860 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1562255fb9a5208cb83_21366047';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ProyectoCurso</title>
</head>
<body>
	<h1>Esto es Index.tpl</h1>
	<?php $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? 19+1 - (0) : 0-(19)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 0, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?>
	<?php echo $_smarty_tpl->tpl_vars['variable']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['variable2']->value;?>
 <br>
	<?php }} ?>
</body>
</html><?php }
}
?>