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

  private function subirImagen($imagen){
       $destino_final = 'images/' . uniqid() . '.jpg';
       move_uploaded_file($imagen, $destino_final);
       return $destino_final;
   }

   function InsertarImagen($tempPath,$id){
     $path = $this->subirImagen($tempPath);
     $sentencia = $this->db->prepare("UPDATE pelicula SET imagen=? WHERE id_peliculas=?");
     $sentencia->execute(array($path,$id));
     $lastItem= $this->db->lastInsertId();
     return $this->GetPelicula($lastItem);
   }

   function borrarImagen($rutaImg,$nuevoValor){
     $sentencia = $this->db->prepare("UPDATE pelicula SET imagen=? WHERE imagen=?");
     $sentencia->execute(array($nuevoValor,$rutaImg));
   }

  function InsertarPelicula($pelicula,$descripcion,$puntaje,$tempPath){
    if ($tempPath != "") {
      $path = $this->subirImagen($tempPath);
    }else {
      $path = $tempPath;
    }
    $sentencia = $this->db->prepare("INSERT INTO pelicula(nombre,descripcion,id_puntaje,imagen) VALUES(?,?,?,?)");
    $sentencia->execute(array($pelicula,$descripcion,$puntaje,$path));
    $lastItem= $this->db->lastInsertId();
    return $this->GetPelicula($lastItem);

  }

  function BorrarPelicula($idPelicula){
    $sentencia = $this->db->prepare("DELETE from pelicula where id_Peliculas=?");
    $sentencia->execute(array($idPelicula));
  }

  function EditarDatosPelicula($nombre,$descripcion,$puntaje,$id){
    $sentencia = $this->db->prepare( "update pelicula set nombre = ?, descripcion = ?, id_puntaje = ? where id_peliculas=?");
    $sentencia->execute(array($nombre,$descripcion,$puntaje,$id));
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

  function filtrarPeliculas($nombre,$condicion){
      $sentencia = $this->db->prepare( "SELECT * from pelicula ORDER BY $nombre $condicion");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }





  }



 ?>
