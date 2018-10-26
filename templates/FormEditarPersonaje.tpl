{include file="header.tpl"}

<body>
  <div class="container">
    <section class="main">
      <form class="formulario" action="EditadoPersonaje" method="post">
      {foreach from=$Personajes item=per}
        <input type="hidden" name="id"  class="descripcion" value="{$per['id_personaje']}">
        <input type="text" name="nombre" value="{$per['nombrePersonaje']}" class="descripcion" >
        <input type="number" name="id_pelicula" value="{$per['id_pelicula']}" class="descripcion" >
        <br>
        <br>
        <button type="submit" name="button" class="descripcion">EDITAR</button>
      {/foreach}
      </form>
    </section>

    {include file="footer.tpl"}
  </div>

</body>
