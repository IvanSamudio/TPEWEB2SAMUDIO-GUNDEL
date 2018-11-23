<?php
require_once  ('libs/Smarty.class.php');
class PelisView
{

  function MostrarUsuario($Titulo, $Pelicula,$personaje){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Pelicula',$Pelicula);
    $smarty->assign('Personaje',$personaje);
    $smarty->display('templates/tableUsuario.tpl');
  }

  function MostrarParaEditar($Titulo,$pelicula){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Pelicula',$pelicula);
    $smarty->display('templates/formEditar.tpl');

  }

  function Mostrar($Titulo,$Pelicula){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Pelicula',$Pelicula);
    $smarty->display('templates/tableVisitante.tpl');
  }

  function mostrarPersonajes($Titulo,$personaje)
  {
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Personaje',$personaje);
    $smarty->display('templates/personajes.tpl');
  }

  function mostrarPersonajeUsuario($Titulo,$personaje,$peliculas,$id_pelicula)
  {
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Personaje',$personaje);
    $smarty->assign('peliculas',$peliculas);
    $smarty->assign('id',$id_pelicula);
    $smarty->display('templates/personajesUsuario.tpl');
  }

  function MostrarParaEditarPersonajes($Titulo,$Personaje){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Personajes',$Personaje);
    $smarty->display('templates/formEditarPersonaje.tpl');

  }


}

 ?>
