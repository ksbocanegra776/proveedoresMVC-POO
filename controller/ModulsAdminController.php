<?php

    class ModulsAdminController{
      
        public function creaProvee(){
          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/roles/admin/menuLateralProveedores.view.php';
          require_once 'view/modules/adminUser/registroProveedor.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
         
        }
        public function searchResponseProv(){
          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/roles/admin/menuLateralProveedores.view.php';
          require_once 'view/modules/adminUser/searchProv.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
         
        }
        public function searcher(){
          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/modules/adminUser/searcher.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
         
        }
        public function listProv(){

          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/roles/admin/menuLateralProveedores.view.php';
          require_once 'view/modules/adminUser/listProv.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
        }
       
        public function updateProvee(){
          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/modules/adminUser/proveedorUpdate.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
        }
        public function deleteProv(){
          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/roles/admin/menuLateralProveedores.view.php';
          require_once 'view/modules/adminUser/deleteProv.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
        }
        public function deleteAsesor(){
          require_once 'view/roles/admin/headAdmin.php';
          require_once 'view/roles/admin/menuLateralProveedores.view.php';
          require_once 'view/modules/adminUser/deleteAsr.view.php';
          require_once 'view/roles/admin/footerAdmin.php';
        }
        public function creaAsesorNew(){
          require_once 'view/roles/admin/headAdmin.php';
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
          require_once 'view/roles/admin/Agendamiento/headAdminAgen.php';
          require_once 'view/modules/adminUser/agendamientoProveedor.view.php';
          require_once 'view/roles/admin/Agendamiento/footerAdminAgen.php';
        }
    
    }
?>