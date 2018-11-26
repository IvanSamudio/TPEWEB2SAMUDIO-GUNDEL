<?php
class comentariosModel
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

  function GetComentarios(){
      $sentencia = $this->db->prepare( "SELECT * from comentario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


  function GetComentario($id){
      $sentencia = $this->db->prepare( "SELECT * from comentario where id_peliculas = ?");
      $sentencia->execute(array($id));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);

  }

  function InsertarComentario($id_usuario,$id_pelicula,$comentario,$puntaje){
    $sentencia = $this->db->prepare("INSERT INTO comentario(id_usuario,id_peliculas,comentario,puntaje) VALUES(?,?,?,?)");
    $sentencia->execute(array($id_usuario,$id_pelicula,$comentario,$puntaje));
    $lastItem= $this->db->lastInsertId();
    return  $this->GetComentario($lastItem);

  }

  function BorrarComentario($id){
    $comentario = $this->GetComentario($id);
    if(isset($comentario)){
      $sentencia = $this->db->prepare("DELETE from comentario where id_comentario=?");
      $sentencia->execute(array($id));
      return $comentario;

    }
  }

  function EditarComentario($id_usuario,$id_pelicula,$comentario,$puntaje,$id){
    $sentencia = $this->db->prepare( "update comentario set id_usuario = ?, id_peliculas = ?, comentario = ?, puntaje = ? where id_comentario=?");
    $sentencia->execute(array($id_usuario,$id_pelicula,$comentario,$puntaje,$id));
  }


  }



 ?>
