<?php

namespace App;

class Autoloader{

    static function register(){

        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }

    static function autoload($class){
        
        //on retire App
        $class = str_replace(__NAMESPACE__ . '\\', '', $class);
        //on remplace les \ par des /
        $class = str_replace('\\','/',$class);

        //le dossier dans lequel se trouve l'autoloader
        //require_once __DIR__ . '/' . $class . '.php';

        $file = __DIR__ . '/' . $class . '.php';

        if(file_exists($file)) require_once $file;
    }
}

