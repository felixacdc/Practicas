<?php /* Smarty version 3.1.27, created on 2016-01-28 03:37:02
         compiled from "/opt/lampp/htdocs/GitHub/Practicas/Curso PHP & MySQL/ProyectoCurso/estilos/templates/acceso.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:143667279956a97ece639689_50976790%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dea75f6d600312830b531d8e0eed1c249c3c8ec6' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/Practicas/Curso PHP & MySQL/ProyectoCurso/estilos/templates/acceso.tpl',
      1 => 1453948608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143667279956a97ece639689_50976790',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56a97ece6e2ce6_86912533',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a97ece6e2ce6_86912533')) {
function content_56a97ece6e2ce6_86912533 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '143667279956a97ece639689_50976790';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Titulo</title>
    <?php echo '<script'; ?>
 type="text/javascript" src="estilos/templates/jquery.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {

          function hora(){
            $.ajax({
              type: 'GET',
              url: 'hora.php',
              success: function ($hora) {
                $('#hora').html($hora);
                setTimeout(hora(), 1000);
              }
            });
          }

          setTimeout(hora(), 1000);
        });
    <?php echo '</script'; ?>
>

  </head>
  <body>
    <h1>Bienvenido <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</h1>
    <p id="hora"></p>
  </body>
</html>
<?php }
}
?>