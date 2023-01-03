<?php
     class Conectar{
        protected $db;

        protected function Conexion(){
            try {
                    $conectar = $this->db = new PDO("mysql:local=localhost;dbname=crud_php","root","");
                    return $conectar;

            } catch (Exception $e) {
                print "Error al conectar con la BD!!! " . $e->getMessage() . "<br/>";
                die();
            }
        }

         public function set_names(){
            return $this->db->query("SET NAMES 'utf8'");
         }
     }
?>