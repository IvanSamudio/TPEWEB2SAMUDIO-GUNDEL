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
    header(HOMEUSUARIO);
  }

  function BorrarPeliculas($param){
    $this->model->BorrarPelicula($param[0]);
    header(HOMEUSUARIO);
  }

  function EditarPelicula($param){
      $id_pelicula = $param[0];
      $pelicula = $this->model->GetPelicula($id_pelicula);
      $this->view->MostrarParaEditar("Editar Pelicula", $pelicula);

  }

  function guardarEditarPeliculas(){
    $nombre = $_POST["pelicula"];
    $descripcion = $_POST["descripcion"];
    $puntaje = $_POST["puntaje"];
    $id = $_POST["id"];
    $this->model->EditarDatosPelicula($nombre,$descripcion,$puntaje,$id);
    header(HOMEUSUARIO);
  }


}

 ?>
