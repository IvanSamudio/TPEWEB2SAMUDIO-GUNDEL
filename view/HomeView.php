<?php
require_once  ('libs/Smarty.class.php');
/**
 *
 */
class HomeView
{

  function Mostrar($Titulo){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    echo $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
    $smarty->display('templates/home.tpl');
  }
}

 ?>
