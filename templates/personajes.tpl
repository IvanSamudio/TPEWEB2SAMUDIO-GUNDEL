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
              <th>Personajes</th>
            </thead>
            <tbody class="tablaCambiable">
              {foreach from=$Personaje item=personajes}
                <tr>
                  <td>{$personajes['nombre_personaje']}</td>
                  <td>{$personajes['id_pelicula']}</td>
                </tr>
              {/foreach}
            </tbody>

          </table>
        </div>
        <br><br><br>
        </div>
      </div>
    </section>

{include file="footer.tpl"}
