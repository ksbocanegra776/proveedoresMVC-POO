<?php
require_once 'Model/AsesorModel.php';
class AsesorController
{
    private  $modeloAsesor;
    public function __construct()
    {
        $this->modeloAsesor = new AsesorModel();
    }

    public function searchAsesor()
    {

        $asesor = $this->modeloAsesor->searchAsr();

        if ($asesor) {

            require_once 'view/roles/admin/headAdmin.php';
            require_once 'view/roles/admin/menuLateralProveedores.view.php';
            require_once 'view/modules/adminUser/dataAsesor.view.php';
            require_once 'view/roles/admin/footerAdmin.php';
        } else {
            header('Location: ?c=ModulsAdminController&a=viewAsesor&resul=error');
        }
    }
    public function updateAsesor()
    {
        if (($_SERVER['REQUEST_METHOD']) == 'GET') {
            $asr = $this->modeloAsesor->getByid($_GET['idAsesor']);
            require_once 'view/roles/admin/headAdmin.php';
            require_once 'view/roles/admin/menuLateralProveedores.view.php';
            require_once 'view/modules/adminUser/asesorUpdate.view.php';
            require_once 'view/roles/admin/footerAdmin.php';
        }
        if (($_SERVER['REQUEST_METHOD']) == 'POST') {
            $asrData = new AsesorModel();
            $asrData->setTipoDoc($_POST['tipoDoc']);
            $asrData->setIdAsesor($_POST['idAsesor']);
            $asrData->setNumdocumento($_POST['numDocumento']);
            $asrData->setEmailAsesor($_POST['emailAsr']);
            $asrData->setNombreAsesor($_POST['nombre']);
            $asrData->setApellidoAsesor($_POST['apellido']);
            $asrData->setCelAsesor($_POST['telefono']);
            
            if (empty($_POST['numDocumento']) || empty($_POST['nombre']) || empty($_POST['apellido']) ||  empty($_POST['emailAsr']) || empty($_POST['telefono']) || empty($_POST['idAsesor']) || empty($_POST['tipoDoc'])) {
                header('Location:?c=AsesorController&a=searchAsesor&resul=empty');
            } else {
                $rt=$this->modeloAsesor->updateAsr($asrData);
                header('Location:?c=ModulsAdminController&a=listProv&resul=okeyUpdateAs');
            } 
        }
    }
    public function deleteAsesor()
    {
        if(($_SERVER['REQUEST_METHOD'])=='GET'){
            $asr= $this->modeloAsesor->getByid($_GET['idAsesor']);
         
            require_once 'view/roles/admin/headAdmin.php';
            require_once 'view/roles/admin/menuLateralProveedores.view.php';
            require_once 'view/modules/adminUser/deleteAsr.view.php';
            require_once 'view/roles/admin/footerAdmin.php';
        }
        if(($_SERVER['REQUEST_METHOD'])=='POST'){
            $userData = new AsesorModel();
            $userData->setIdAsesor($_GET['idAsesor']);
           $rt= $this->modeloAsesor->deleteAsr($userData);
           if($rt){ header('Location:?c=ModulsAdminController&a=viewAsesor&resul=deleteRegister');}
            header('Location:?c=ModulsAdminController&a=viewAsesor&resul=errorDeleteRegister');
        } 
    }
    public function changeAsrNew(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $asrNew = new AsesorModel();
            $asrNew->setIdProv($_POST['idProveedor']);
            $asrNew->setCodAsesor($_POST['codAsesor']);
            $asrNew->setTipoDoc($_POST['tipoDoc']);
            $asrNew->setNumDocumento($_POST['documento']);
            $asrNew->setNombreAsesor($_POST['asesorN']);
            $asrNew->setApellidoAsesor($_POST['asesorA']);
            $asrNew->setEmailAsesor($_POST['correo']);
            $asrNew->setStatusAsesor($_POST['status']);
            $asrNew->setCelAsesor($_POST['telefonoAsesor']);
            $asrNew->setRolAsesor('Asr');
            if (empty($_POST['idProveedor']) || empty($_POST['codAsesor']) || empty($_POST['correo']) || empty($_POST['tipoDoc']) || empty($_POST['documento']) || empty($_POST['asesorN']) || empty($_POST['asesorA']) || empty($_POST['status']) || empty($_POST['telefonoAsesor'])) {
                header('Location: ?c=ModulsAdminController&a=searchResponseProv&resul=emptyNewAs');
            } else {
                $rt=$this->modeloAsesor->chanceProvAse($asrNew);
                var_dump($rt);
               /*  if($rt){
                 header('Location: ?c=ModulsAdminController&a=searchResponseProv&resul=okeyNewAs');
                }else{
                 header('Location: ?c=ModulsAdminController&a=searchResponseProv&resul=errorUpdateAs');
                } */
            }
        }
    }
}
