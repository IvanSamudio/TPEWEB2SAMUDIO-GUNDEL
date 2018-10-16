<?php
require_once  "./view/HomeView.php";

class HomeController
{
  private $view;
  private $Titulo;

  function __construct()
  {
    $this->view = new HomeView();
    $this->Titulo = "Inicio";
  }

  function Home(){
      $this->view->Mostrar($this->Titulo);
  }

}

?>
