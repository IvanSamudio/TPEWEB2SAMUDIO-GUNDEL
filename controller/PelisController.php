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

  function mostrarUsuario(){
      $Pelicula = $this->model->GetPeliculas();
      $Personaje = $this->model->GetPersonajes();
      $this->view->MostrarUsuario($this->Titulo, $Pelicula,$Personaje);
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

  function guardarEditarPeliculas($param){
    $nombre = $_POST["pelicula"];
    $descripcion = $_POST["descripcion"];
    $puntaje = $_POST["puntaje"];
    $id = $param[0];
    $this->model->EditarDatosPelicula($nombre,$descripcion,$puntaje,$id);
    header(HOMEUSUARIO);
  }

  function mostrarPersonajesUsuario($param = null){
          $id_pelicula = $param[0];
          $Personaje = $this->model->GetPersonaje($id_pelicula);
          $peliculas = $this->model->GetPeliculas();
          $this->view->mostrarPersonajeUsuario($this->Titulo, $Personaje, $peliculas,$id_pelicula);
    }


    function InsertPersonaje(){
      $personaje = $_POST["personaje"];
      $id = $_POST["id"];
      $this->model->InsertarPersonaje($personaje,$id);
      header(HOMEUSUARIO);
    }

    function borrarPersonaje($param){
      $this->model->borrarPersonaje($param[0]);
      header(HOMEUSUARIO);
    }

    function EditarPersonaje($param){
        $id_personaje = $param[0];
        $personaje = $this->model->GetPersonajeEditar($id_personaje);
        $this->view->MostrarParaEditarPersonajes("Editar Pelicula", $personaje);

    }

    function guardarEditarPersonaje(){
      $nombre = $_POST["nombre"];
      $pelicula = $_POST["id_pelicula"];
      $id = $_POST["id"];
      $this->model->EditarDatosPersonaje($nombre,$pelicula,$id);
      header(HOMEUSUARIO);
    }


}

 ?>
