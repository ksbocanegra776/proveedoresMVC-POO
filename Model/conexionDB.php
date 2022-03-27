<?php

class ConexionDB {

    public static function conexion(){

            $conn= new PDO('mysql:host=localhost;dbname=proveedores;charset=utf8','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;
           
    }

}

?>
