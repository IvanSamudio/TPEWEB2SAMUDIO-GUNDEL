{include file="header.tpl"}
<body>
  <div class="contenedor">
    <header class="head">
      <div class="imgTop">
      </div>

      <input type="checkbox" name="btn-menu" value="" class="btn-menu" id="btn-menu" >
      <label for="btn-menu"><img src="images/botonNav.jpg" alt="" class="botonNav"> </label>
      {include file="navbarUsuario.tpl"}
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
              {foreach from=$Pelicula item=peli}
                <tr>
                  <td>{$peli['nombre']}</td>
                  <td>{$peli['descripcion']}</td>
                  <td>{$peli['id_puntaje']}</td>
                  <td> <a href="borrar/{$peli['id_peliculas']}">BORRAR</a> </td>
                  <td> <a href="mostrarEditar/{$peli['id_peliculas']}">EDITAR</a> </td>
                </tr>
              {/foreach}
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

{include file="footer.tpl"}
