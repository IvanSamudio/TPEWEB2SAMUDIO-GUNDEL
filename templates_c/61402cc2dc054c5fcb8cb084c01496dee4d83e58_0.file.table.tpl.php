<?php
/* Smarty version 3.1.33, created on 2018-10-16 20:22:43
  from 'C:\xampp\htdocs\Proyecto\TPEWEB2SAMUDIO-ORSINI\templates\table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc62c732f14c1_01126553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61402cc2dc054c5fcb8cb084c01496dee4d83e58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\TPEWEB2SAMUDIO-ORSINI\\templates\\table.tpl',
      1 => 1539714160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc62c732f14c1_01126553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
  <div class="contenedor">
    <header class="head">
      <div class="imgTop">
      </div>

      <input type="checkbox" name="btn-menu" value="" class="btn-menu" id="btn-menu" >
      <label for="btn-menu"><img src="images/botonNav.jpg" alt="" class="botonNav"> </label>
      <nav class="menu">
        <ul>
          <li><a href="home" class="home">INICIO</a> </li>
          <li><a href="" class="peliculas">PELICULAS</a> </li>
          <li><a href="" class="registrate">REGISTRATE</a> </li>
          <li><a href="tabla" class="tablas">TABLAS</a> </li>
        </ul>
      </nav>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Pelicula']->value, 'peli');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['peli']->value) {
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['peli']->value['pelicula'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['peli']->value['descripcion'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['peli']->value['puntaje'];?>
</td>
                  <td> <a href="borrar/<?php echo $_smarty_tpl->tpl_vars['peli']->value['id_peliculas'];?>
">BORRAR</a> </td>
                  <td> <a href="editar/<?php echo $_smarty_tpl->tpl_vars['peli']->value['id_peliculas'];?>
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
        <form class="formulario" method="post" action="agregar">
            <input type="text" name="pelicula" value="" class="pelicula" placeholder="NOMBRE PELICULA">
            <input type="text" name="descripcion" value="" class="descripcion" placeholder="DESCRIPCION">
            <input type="number" min="0" max="10" name="puntaje" value="" class="puntaje" placeholder="PUNTOS">
        </div>
        <input type="submit" name="" value="ENVIAR" class="enviarDatos">
        <input type="button" name="" value="CREAR 3 ELEMENTOS" class="crear3">
      </div>
    </section>

    <aside class="side">
      <div class="datosCuriosos">
        <div class="imagAside">

        </div>
        <h2>¿SABIAS QUE?</h2>
        <p>
          La franquicia de Friday the 13th es una de las más grandes del cine de horror (literalmente,
          con doce películas que integran la saga por el momento), llevando a su protagonista,
          Jason Vorhees, en todo tipo de aventuras, incluyendo una película espacial y enfrentamientos
          con otros grandes del terror.
        </p>
        <p>
          Sí, hoy en día está bastante lejos de causar pesadillas,
          pero sigue siendo una franquicia icónica
        </p>
      </div>
    </aside>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
