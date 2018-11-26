<?php
require_once  "./view/UsuarioView.php";
require_once  "./model/UsuarioModel.php";
require_once  "./Controller/SecuredController.php";

class UsuarioController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new UsuarioView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Lista de Usuario";

  }

  function MostrarUsuario(){
      $Usuarios = $this->model->GetUsuario();
      $this->view->Mostrar($this->Titulo, $Usuarios);
  }

  


  function InsertUsuario(){
    $nombre = $_POST["nombre"];
    $pass = password_hash($_POST["pass"],PASSWORD_DEFAULT);;
    $this->model->InsertarUsuario($nombre,$pass);
    HEADER(LOGIN);
  }

}

 ?>
