<?php
/* Smarty version 3.1.33, created on 2018-11-08 18:13:41
  from 'C:\xampp\htdocs\Proyecto\TPEWEB2SAMUDIO-ORSINI\templates\formEditar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be46ec547aea1_93993104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6720380d09efa7a21362a65c6d1eebdecbce7fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\TPEWEB2SAMUDIO-ORSINI\\templates\\formEditar.tpl',
      1 => 1541697168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5be46ec547aea1_93993104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
  <div class="container">
    <section class="main">
      <form class="formulario" action="Editado/<?php echo $_smarty_tpl->tpl_vars['Pelicula']->value['id_peliculas'];?>
" method="post">

        <input type="text" name="pelicula" value="<?php echo $_smarty_tpl->tpl_vars['Pelicula']->value['nombre'];?>
" class="descripcion" >
        <input type="text" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['Pelicula']->value['descripcion'];?>
" class="descripcion" >
        <input type="number" min="0" max="10" name="puntaje" value="<?php echo $_smarty_tpl->tpl_vars['Pelicula']->value['id_puntaje'];?>
" class="puntaje" >
        <br>
        <br>
        <button type="submit" name="button" class="descripcion">EDITAR</button>
      </form>
    </section>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>

</body>
<?php }
}
