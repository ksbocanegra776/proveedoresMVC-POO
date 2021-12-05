<?php

    class ModulsAdminController{

        public function __construct()
        {    
        }

        public function creaProvee(){
          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/roles/admin/menuLateralProveedores.view.php';
          require_once 'view/modules/adminUser/registroProveedor.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
         
        }
        public function searchProv(){
          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/roles/admin/menuLateralProveedores.view.php';
          require_once 'view/modules/adminUser/buscarProveedor.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
         
        }
        
        public function updateProvee(){
          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/roles/admin/menuLateralProveedores.view.php';
          require_once 'view/modules/adminUser/proveedorUpdate.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
        }
        public function creaAsesor(){
          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/roles/admin/menuLateralProveedores.view.php';
          require_once 'view/modules/adminUser/createAsesorNew.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
        }
        public function viewAsesor(){
          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/roles/admin/menuLateralProveedores.view.php';
          require_once 'view/modules/adminUser/dataAsesor.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
         
        }
        public function updateAsesor(){
          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/roles/admin/menuLateralProveedores.view.php';
          require_once 'view/modules/adminUser/asesorUpdate.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
         
        }
        public function users(){
          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/roles/admin/menuLateralProveedores.view.php';
          require_once 'view/modules/adminUser/usuarios.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
        }
        public function usersUpdate(){
          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/roles/admin/menuLateralProveedores.view.php';
          require_once 'view/modules/adminUser/userUpdate.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
        }
        public function deleteUser(){
          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/roles/admin/menuLateralProveedores.view.php';
          require_once 'view/modules/adminUser/deleteUser.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
        }
        public function commit(){
          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/roles/admin/menuLateralProveedores.view.php';
          require_once 'view/modules/adminUser/comentarioProveedor.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
        }
      
        public function agenda(){
          require_once 'view/modules/adminUser/agendamientoProveedor.view.php';
        }
    
    }
?>