<?php
/* Smarty version 3.1.33, created on 2018-11-07 23:32:55
  from 'C:\xampp\htdocs\Proyecto\TPEWEB2SAMUDIO-ORSINI\templates\personajesUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be36817d1aab6_64060992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92fd7eb93e568fd5e6ba7668e61df3c734898065' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\TPEWEB2SAMUDIO-ORSINI\\templates\\personajesUsuario.tpl',
      1 => 1541629970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbarUsuario.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5be36817d1aab6_64060992 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
  <div class="contenedor">
    <header class="head">
      <div class="imgTop">
      </div>

      <input type="checkbox" name="btn-menu" value="" class="btn-menu" id="btn-menu" >
      <label for="btn-menu"><img src="images/botonNav.jpg" alt="" class="botonNav"> </label>
      <?php $_smarty_tpl->_subTemplateRender("file:navbarUsuario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>

    <section class="main">
      <div class="contenidoTabla">
        <div class="tabla">
          <table>
            <thead>
              <th>PERSONAJES</th>
              <th colspan="2">ACCIONES</th>
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
                  <td> <a href="borrarPersonaje/<?php echo $_smarty_tpl->tpl_vars['personajes']->value['id_personaje'];?>
">BORRAR</a> </td>
                  <td> <a href="mostrarEditarPersonaje/<?php echo $_smarty_tpl->tpl_vars['personajes']->value['id_personaje'];?>
">EDITAR</a> </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
        </div>
        <br><br><br>
        <form class="formulario" method="post" action="agregarPersonaje">
            <input type="text" name="personaje" value="" class="pelicula" placeholder="NOMBRE PERSONAJE">


            <select class="opciones" name="id">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculas']->value, 'pelicula');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
?>
                    <option  value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_peliculas'];?>
"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['nombre'];?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </select>


            <input type="submit" name="" value="ENVIAR" class="enviarDatos">
        </form>
        </div>
      </div>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
