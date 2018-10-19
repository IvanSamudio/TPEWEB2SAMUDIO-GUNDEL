<?php
require_once  ('libs/Smarty.class.php');
class PelisView
{

  function Mostrar($Titulo, $Pelicula){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Pelicula',$Pelicula);
    $smarty->display('templates/table.tpl');
  }

  function MostrarParaEditar($Titulo,$pelicula){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Pelicula',$pelicula);
    $smarty->display('templates/formEditar.tpl');

  }


}

 ?>
