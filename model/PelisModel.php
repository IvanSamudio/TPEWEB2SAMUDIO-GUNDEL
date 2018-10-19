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


      $sentencia = $this->db->prepare( "SELECT * from pelicula where id_peliculas = " . $id);
      $sentencia->execute();


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

  function EditarDatosPelicula($id_Pelicula,$pelicula,$descripcion,$puntaje){
    $sentencia = $this->db->prepare( "UPDATE pelicula SET nombre = ?, descripcion = ?, id_puntaje = ? where id_Peliculas=?");
    $sentencia->execute(array($pelicula,$descripcion,$puntaje,$id_Pelicula));
  }


  }



 ?>
