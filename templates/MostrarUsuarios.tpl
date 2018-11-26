{include file="header.tpl"}

<div class="contenedor">
  <header class="head">

    <input type="checkbox" name="btn-menu" value="" class="btn-menu" id="btn-menu" >
    <label for="btn-menu"><img src="images/botonNav.jpg" alt="" class="botonNav"> </label>
    {include file="navbarUsuario.tpl"}
  </header>
  <section class="main">
    <h1>{$Usuario}</h1>
    <div class="contenidoTabla">
      <div class="tabla">
        <table>
          <thead>
            <th>NOMBRE USUARIO</th>
            <th>PRIVILEGIOS ADMIN</th>
            <th colspan="2">ACCIONES</th>
          </thead>
          <tbody class="tablaCambiable">
            {foreach from=$Usuarios item=usuario}
              {if {$usuario['nombreUsuario']} != $Usuario }
              <tr>
                <td>{$usuario['nombreUsuario']}</td>
                {if {$usuario['admin']} == 1}
                  <td>ADMIN</td>
                  <td><a href="quitarAdmin/{$usuario['id_usuario']}">QUITAR PERMISOS</a></td>
                {else}
                  <td>USUARIO</td>
                  <td><a href="darAdmin/{$usuario['id_usuario']}">DAR PERMISOS</a></td>
                {/if}


              </tr>
              {/if}
            {/foreach}
          </tbody>

        </table>
      </div>
      </div>
  </section>


{include file="footer.tpl"}
