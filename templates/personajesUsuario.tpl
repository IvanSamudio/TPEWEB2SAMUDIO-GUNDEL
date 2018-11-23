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
              <th>PERSONAJES</th>
              <th colspan="2">ACCIONES</th>
            </thead>
            <tbody class="tablaCambiable">
              {foreach from=$Personaje item=personajes}
                <tr>
                  <td>{$personajes['nombrePersonaje']}</td>
                  <td> <a href="borrarPersonaje/{$personajes['id_personaje']}">BORRAR</a> </td>
                  <td> <a href="mostrarEditarPersonaje/{$personajes['id_personaje']}">EDITAR</a> </td>
                </tr>
                {/foreach}
            </tbody>
          </table>
        </div>
        <br><br><br>
        <form class="formulario" method="post" action="agregarPersonaje">
            <input type="text" name="personaje" value="" class="pelicula" placeholder="NOMBRE PERSONAJE">


            <select class="opciones" name="id">
                {foreach from=$peliculas item=pelicula}
                    <option  value="{$pelicula['id_peliculas']}">{$pelicula['nombre']}</option>
                    {$numero=$pelicula['id_peliculas']}
              {/foreach}
            </select>


            <input type="submit" name="" value="ENVIAR" class="enviarDatos">
        </form>
        <br>
        <div class="comments">

        </div>
        <br>
        <form class="formulario">
          <input type="text" class="comentario" value="">
          <input type="number" class="puntaje" value="" max="5">
          <input type="button" class="enviar" value="ENVIAR" id="{$id}">
          <input type="button" class="enviar3" value="ENVIAR 3 COMENTARIOS" id="{$id}">
        </form>


        </div>
      </div>
    </section>

{include file="footer.tpl"}
