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
            </thead>
            <tbody class="tablaCambiable">
              {foreach from=$Pelicula item=personaje}
                <tr>
                  <td><a href="verPersonaje/{$personaje['id_peliculas']}">{$personaje['nombre']}</a></td>
                  <td>{$personaje['descripcion']}</td>
                  <td>{$personaje['id_puntaje']}</td>
                  {if {$personaje['imagen']} == ""}
                    <td><img src="images/noDisponible.jpg" alt="" class="imgTabla">
                    </td>
                  {else}
                    <td><img src="{$personaje['imagen']}" alt="" class="imgTabla"></td>
                  {/if}

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
