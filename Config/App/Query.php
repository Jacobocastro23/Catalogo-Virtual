<?php 
    class Query extends Conexion{
        private $pdo, $con, $sql, $datos, $ultID;

        public function __construct(){
            $this->pdo = new Conexion();        //Hacer una instancia de la clase Conexion
            $this->con = $this->pdo->conect();  //La instancia se la pasamos a la variable con y accedemos a su método conect
            //$this->lastttid = $this->pdo->lastID();
        }

        public function select(string $sql){
            
            $this->sql = $sql; //Acceder a la variable sql y pasar lo que tiene el parámetro
            $resul = $this->con->prepare($this->sql);//Acceder a la conexion y preparar una consulta.
            $resul->execute(); //ejecutar la consulta
            $data = $resul->fetch(PDO::FETCH_ASSOC); //Almacenar todo el resultado de un solo registro.
            return $data;
        }

        public function selectAll(string $sql){
            
            $this->sql = $sql; //Acceder a la variable sql y pasar lo que tiene el parámetro
            $resul = $this->con->prepare($this->sql);//Acceder a la conexion y preparar una consulta.
            $resul->execute(); //ejecutar la consulta
            $data = $resul->fetchAll(PDO::FETCH_ASSOC); //Almacenar todo el resultado de todos los registros.//FetchAll para traer todos
            return $data;
        }

        public function save(string $sql, array $datos){
            $this->sql = $sql;
            $this->datos = $datos;
            $insert = $this->con->prepare($this->sql);
            $data = $insert->execute($this->datos);

            /*if($data){
                $res = 1;
            }else{
                $res = 0;
            }*/
            $ultID = $this->con->lastInsertId();
            return $ultID;
        }

        public function saveA(string $sql, array $datos){
            $this->sql = $sql;
            $this->datos = $datos; //almacenamos ek arreglo datos
            $insert = $this->con->prepare($this->sql); //Acceder a la conexion para preparar la inserción y lo almacenamos en variable insert
            $data = $insert->execute($this->datos); //Ejecutamos y enviamos el arreglo y todo lo almacenamos en una variable

            //Verificar si se ejecutó sin problemas
            if($data){
                $res = 1;
            }else{
                $res = 0;
            }
            return $res;
        }
    
    }
?>