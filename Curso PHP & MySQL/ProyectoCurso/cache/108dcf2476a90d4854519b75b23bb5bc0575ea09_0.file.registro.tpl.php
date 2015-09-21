<?php /* Smarty version 3.1.27, created on 2015-09-21 04:41:03
         compiled from "/opt/lampp/htdocs/Practicas/Curso PHP & MySQL/ProyectoCurso/estilos/templates/public/registro.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28936767755ff6e3f6e37b3_35456307%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '108dcf2476a90d4854519b75b23bb5bc0575ea09' => 
    array (
      0 => '/opt/lampp/htdocs/Practicas/Curso PHP & MySQL/ProyectoCurso/estilos/templates/public/registro.tpl',
      1 => 1442803258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28936767755ff6e3f6e37b3_35456307',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ff6e3f7934e2_98880150',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ff6e3f7934e2_98880150')) {
function content_55ff6e3f7934e2_98880150 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28936767755ff6e3f6e37b3_35456307';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ProyectoCurso</title>
</head>
<body>
	<h1>Registro</h1>
	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	<?php }?>
	<form action="index.php?modo=registro" method="POST">
		<label>User: </label><input type="text" name="user"><br><br>
		<label>Email: </label><input type="email" name="email"><br><br>
		<label>Password: </label><input type="password" name="pass"><br><br>
		<input type="hidden" name="Registro" value="1">
		<input type="submit" value="Registrarme"><br><br>
	</form>
</body>
</html><?php }
}
?>