<?php
require_once  "./view/pelisView.php";
require_once  "./model/pelisModel.php";

class visitanteController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new pelisView();
    $this->model = new pelisModel();
    $this->Titulo = "VISITANTE";
  }

  function mostrarVisitante(){
      $Pelicula = $this->model->GetPeliculas();
      $this->view->Mostrar($this->Titulo, $Pelicula);
    }

    function mostrarPersonajes($param){
          $id_pelicula = $param[0];
          $Personaje = $this->model->GetPersonaje($id_pelicula);
          $this->view->mostrarPersonajes($this->Titulo, $Personaje);
      }

}

 ?>
