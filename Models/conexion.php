<?php
    class Conexion extends PDO{
        private $hostBD='localhost';
        private $nombreBD='portafolio5k';
        private $usuarioBD='root';
        private $passwordBD='';
        public function __construct(){
            try {
                parent::__construct('mysql:host='.$this->hostBD.';dbname='
                .$this->nombreBD.';charset=utf8',$this->usuarioBD,$this->paswordBD,
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)
            );
            } catch (Exception $e) {
                exit;
            }
        }
    }
?>