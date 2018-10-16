<?php
/* Smarty version 3.1.33, created on 2018-10-16 17:03:44
  from 'C:\xampp\htdocs\Proyecto\TPEWEB2SAMUDIO-ORSINI\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc5fdd0cf5d07_22202380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60578d4d833b1f13ca4237951a296596b3c5afa3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\TPEWEB2SAMUDIO-ORSINI\\templates\\home.tpl',
      1 => 1539702219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc5fdd0cf5d07_22202380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
  <div class="contenedor">
    <header class="head">
      <div class="imgTop">
        <img src="./images/headPagina.png" alt="" class="imgTop">
      </div>

      <input type="checkbox" name="btn-menu" value="" class="btn-menu" id="btn-menu" >
      <label for="btn-menu"><img src="images/botonNav.jpg" alt="" class="botonNav"> </label>
      <nav class="menu">
        <ul>
          <li><a href="#" class="home">INICIO</a> </li>
          <li><a href="#" class="peliculas">PELICULAS</a> </li>
          <li><a href="#" class="registrate">REGISTRATE</a> </li>
          <li><a href="tabla" class="tablas">TABLAS</a> </li>
        </ul>
      </nav>
    </header>

    <section class="main">
      <div class="imagenSide">
        <img src="images/sectionMain.jpg" alt="" class="imagenSide">
      </div>
      <div class="sectionMainContenido">
        <p>
          Jasón Voorhees es un asesino protagonista de la serie de películas "viernes 13" (Friday the 13th).
          Esta cuenta con doce entregas hasta el momento, Las cuales pertenecen al subgénero del cine de terror
          llamado Slasher(La característica más habitual de este Subgénero es la presencia de un psicópata que
          asesina brutalmente adolescentes y jóvenes que se encuentran fuera de la supervisión de un adulto)
        </p>
        <br>
        <h1>JASON EN LOS VIDEOJUEGOS</h1>
        <ul>
          <li>
            En 1989 la empresa LJN Toys lanza al mercado el videojuego para la consola NES
            (Nintendo Entertainment System) Friday the 13th.
           </li>
          <li>El 10 de marzo de 2015 , Jason fue revelado como personaje en el videojuego Mortal Kombat X</li>
          <li>
            en 2017 Friday the 13th: The Game, Jason es el protagonista del juego basado en la serie de películas,
            donde se tratara de escapar de jason o ser el mismo y asesinar a todos.
          </li>
        </ul>

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
