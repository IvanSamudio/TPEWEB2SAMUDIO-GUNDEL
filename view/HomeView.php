<?php
require_once  ('libs/Smarty.class.php');
/**
 *
 */
class HomeView
{

  function Mostrar($Titulo){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->display('templates/body.tpl');
  }
}

 ?>
