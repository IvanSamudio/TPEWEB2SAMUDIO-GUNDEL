<?php
require_once  ('libs/Smarty.class.php');
class visitanteView
{

  function Mostrar($Titulo,$Pelicula){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Pelicula',$Pelicula);
    $smarty->display('templates/visitante.tpl');
  }

  function mostrarPersonajes($Titulo,$personaje)
  {
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Personaje',$personaje);
    $smarty->display('templates/personajes.tpl');
  }

}

 ?>
