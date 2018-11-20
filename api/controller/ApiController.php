<?php

require_once "Api.php";
require_once "./../model/comentariosModel.php";
require_once "./../controller/SecuredController.php";

class ApiController extends Api{
  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new comentariosModel();
  }

  function GetComentarios($param=null){
    if (isset($param)){
      $id = $param[0];
      $arreglo=$this->model->GetComentario($id);
      $datos=$arreglo;
    }else {
      $datos = $this->model->GetComentarios();
    }
    if (isset($datos)) {
      return $this->json_response($datos,200);
    }else{
      return $this->json_response(null,404);
    }
  }

  function DeleteComentarios($param = null){
    if(count($param) == 1){
        $id = $param[0];
        $datos =  $this->model->BorrarComentario($id);
        if($datos == false){
          return $this->json_response($datos, 500);
        }

        return $this->json_response($datos, 200);
    }else{
      return  $this->json_response("No task specified", 500);
    }
  }

  function InsertComentarios($param = null){
    $objetoJson = $this->getJSONData();
    $datos = $this->model->InsertarComentario($objetoJson->id_usuario,$objetoJson->id_peliculas, $objetoJson->comentario, $objetoJson->puntaje);
    return $this->json_response($datos, 200);
  }

  function UpdateComentarios($param = null){
    if(count($param) == 1){
      $id = $param[0];
      $objetoJson = $this->getJSONData();
      $datos = $this->model->EditarComentario($objetoJson->id_usuario,$objetoJson->id_peliculas, $objetoJson->comentario, $objetoJson->puntaje, $id);
      return $this->json_response($datos, 200);
    }else{
      return  $this->json_response("No task specified", 500);
    }
  }


  }
 ?>
