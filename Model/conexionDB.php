<?php
$databaseHost='localhost';
$databaseName='proveedores';
$databaseUsername='root';
$databasePassword='';
try{
    $dbConex= new PDO ("mysql:host={$databaseHost};dbname={$databaseName}",$databaseUsername,$databasePassword);
    $dbConex->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
}catch(PDOException $e){
echo $e->getMessage();
}
?>
