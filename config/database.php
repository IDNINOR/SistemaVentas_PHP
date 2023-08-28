<?php

require_once('c://xampp/htdocs/Web_Ventas/config/data.php');


class Database{

    private $user = "";
    private $password = "";
    private $nameBD = "";
    private $server = "";

    public function __construct(){
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->nameBD = constant('NAMEDB');
        $this->server = constant('SERVER');

    }

    public function getConexion(){
        try {
            $PDO = new PDO("mysql:host=".$this->server.";dbname=".$this->nameBD,$this->user,$this->password);
            if($PDO != null){
                echo "Existe Conexión";
                return $PDO;
            }
        } catch (Exception $ex) {
            echo "No hay Conexion";
            echo $ex->getMessage();
        }
    }

}

