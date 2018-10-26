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

  function mostrarPersonajes($param){
        $id_pelicula = $param[0];
        $Personaje = $this->model->GetPersonaje($id_pelicula);
        $this->view->mostrarPersonajes($this->Titulo, $Personaje);

    }

}

 ?>
