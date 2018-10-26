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
      $sentencia = $this->db->prepare( "SELECT * from pelicula");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);

  }


  function GetPelicula($id){
      $sentencia = $this->db->prepare( "SELECT * from pelicula where id_peliculas = ?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);

  }

  function InsertarPelicula($pelicula,$descripcion,$puntaje){
    $sentencia = $this->db->prepare("INSERT INTO pelicula(nombre,descripcion,id_puntaje) VALUES(?,?,?)");
    $sentencia->execute(array($pelicula,$descripcion,$puntaje));
  }

  function BorrarPelicula($idTarea){
    $sentencia = $this->db->prepare("DELETE from pelicula where id_Peliculas=?");
    $sentencia->execute(array($idTarea));
  }

  function EditarDatosPelicula($nombre,$descripcion,$puntaje,$id){
    $sentencia = $this->db->prepare( "update pelicula set nombre = ?, descripcion = ?, id_puntaje = ? where id_peliculas=?");
    $sentencia->execute(array($nombre,$descripcion,$puntaje,$id));
  }


  }



 ?>
