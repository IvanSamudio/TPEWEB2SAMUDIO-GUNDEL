{include file="header.tpl"}

<body>
  <div class="container">
    <section class="main">
      <form class="formulario" action="guardareditado" method="POST">
        <input type="text" name="pelicula" value="{$Pelicula['nombre']}" class="descripcion" >
        <input type="text" name="descripcion" value="{$Pelicula['descripcion']}" class="descripcion" >
        <input type="number" min="0" max="10" name="puntaje" value="{$Pelicula['id_peliculas']}" class="puntaje" >
        <button type="submit" name="button">EDITAR</button>
      </form>
    </section>

    {include file="footer.tpl"}
  </div>

</body>
