<?php

    class InitAdmin
    {

        public function __construct()
        {
        }

        public function index()
        {
          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/roles/admin/menuLateralProveedores.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
        }
    }
?>