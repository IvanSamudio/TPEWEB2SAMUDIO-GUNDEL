<?php

define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'controllerVisitante#Home',
      'home'=> 'controllerVisitante#Home',
      'verPersonaje' => 'controllerVisitante#mostrarpersonajes',
      'home'=> 'PelisController#Home',
      'agregar'=> 'PelisController#InsertPelicula',
      'borrar' => 'PelisController#BorrarPeliculas',
      'mostrarEditar' => 'PelisController#EditarPelicula',
      'editar' => 'PelisController#EditarPeliculas',
      'tabla' => 'PelisController#Home',
      'tablaVisitante' => 'controllerVisitante#Home',
      'loginPagina'=> 'LoginController#login',
      'mostrarUsuarios'=> 'UsuarioController#MostrarUsuario',
      'login'=> 'LoginController#login',
      'logout'=> 'LoginController#logout',
      'verificarLogin' => 'LoginController#verificarLogin'


    ];

}

 ?>
