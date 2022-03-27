<?php
require_once 'Model/AuxModel.php';
class AuxiliarController
{
    private  $modeloAux;
    public function __construct()
    {
        $this->modeloAux = new AuxModel();
    }
    public function searchProAsr(){
        if (($_SERVER['REQUEST_METHOD']) == 'GET') {

            require_once 'view/roles/userAux/headAux.php';
            require_once 'view/modules/auxUser/auxiliar.view.php';
        }
        if (($_SERVER['REQUEST_METHOD']) == 'POST') {
            $provSearch = new AuxModel();
            $provSearch->setBuscador($_POST['buscador']);
            $provSearch->setSelecTablaBD($_POST['selecTablaBD']);
            if (($_POST['buscador']) == "") {
                header('Location: ?c=InitAux&a=index&resul=emptyProveedor');
            }elseif(($_POST['selecTablaBD']) == "D-N/A"){
                header('Location: ?c=InitAux&a=index&resul=errorSearch');
            }
            
            $provSearchAsr = $this->modeloAux->searchAsrProv($provSearchAsr);
            
            if ($provSearchAsr) {

                echo $info = serialize($provSearchAsr);

                echo $provD = urlencode($info);
                header('Location: ?c=InitAux&a=index&proveedor=' . $provD);
            } else {
                header('Location: ?c=InitAux&a=index&resul=error');
            }
        }

    }
}