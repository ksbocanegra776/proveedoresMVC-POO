<?php   
    
    require_once 'Model/conexionDB.php';
    conexionDB::conexion();
        $controller = 'LandingPageWeb';
    if (!isset($_REQUEST['c'])) {
               require_once 'controller/'. $controller .'.php';
        $controller = new $controller;
        $controller->index();
    }else{
        $controller= $_REQUEST['c'];
        require_once 'controller/' . $controller .'.php';
        $controller = new $controller;
        $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index';
        call_user_func(array($controller,$action));
    }
 ?>
