<?php /* Smarty version 3.1.27, created on 2016-01-25 19:06:45
         compiled from "/opt/lampp/htdocs/GitHub/Practicas/Curso PHP & MySQL/ProyectoCurso/estilos/templates/public/registro.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:53160503456a66435c7e875_71768506%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bbf6d878e5dfd9a8ce8da2cd6a873729125f075' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/Practicas/Curso PHP & MySQL/ProyectoCurso/estilos/templates/public/registro.tpl',
      1 => 1449120542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53160503456a66435c7e875_71768506',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56a66435dcb7d7_63505093',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a66435dcb7d7_63505093')) {
function content_56a66435dcb7d7_63505093 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '53160503456a66435c7e875_71768506';
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