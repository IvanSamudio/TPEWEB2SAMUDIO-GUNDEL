<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'comentarios#GET'=> 'ApiController#GetComentarios',
      'comentarios#DELETE'=> 'ApiController#DeleteComentarios',
      'comentarios#POST'=> 'ApiController#InsertComentarios',
      'comentarios#PUT'=> 'ApiController#UpdateComentarios',
    ];

}

 ?>
