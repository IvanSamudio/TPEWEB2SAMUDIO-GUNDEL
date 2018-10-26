<?php
class personajesModel
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

  function GetPersonajes(){
      $sentencia = $this->db->prepare( "SELECT * from personaje");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);

  }


  function GetPersonaje($id){
      $sentencia = $this->db->prepare( "SELECT * from personaje where id_pelicula = ?");
      $sentencia->execute(array($id));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetPersonajeEditar($id){
      $sentencia = $this->db->prepare( "SELECT * from personaje where id_personaje = ?");
      $sentencia->execute(array($id));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarPersonaje($personaje,$id){
    $sentencia = $this->db->prepare("INSERT INTO personaje(nombrePersonaje,id_pelicula) VALUES(?,?)");
    $sentencia->execute(array($personaje,$id));
  }

  function borrarPersonaje($id){
    $sentencia = $this->db->prepare("DELETE from personaje where id_personaje=?");
    $sentencia->execute(array($id));
  }

  function EditarDatosPersonaje($nombre,$pelicula,$id){
    $sentencia = $this->db->prepare( "UPDATE personaje SET nombrePersonaje = ?, id_pelicula = ? where id_personaje=?");
    $sentencia->execute(array($nombre,$pelicula,$id));
  }


  }


 ?>
