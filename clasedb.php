<?php
    class clasedb{
        private $db;
        public function conectar(){
            $this->db= new mysqlo("localhost","root","","programacion") or die ("No se pudo 
                conectar con Mysql");

                return $this->db;
        }
        
    }
    ?>
    