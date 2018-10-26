<?php
require_once  "./view/personajesView.php";
require_once  "./model/personajesModel.php";

class personajesController
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

  function mostrarPersonajesUsuario(){
          $Personaje = $this->model->GetPersonajes();
          $this->view->mostrarPersonajeUsuario($this->Titulo, $Personaje);
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
