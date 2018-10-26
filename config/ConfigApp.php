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
      ''=> 'personajesController#Home',
      'home'=> 'personajesController#Home',
      'homeUsuario'=> 'PelisController#Home',
      'agregar'=> 'PelisController#InsertPelicula',
      'borrar' => 'PelisController#BorrarPeliculas',
      'mostrarEditar' => 'PelisController#EditarPelicula',
      'Editado' => 'PelisController#guardarEditarPeliculas',
      'EditadoPersonaje' => 'personajesController#guardarEditarPersonaje',
      'tabla' => 'PelisController#Home',
      'verPersonaje' => 'personajesController#mostrarpersonajes',
      'verPersonajeUsuario' => 'personajesController#mostrarPersonajesUsuario',
      'mostrarEditarPersonaje' => 'personajesController#EditarPersonaje',
      'tablaVisitante' => 'personajesController#Home',
      'mostrarUsuarios'=> 'UsuarioController#MostrarUsuario',
      'login'=> 'LoginController#login',
      'logout'=> 'LoginController#logout',
      'verificarLogin' => 'LoginController#verificarLogin',
      'agregarPersonaje'=> 'personajesController#InsertPersonaje',
      'borrarPersonaje' => 'personajesController#borrarPersonaje',


    ];

}

 ?>
