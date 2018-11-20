<?php
/* Smarty version 3.1.33, created on 2018-10-26 20:51:31
  from 'C:\xampp\htdocs\Proyecto\TPEWEB2SAMUDIO-ORSINI\templates\personajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd36233ecf668_30978628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c396a1131f231ab7dd3f7a8a32f9f3764802551' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\TPEWEB2SAMUDIO-ORSINI\\templates\\personajes.tpl',
      1 => 1540575814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbarVisitante.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bd36233ecf668_30978628 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
  <div class="contenedor">
    <header class="head">
      <div class="imgTop">
      </div>

      <input type="checkbox" name="btn-menu" value="" class="btn-menu" id="btn-menu" >
      <label for="btn-menu"><img src="images/botonNav.jpg" alt="" class="botonNav"> </label>
      <?php $_smarty_tpl->_subTemplateRender("file:navbarVisitante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>

    <section class="main">
      <div class="contenidoTabla">
        <div class="tabla">
          <table>
            <thead>
              <th>Personajes</th>
            </thead>
            <tbody class="tablaCambiable">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Personaje']->value, 'personajes');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['personajes']->value) {
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['personajes']->value['nombrePersonaje'];?>
</td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
        </div>
        <br><br><br>
        </div>
      </div>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
