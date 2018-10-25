<?php
require_once  "./view/PelisView.php";
require_once  "./model/PelisModel.php";
require_once  "SecuredController.php";

class PelisController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();
    $this->view = new PelisView();
    $this->model = new PelisModel();
    $this->Titulo = "JASON WIKI";
  }

  function Home(){
      $Pelicula = $this->model->GetPeliculas();
      $this->view->Mostrar($this->Titulo, $Pelicula);
    }


  function InsertPelicula(){
    $pelicula = $_POST["pelicula"];
    $descripcion = $_POST["descripcion"];
    $puntaje = $_POST["puntaje"];
    $this->model->InsertarPelicula($pelicula,$descripcion,$puntaje);
    header(HOME);
  }

  function BorrarPeliculas($param){
    $this->model->BorrarPelicula($param[0]);
    header(HOME);
  }

  function EditarPelicula($param){
      $id_pelicula = $param[0];
      $pelicula = $this->model->GetPelicula($id_pelicula);
      $this->view->MostrarParaEditar("Editar Pelicula", $pelicula);

  }

  function guardarEditarPeliculas($param){
    $pelicula = $_POST["pelicula"];
    $descripcion = $_POST["descripcion"];
    $puntaje = $_POST["puntaje"];
    $Tarea = $this->model->Getpelicula($param);
    $this->model->EditarDatosPelicula($param[0],$pelicula,$descripcion,$puntaje);
    header(HOME);
  }


}

 ?>
