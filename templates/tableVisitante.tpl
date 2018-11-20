{include file="header.tpl"}
<body>
  <div class="contenedor">
    <header class="head">
      <div class="imgTop">
      </div>

      <input type="checkbox" name="btn-menu" value="" class="btn-menu" id="btn-menu" >
      <label for="btn-menu"><img src="images/botonNav.jpg" alt="" class="botonNav"> </label>
      {include file="navbarVisitante.tpl"}
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
              {foreach from=$Pelicula item=personaje}
                <tr>
                  <td><a href="verPersonaje/{$personaje['id_peliculas']}">{$personaje['nombre']}</a></td>
                  <td>{$personaje['descripcion']}</td>
                  <td>{$personaje['id_puntaje']}</td>

                </tr>
              {/foreach}
            </tbody>

          </table>
        </div>
        </div>
        <br>
        <div class="comments">

        </div>
      </div>
    </section>

{include file="footer.tpl"}
