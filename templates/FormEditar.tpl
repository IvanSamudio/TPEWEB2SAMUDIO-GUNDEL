{include file="header.tpl"}

<body>
  <div class="container">
    <section class="main">
      <form class="formulario" action="Editado/{$Pelicula['id_peliculas']}" method="post">

        <input type="text" name="pelicula" value="{$Pelicula['nombre']}" class="descripcion" >
        <select class="opciones" name="descripcion" >
                <option  value="MALA">MALA</option>
                <option  value="BUENA">BUENA</option>
                <option  value="EXCELENTE">EXCELENTE</option>
        </select>
        <input type="number" min="0" max="10" name="puntaje" value="{$Pelicula['id_puntaje']}" class="puntaje" >
        <br>
        <br>
        <button type="submit" name="button" class="descripcion">EDITAR</button>
      </form>
    </section>

    {include file="footer.tpl"}
  </div>

</body>
