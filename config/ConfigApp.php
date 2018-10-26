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
      ''=> 'controllerVisitante#Home',
      'home'=> 'controllerVisitante#Home',
      'homeUsuario'=> 'PelisController#Home',
      'agregar'=> 'PelisController#InsertPelicula',
      'borrar' => 'PelisController#BorrarPeliculas',
      'mostrarEditar' => 'PelisController#EditarPelicula',
      'Editado' => 'PelisController#guardarEditarPeliculas',
      'tabla' => 'PelisController#Home',
      'verPersonaje' => 'controllerVisitante#mostrarpersonajes',
      'tablaVisitante' => 'controllerVisitante#Home',
      'mostrarUsuarios'=> 'UsuarioController#MostrarUsuario',
      'login'=> 'LoginController#login',
      'logout'=> 'LoginController#logout',
      'verificarLogin' => 'LoginController#verificarLogin'


    ];

}

 ?>
