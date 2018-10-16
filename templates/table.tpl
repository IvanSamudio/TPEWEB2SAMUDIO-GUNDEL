{include file="header.tpl"}
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
              {foreach from=$Pelicula item=peli}
                <tr>
                  <td>{$peli['pelicula']}</td>
                  <td>{$peli['descripcion']}</td>
                  <td>{$peli['puntaje']}</td>
                  <td> <button type="button" name="borrar" href= "borrar/{$peli['id_peliculas']}" action="borrar" >BORRAR</button> </td>
                  <td> <a href="borrar/{$peli['id_peliculas']}">BORRAR</a> </td>
                  <td> <a href="editar/{$peli['id_peliculas']}">EDITAR</a> </td>
                </tr>
              {/foreach}
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

{include file="footer.tpl"}
