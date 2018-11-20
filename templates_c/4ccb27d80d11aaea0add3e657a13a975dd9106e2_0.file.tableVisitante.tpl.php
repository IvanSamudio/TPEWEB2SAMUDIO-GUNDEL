<?php
/* Smarty version 3.1.33, created on 2018-11-20 01:00:45
  from 'C:\xampp\htdocs\Proyecto\TPEWEB2SAMUDIO-ORSINI\templates\tableVisitante.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf34ead7cb183_15207341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ccb27d80d11aaea0add3e657a13a975dd9106e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\TPEWEB2SAMUDIO-ORSINI\\templates\\tableVisitante.tpl',
      1 => 1542671953,
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
function content_5bf34ead7cb183_15207341 (Smarty_Internal_Template $_smarty_tpl) {
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
              <th>PELICULA</th>
              <th>DESCRIPCION</th>
              <th>PUNTAJE</th>
            </thead>
            <tbody class="tablaCambiable">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Pelicula']->value, 'personaje');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['personaje']->value) {
?>
                <tr>
                  <td><a href="verPersonaje/<?php echo $_smarty_tpl->tpl_vars['personaje']->value['id_peliculas'];?>
"><?php echo $_smarty_tpl->tpl_vars['personaje']->value['nombre'];?>
</a></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['personaje']->value['descripcion'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['personaje']->value['id_puntaje'];?>
</td>

                </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>

          </table>
        </div>
        </div>
        <br>
        <div class="comments">

        </div>
      </div>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
