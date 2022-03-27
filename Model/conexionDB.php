<?php

class ConexionDB {

    public static function conexion(){

            $conn= new PDO('mysql:bdvrptxv379z0mfxlqfj-mysql.services.clever-cloud.com;dbname=bdvrptxv379z0mfxlqfj;charset=utf8','uho8m4rm5iszpxmf','Z3RlOP4mnPM7fdKltLZO');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;
           
    }

}

?>
