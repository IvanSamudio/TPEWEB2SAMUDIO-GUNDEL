<?php
require_once  ('libs/Smarty.class.php');
/**
 *
 */
class PelisView
{

  function Mostrar($Titulo, $Pelicula){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $smarty->assign('Pelicula',$Pelicula);
    echo $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
    $smarty->display('templates/table.tpl');
  }
}

 ?>
