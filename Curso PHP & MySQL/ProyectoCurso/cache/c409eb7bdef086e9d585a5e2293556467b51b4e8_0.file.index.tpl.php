<?php /* Smarty version 3.1.27, created on 2016-01-25 21:35:24
         compiled from "/opt/lampp/htdocs/GitHub/Practicas/Curso PHP & MySQL/ProyectoCurso/estilos/templates/public/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:147546753456a6870c182c12_07782467%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c409eb7bdef086e9d585a5e2293556467b51b4e8' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/Practicas/Curso PHP & MySQL/ProyectoCurso/estilos/templates/public/index.tpl',
      1 => 1453754118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147546753456a6870c182c12_07782467',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56a6870c2373f6_34786784',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a6870c2373f6_34786784')) {
function content_56a6870c2373f6_34786784 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '147546753456a6870c182c12_07782467';
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
		<a href="index.php?modo=claveperdida">Recuperar Contraseña</a><br><br>
		<input type="submit" value="Iniciar Sesion"><br><br>
	</form>
</body>
</html>
<?php }
}
?>