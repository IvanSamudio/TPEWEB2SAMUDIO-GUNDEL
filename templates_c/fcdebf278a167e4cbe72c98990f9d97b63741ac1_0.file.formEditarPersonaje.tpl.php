<?php
/* Smarty version 3.1.33, created on 2018-10-26 21:01:27
  from 'C:\xampp\htdocs\Proyecto\TPEWEB2SAMUDIO-ORSINI\templates\formEditarPersonaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd36487b0b845_49321394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcdebf278a167e4cbe72c98990f9d97b63741ac1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\TPEWEB2SAMUDIO-ORSINI\\templates\\formEditarPersonaje.tpl',
      1 => 1540575814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bd36487b0b845_49321394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
  <div class="container">
    <section class="main">
      <form class="formulario" action="EditadoPersonaje" method="post">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Personajes']->value, 'per');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['per']->value) {
?>
        <input type="hidden" name="id"  class="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['per']->value['id_personaje'];?>
">
        <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['per']->value['nombrePersonaje'];?>
" class="descripcion" >
        <input type="number" name="id_pelicula" value="<?php echo $_smarty_tpl->tpl_vars['per']->value['id_pelicula'];?>
" class="descripcion" >
        <br>
        <br>
        <button type="submit" name="button" class="descripcion">EDITAR</button>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </form>
    </section>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>

</body>
<?php }
}
