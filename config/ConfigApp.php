<?php

define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('HOMEUSUARIO', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]).'/homeUsuario');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'visitanteController#mostrarVisitante',
      'home'=> 'visitanteController#mostrarVisitante',
      'homeUsuario'=> 'PelisController#mostrarUsuario',
      'agregar'=> 'PelisController#InsertPelicula',
      'borrar' => 'PelisController#BorrarPeliculas',
      'mostrarEditar' => 'PelisController#EditarPelicula',
      'Editado' => 'PelisController#guardarEditarPeliculas',
      'EditadoPersonaje' => 'PelisController#guardarEditarPersonaje',
      'tabla' => 'PelisController#mostrarUsuario',
      'verPersonaje' => 'visitanteController#mostrarpersonajes',
      'verPersonajeUsuario' => 'PelisController#mostrarPersonajesUsuario',
      'mostrarEditarPersonaje' => 'PelisController#EditarPersonaje',
      'tablaVisitante' => 'visitanteController#mostrarVisitante',
      'mostrarUsuarios'=> 'UsuarioController#MostrarUsuario',
      'registrate'=> 'UsuarioController#Registro',
      'agregarUsuario'=> 'UsuarioController#InsertUsuario',
      'login'=> 'LoginController#login',
      'logout'=> 'LoginController#logout',
      'verificarLogin' => 'LoginController#verificarLogin',
      'agregarPersonaje'=> 'PelisController#InsertPersonaje',
      'borrarPersonaje' => 'PelisController#borrarPersonaje',



    ];

}

 ?>
