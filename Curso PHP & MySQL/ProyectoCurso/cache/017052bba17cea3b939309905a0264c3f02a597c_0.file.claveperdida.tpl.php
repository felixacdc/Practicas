<?php /* Smarty version 3.1.27, created on 2016-01-25 20:44:24
         compiled from "/opt/lampp/htdocs/GitHub/Practicas/Curso PHP & MySQL/ProyectoCurso/estilos/templates/public/claveperdida.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:89621772156a67b18c4ed82_71713806%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '017052bba17cea3b939309905a0264c3f02a597c' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/Practicas/Curso PHP & MySQL/ProyectoCurso/estilos/templates/public/claveperdida.tpl',
      1 => 1453751037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89621772156a67b18c4ed82_71713806',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56a67b18cf22c1_13826249',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a67b18cf22c1_13826249')) {
function content_56a67b18cf22c1_13826249 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '89621772156a67b18c4ed82_71713806';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ProyectoCurso</title>
</head>
<body>
	<h1>Recuperar Contraseña</h1>
	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	<?php }?>
	<form action="index.php?modo=claveperdida" method="POST">
		<label>Email: </label><input type="email" name="email"><br><br>
		<input type="submit" value="Recuperar Contraseña"><br><br>
	</form>
</body>
</html>
<?php }
}
?>