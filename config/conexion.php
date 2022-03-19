<?php
    class conectar{
        protected $dbh;

        protected function conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:host=52.152.236.67;dbname=g1_19","G1_19","rVIsS7DD");
                return $conectar;
            }catch(exception $e){
                print "¡ERROR BD!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

    }
?>