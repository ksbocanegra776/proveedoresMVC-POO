<?php
require_once 'Model/ProveeModel.php';
class ProveedorController
{
    private  $modelProv;
    public function __construct(){
        $this->modelProv = new ProveeModel();
     }

    public function addProveAsesor(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $proveedor = new ProveeModel();
            $proveedor->setRol('Asr');
            $proveedor->setTipoDocProveedor($_POST['tipoDoc']);
            $proveedor->setTypeStatusPro($_POST['typeStatus']);
            $proveedor->setDocumentoProveedor($_POST['documentoPro']);
            $proveedor->setRazonSocial($_POST['razonSocial']);
            $proveedor->setCodProveedor($_POST['codProv']);
            $proveedor->setActiComercialPro($_POST['actiComercial']);
            $proveedor->setLineaTrabajo($_POST['lineaTrabajo']);
            $proveedor->setCity($_POST['city']);
            $proveedor->setDepartamento($_POST['departamento']);
            $proveedor->setAddress($_POST['address']);
            $proveedor->setInfotel($_POST['infotel']);
            $proveedor->setEmail($_POST['emailPro']);
            $proveedor->setTipoDocAsr($_POST['tipoDocAsr']);
            $proveedor->setDocumentoAsesor($_POST['documentoAse']);
            $proveedor->setAsesorName($_POST['asesorName']);
            $proveedor->setAsesorLastName($_POST['asesorLastName']);
            $proveedor->setAsesorCode($_POST['asesorCode']);
            $proveedor->setCorreoAsesor($_POST['correoAsesor']);
            $proveedor->setCelPhone($_POST['celPhone']);
            $proveedor->setDateInit($_POST['dateInit']);
            $proveedor->setTipoConvenio($_POST['tipoConvenio']);
            $proveedor->setTypeStatusAse($_POST['typeStatus']);
            
            if (empty($_POST['tipoConvenio']) || $_POST['tipoConvenio']=='C-N/A'|| empty($_POST['dateInit']) || empty($_POST['celPhone']) || empty($_POST['correoAsesor']) || empty($_POST['asesorLastName']) || empty($_POST['asesorName']) || empty($_POST['documentoAse']) || empty($_POST['tipoDocAsr'])|| $_POST['tipoDocAsr']=='C-N/A' || empty($_POST['emailPro']) || empty($_POST['infotel']) || empty($_POST['address']) || empty($_POST['departamento']) || empty($_POST['city']) || empty($_POST['lineaTrabajo']) || $_POST['lineaTrabajo']=='C-N/A'|| empty($_POST['codProv']) || empty($_POST['razonSocial']) || empty($_POST['documentoPro']) || empty($_POST['typeStatus']) || empty($_POST['tipoDoc'])|| $_POST['tipoDoc']=='C-N/A' || $_POST['actiComercial']=='C-N/A'|| empty($_POST['actiComercial'])) {
                header('Location: ?c=ModulsAdminController&a=creaProvee&resul=empty');
            }elseif(($this->modelProv->registrarProveedor($proveedor))==true){
                  header('Location:?c=ModulsAdminController&a=creaProvee&resul=okeyCreateProvee');
                 }
          
        }
     }
    public function searchProve(){
        if (($_SERVER['REQUEST_METHOD']) == 'GET') {

            require_once 'view/roles/admin/headAdmin.php';
            require_once 'view/roles/admin/menuLateralProveedores.view.php';
            require_once 'view/modules/adminUser/searchProv.view.php';
            require_once 'view/roles/admin/footerAdmin.php';
        }

        if (($_SERVER['REQUEST_METHOD']) == 'POST') {
            $provSearch = new ProveeModel();
            $provSearch->setBuscador($_POST['buscador']);
            $provSearch->setSelecTablaBD($_POST['selecTablaBD']);
            if (($_POST['buscador']) == "") {
                header('Location: ?c=ModulsAdminController&a=searchResponseProv&resul=emptyProveedor');
            }
            $proveedorSearch = $this->modelProv->searcherProv($provSearch);

            if ($proveedorSearch) {

                echo $info = serialize($proveedorSearch);

                echo $proveedorD = urlencode($info);
                header('Location: ?c=ModulsAdminController&a=searchResponseProv&resul=provOk&proveedor=' . $proveedorD);
            } else {
                header('Location: ?c=ModulsAdminController&a=searchResponseProv&resul=error');
            }
        }
     }
    public function listProv(){
        
        $proveAs= $this->modelProv->consulProvAs();
       
        require_once 'view/roles/admin/headAdmin.php';
        require_once 'view/roles/admin/menuLateralProveedores.view.php';
        require_once 'view/modules/adminUser/listProv.view.php';
        require_once 'view/roles/admin/footerAdmin.php'; 
     } 
    public function inacProv(){
        $userData = new ProveeModel();
        $userData->setIdProveedor($_GET['idproveedor']);
        $userData->setTypeStatusPro('In-Act');
        if (!$_GET['idproveedor']) {
            header('Location:?c=ModulsAdminController&a=searchResponseProv&resul=emptyProveedor');
        } else {
            $prov = $this->modelProv->inactiveProveedor($userData);

            if ($prov) {
                header('Location:?c=ModulsAdminController&a=searchResponseProv&resul=okeyProvInactiv');
            } elseif (!$prov) {

                header('Location:?c=ModulsAdminController&a=searchResponseProv&resul=errorProvUpdate');
            }
        }
     }
    public function deleteProv(){
        if(($_SERVER['REQUEST_METHOD'])=='GET'){
            
            $proveedor= $this->modelProv->getByid($_GET['id_proveedor']);
            if($proveedor){
                require_once 'view/roles/admin/headAdmin.php';
                require_once 'view/roles/admin/menuLateralProveedores.view.php';
                require_once 'view/modules/adminUser/deleteProv.view.php';
                require_once 'view/roles/admin/footerAdmin.php ';
            }else{
             header('Location:?c=ModulsAdminController&a=searchResponseProv&resul=emptyProveedor');
            } 
        }
       if(($_SERVER['REQUEST_METHOD'])=='POST'){
            $provData = new ProveeModel();
            $provData->setIdProveedor($_GET['id_proveedor']);
            $rt=$this->modelProv->deleteProvee($provData);
         
             if($rt){ header('Location:?c=ModulsAdminController&a=deleteProv&resul=deleteRegister');}
              header('Location:?c=ProveedorController&a=listProv&resul=errorDeleteRegister');

          } 
        
     }
    public function updateProv(){
        if(($_SERVER['REQUEST_METHOD'])=='GET'){
            $proveedor= $this->modelProv->getByid($_GET['id_proveedor']);
            if($proveedor){
                require_once 'view/roles/admin/headAdmin.php';
                require_once 'view/roles/admin/menuLateralProveedores.view.php';
                require_once 'view/modules/adminUser/proveedorUpdate.view.php';
                require_once 'view/roles/admin/footerAdmin.php';
            }else{
                header('Location:?c=ModulsAdminController&a=searchResponseProv&resul=emptyProveedor');
               } 
        }
        if(($_SERVER['REQUEST_METHOD'])=='POST'){
            $proveedor = new ProveeModel();
            $proveedor->setIdProveedor($_POST['idprov']);
            $proveedor->setCity($_POST['city']);
            $proveedor->setDepartamento($_POST['departamento']);
            $proveedor->setAddress($_POST['direccion']);
            $proveedor->setInfotel($_POST['infotel']);
            $proveedor->setEmail($_POST['emailPro']);
            $proveedor->setTipoConvenio($_POST['tipoConv']);
           
            if (empty($_POST['idprov']) || empty($_POST['emailPro']) || empty($_POST['infotel']) || empty($_POST['direccion']) || empty($_POST['departamento']) || empty($_POST['city']) ||  empty($_POST['tipoConv'])) {
                header('Location:?c=ModulsAdminController&a=searchResponseProv&resul=emptyProveedor');
            } else {

               $this->modelProv->updatePro($proveedor);
               
                    header('Location:?c=ModulsAdminController&a=searchResponseProv&resul=okeyUpdatePro');

            }
        }
     }
}
