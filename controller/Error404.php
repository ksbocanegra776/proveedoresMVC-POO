<?php

    class Error404{

        public function __construct()
        {    
        }
        public function index(){
          require_once 'view/roles/admin/headAdmin.php';
           require_once 'view/modules/others/error404.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
            
        }
    }
?>