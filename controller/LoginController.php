<?php

    class LoginController{

        public function __construct()
        {    
        }

        public function admin(){
            require_once 'view/roles/admin/headAdmin.php';
            require_once 'view/roles/admin/menuLateralProveedores.view.php';
            require_once 'view/roles/admin/footerAdmin.php';
        }
    }
?>