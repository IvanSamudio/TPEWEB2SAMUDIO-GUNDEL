<?php
require_once  "./view/PelisView.php";
require_once  "./model/PelisModel.php";

class PelisController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
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
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function BorrarPeliculas($param){
    $this->model->BorrarPelicula($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]).'/tabla');
  }

  function EditarTarea($param){
    $pelicula = $_POST["pelicula"];
    $descripcion = $_POST["descripcion"];
    $puntaje = $_POST["puntaje"];
    $this->model->CompletarTarea($param[0],$pelicula,$descripcion,$puntaje);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]).'/tabla');

  }
}

 ?>
