<?php
/* Smarty version 3.1.33, created on 2018-11-05 20:43:46
  from 'C:\xampp\htdocs\Proyecto\TPEWEB2SAMUDIO-ORSINI\templates\tableUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be09d72379978_86758576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae0f6f1655384fa45ccd90eea2af8fe17aeb582e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\TPEWEB2SAMUDIO-ORSINI\\templates\\tableUsuario.tpl',
      1 => 1541446712,
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
function content_5be09d72379978_86758576 (Smarty_Internal_Template $_smarty_tpl) {
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
              <th>PELICULA</th>
              <th>DESCRIPCION</th>
              <th>PUNTAJE</th>
              <th colspan="2">ACCIONES</th>
            </thead>
            <tbody class="tablaCambiable">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Pelicula']->value, 'peli');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['peli']->value) {
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['peli']->value['nombre'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['peli']->value['descripcion'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['peli']->value['id_puntaje'];?>
</td>
                  <td> <a href="borrar/<?php echo $_smarty_tpl->tpl_vars['peli']->value['id_peliculas'];?>
">BORRAR</a> </td>
                  <td> <a href="mostrarEditar/<?php echo $_smarty_tpl->tpl_vars['peli']->value['id_peliculas'];?>
">EDITAR</a> </td>
                </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>

          </table>
        </div>
        <a href="verPersonajeUsuario">VER TODOS LOS PERSONAJES</a>
        <br><br><br>
        <form class="formulario" method="post" action="agregar">
            <input type="text" name="pelicula" value="" class="pelicula" placeholder="NOMBRE PELICULA">
            <input type="text" name="descripcion" value="" class="descripcion" placeholder="DESCRIPCION">
            <input type="number" min="0" max="10" name="puntaje" value="" class="puntaje" placeholder="PUNTOS">
            <input type="submit" name="" value="ENVIAR" class="enviarDatos">
        </form>
        </div>
      </div>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
