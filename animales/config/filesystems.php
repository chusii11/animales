<?php


/*
|---------------------------------------------------
| Estructura de directorios de la aplicación
|---------------------------------------------------
|
| Se especifican todas las carpetas que componen el proyecto
|
*/

return [

    'HOME' => dirname(__DIR__),
    'APP'  => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'app',
    'CLASSES' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Classes',
    'HTTP' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Http',
    'CONTROLLERS' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Http' . DIRECTORY_SEPARATOR . 'Controllers',
    'MODELS' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Models',
    'HELPERS' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Helpers',
    'CONFIG' =>  dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config',
    'PUBLIC' =>  dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public',
    'CSS' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'css',
    'IMAGES' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'images',
    'DATA' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'images'. DIRECTORY_SEPARATOR . 'data',
    'JS' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'js',
    'RESOURCES' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'resources',
    'VIEWS' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'views',
    'LAYOUTS' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'layouts'

];
