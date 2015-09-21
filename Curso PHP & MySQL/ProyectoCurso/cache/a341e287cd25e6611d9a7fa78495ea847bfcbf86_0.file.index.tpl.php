<?php /* Smarty version 3.1.27, created on 2015-09-21 04:34:35
         compiled from "/opt/lampp/htdocs/Practicas/Curso PHP & MySQL/ProyectoCurso/estilos/templates/public/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7906564355ff6cbb23c643_83956514%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a341e287cd25e6611d9a7fa78495ea847bfcbf86' => 
    array (
      0 => '/opt/lampp/htdocs/Practicas/Curso PHP & MySQL/ProyectoCurso/estilos/templates/public/index.tpl',
      1 => 1442802870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7906564355ff6cbb23c643_83956514',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ff6cbb3ea389_91017764',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ff6cbb3ea389_91017764')) {
function content_55ff6cbb3ea389_91017764 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7906564355ff6cbb23c643_83956514';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ProyectoCurso</title>
</head>
<body>
	<h1>Index</h1>
	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	<?php }?>
	<form action="index.php?modo=login" method="POST">
		<label>User: </label><input type="text" name="user"><br><br>
		<label>Password: </label><input type="password" name="pass"><br><br>
		<input type="hidden" name="login" value="1">
		<a href="index.php?modo=registro">Registrarme</a><br><br>
		<input type="submit" value="Iniciar Sesion"><br><br>
	</form>
</body>
</html><?php }
}
?>