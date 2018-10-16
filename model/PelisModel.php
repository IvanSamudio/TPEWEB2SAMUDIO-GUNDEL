<?php
class PelisModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=peliculas;charset=utf8'
    , 'root', '');
  }

  function GetPeliculas(){
      $sentencia = $this->db->prepare( "select * from pelicula");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);

  }
  function InsertarPelicula($pelicula,$descripcion,$puntaje){
    $sentencia = $this->db->prepare("INSERT INTO pelicula(descripcion,pelicula,puntaje) VALUES(?,?,?)");
    $sentencia->execute(array($descripcion,$pelicula,$puntaje));
  }

  function BorrarPelicula($idTarea){
    $sentencia = $this->db->prepare( "delete from pelicula where id=?");
    $sentencia->execute(array($idTarea));
  }

  function CompletarTarea($id_Pelicula,$pelicula,$descripcion,$puntaje){
    $sentencia = $this->db->prepare( "update pelicula set pelicula=$pelicula where id=?");
    $sentencia->execute(array($id_Pelicula));
  }


  }



 ?>
