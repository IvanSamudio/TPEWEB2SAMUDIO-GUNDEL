<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'PelisController#Home',
      'home'=> 'PelisController#Home',
      'agregar'=> 'PelisController#InsertPelicula',
      'borrar' => 'PelisController#BorrarPeliculas',
      'mostrarEditar' => 'PelisController#EditarPelicula',
      'editar' => 'PelisController#EditarPeliculas',
      'tabla' => 'PelisController#Home',
      'mostrarUsuarios'=> 'UsuarioController#MostrarUsuario',
      'login'=> 'LoginController#login',
      'logout'=> 'LoginController#logout',
      'verificarLogin' => 'LoginController#verificarLogin'


    ];

}

 ?>
