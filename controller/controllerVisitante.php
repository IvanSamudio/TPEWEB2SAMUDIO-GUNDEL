<?php
require_once  "./view/visitanteView.php";
require_once  "./model/personajesModel.php";

class controllerVisitante
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new visitanteView();
    $this->model = new personajesModel();
    $this->Titulo = "VISITANTE";
  }

  function Home(){
      $Pelicula = $this->model->GetPeliculas();
      $this->view->Mostrar($this->Titulo, $Pelicula);
    }

  function mostrarPersonajes(){
        $Personaje = $this->model->GetPersonajes();
        var_dump($Personaje);
        $this->view->mostrarPersonajes($this->Titulo, $Personaje);
    }

}

 ?>
