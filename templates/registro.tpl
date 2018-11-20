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
      <form class="formulario" method="post" action="registrate">
          <input type="text" name="nombre" value="" class="pelicula" placeholder="NOMBRE USUARIO">
          <input type="password" name="pass" value="" class="descripcion" placeholder="CONTRASEÑA">
          <input type="submit" name="" value="ENVIAR" class="enviarDatos">
      </form>
    </section>

{include file="footer.tpl"}
