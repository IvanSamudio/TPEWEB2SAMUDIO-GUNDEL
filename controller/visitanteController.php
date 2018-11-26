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
    $this->view = new PelisView();
    $this->model = new PelisModel();
    $this->Titulo = "VISITANTE";
  }

  function mostrarVisitante(){
      $Pelicula = $this->model->GetPeliculas();
      $Personaje = $this->model->GetPersonajes();
      $this->view->Mostrar($this->Titulo, $Pelicula,$Personaje);
    }

    function mostrarPersonajes($param){
          $id_pelicula = $param[0];
          $Personaje = $this->model->GetPersonaje($id_pelicula);
          $this->view->mostrarPersonajes($this->Titulo, $Personaje);
      }

      function Registro(){
        $Titulo='Registro';
        $this->view->MostrarRegistrarse($Titulo);
      }

      function filtrarPeliculas(){
        $nombre = $_POST["columna"];
        $condicion = $_POST["filtro"];
        $Pelicula = $this->model->filtrarPeliculas($nombre,$condicion);
        $Personaje = $this->model->GetPersonajes();
        session_start();
        if (isset($_SESSION["User"])) {
          $this->Titulo = "USUARIO";
          $this->view->MostrarUsuario($this->Titulo, $Pelicula,$Personaje);
        }else {
          $this->view->Mostrar($this->Titulo, $Pelicula,$Personaje);
        }
      }

}

 ?>
