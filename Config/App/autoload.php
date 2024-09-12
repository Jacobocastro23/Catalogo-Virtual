<?php 

    spl_autoload_register(function($class){//Ejecutar una funcion, y como parametro una variable con el nombre class
        
        //verificar si existe ese archivo.
        if(file_exists("Config/App/".$class.".php")){
            require_once "Config/App/" .$class . ".php"; //Si existe ese archivo, vamos a requerirlo
        }
        
    })
?>