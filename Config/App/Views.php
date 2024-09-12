<?php
    class Views{
        public function getView($controlador, $vista, $data=""){
            $controlador = get_class($controlador);//Obtener el nombre de la clase
            
            //Verificar si el controlador es igual a Home
            if($controlador == "Home"){
                $vista = "Views/".$vista.".php";//Si si es igual, le indicamos a que vista va a acceder
            }else{
                $vista = "Views/".$controlador."/".$vista.".php";//Si es diferente
            }

            //Requerir esa vista
            require $vista;
        }
    }
?>