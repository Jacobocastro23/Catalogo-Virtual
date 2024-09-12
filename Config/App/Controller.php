<?php
    class Controller{

        public function __construct(){
            $this->views = new Views(); //views
            $this->cargarModel();
        }

        public function cargarModel(){
            $model = get_class($this)."Model"; //Obtener el nombre de la clase de cada controlador y concatenarlo para que tenga el nombre de todos los modelos
            $ruta = "Models/".$model.".php";    //Especificar la ruta del modelo
            //Verificar si existe ese archivo
            if(file_exists($ruta)){
                require_once $ruta; //Si existe, lo requerimos.
                $this->model = new $model();//Hacer una instancia

            }
        }
    }
?>