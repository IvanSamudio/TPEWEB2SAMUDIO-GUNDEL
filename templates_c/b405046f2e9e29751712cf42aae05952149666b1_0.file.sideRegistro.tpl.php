<?php
/* Smarty version 3.1.33, created on 2018-10-26 20:54:47
  from 'C:\xampp\htdocs\Proyecto\TPEWEB2SAMUDIO-ORSINI\templates\sideRegistro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd362f72431b3_29588154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b405046f2e9e29751712cf42aae05952149666b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\TPEWEB2SAMUDIO-ORSINI\\templates\\sideRegistro.tpl',
      1 => 1539958995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd362f72431b3_29588154 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mainRegistro">
  <form class="" action="verificarLogin" method="post" class="formulario">
    <h3>NOMBRE DE USUARIO
    <input type="text " name="usuario" value="" class="nombre">
    </h3>
    <h3>CONTRASEÑA:
    <input type="password" name="password" maxlength="8" class="contraseña" >
    </h3>
    <br>
    <BR>
    <div class="">
      <h2><?php echo $_smarty_tpl->tpl_vars['Message']->value;?>
</h2>
    </div>
    <input type="submit" value="LOGIN" name="enviar" class="registrado">
    <input type="reset" value="Restablecer" name="B2">
    </h3>
  </form>
</div>
</div>
<?php }
}
