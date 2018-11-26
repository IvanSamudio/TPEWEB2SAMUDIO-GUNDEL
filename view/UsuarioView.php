<?php
require_once ('libs/Smarty.class.php');
/**
 *
 */
class UsuarioView
{

  function Mostrar($Titulo, $Usuarios){
    $usuario = "";
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $smarty->assign('Usuarios',$Usuarios);
    $smarty->assign('Usuario',$usuario);
    //$smarty->debugging = true;
    $smarty->display('templates/MostrarUsuarios.tpl');
  }

  function MostrarRegistrarse($Titulo){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->display('templates/registro.tpl');
  }
}

 ?>
