<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'PelisController#Home',
      'home'=> 'HomeController#Home',
      'agregar'=> 'PelisController#InsertPelicula',
      'borrar' => 'PelisController#BorrarPeliculas',
      'tabla' => 'PelisController#Home',


    ];

}

 ?>
