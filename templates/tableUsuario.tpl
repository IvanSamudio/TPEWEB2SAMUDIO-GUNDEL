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

      <br>
      {include file="filtro.tpl"}
      <br>



      <div class="contenidoTabla">
        <div class="tabla">
          <table>
            <thead>
              <th>PELICULA</th>
              <th>OPINION CRITICA</th>
              <th>PUNTAJE</th>
              <th>POSTER</th>
              <th colspan="2">ACCIONES</th>
            </thead>
            <tbody class="tablaCambiable">
              {foreach from=$Pelicula item=personaje}
                <tr>
                  <td><a href="verPersonajeUsuario/{$personaje['id_peliculas']}">{$personaje['nombre']}</a></td>
                  <td>{$personaje['descripcion']}</td>
                  <td>{$personaje['id_puntaje']}</td>
                  {if {$personaje['imagen']} == ""}
                    <td><img src="images/noDisponible.jpg" alt="" class="imgTabla">

                      <form class="formulario" method="post" action="InsertImagen"  enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{$personaje['id_peliculas']}" >
                        <input type="file" class="selImg" id="imagenes" name="imagenes[]"  accept="image/jpg" >
                        <br>
                        <input type="submit" name="" value="ENVIAR" class="enviarDatos">
                    </form>
                    </td>
                  {else}
                    <td><img src="{$personaje['imagen']}" alt="" class="imgTabla"><br> <a href="borrarImagen/{$personaje['imagen']}">BORRAR</a></td>
                  {/if}
                  <td> <a href="borrar/{$personaje['id_peliculas']}">BORRAR</a> </td>
                  <td> <a href="mostrarEditar/{$personaje['id_peliculas']}">EDITAR</a> </td>
                </tr>
              {/foreach}
            </tbody>

          </table>
        </div>
        <br><br><br>
        <form class="formulario" method="post" action="agregar"  enctype="multipart/form-data">
            <input type="text" name="pelicula" value="" class="pelicula" placeholder="NOMBRE PELICULA">
            <select class="opciones" name="descripcion">
                    <option  value="MALA">MALA</option>
                    <option  value="BUENA">BUENA</option>
                    <option  value="EXCELENTE">EXCELENTE</option>
            </select>
            <input type="file" id="imagenes" name="imagenes[]" multiple>
            <input type="number" min="0" max="10" name="puntaje" value="" class="puntaje" placeholder="PUNTOS">
            <input type="submit" name="" value="ENVIAR" class="enviarDatos">
        </form>
        </div>
      </div>
    </section>

{include file="footer.tpl"}
