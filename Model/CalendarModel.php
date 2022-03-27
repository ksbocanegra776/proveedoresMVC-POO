<?php

class CalendarModel
{
 
#variable
    private $idEvent;
    private $codEvent;
    private $eventMot;
    private $proveedorCod;
    private $dateEvent;
    private $statusEvent;
    private $colorPriority;
#end
#constructor
    private  $conn;
    public function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this, $f= '__construct' . $i)) {
            call_user_func_array(array($this, $f), $a);
        }
    }
    function __construct0()
    {
        try {
            $this->conn = ConexionDB::conexion();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function __construct6($idEvent,$codEvent, $eventMot, $proveedorCod, $dateEvent, $statusEvent, $colorPriority)
    {
        $this->codEvent = $idEvent;
        $this->codEvent = $codEvent;
        $this->eventMot = $eventMot;
        $this->proveedorCod = $proveedorCod;
        $this->dateEvent = $dateEvent;
        $this->statusEvent = $statusEvent;
        $this->colorPriority = $colorPriority;
      
    }
#endconstructor 
#section
    public function getIdEvent(){return $this->idEvent;}
    public function setIdEvent($idEvent){return $this->idEvent = $idEvent;}
    public function getCodEvent(){return $this->codEvent;}
    public function setCodEvent($codEvent){return $this->codEvent = $codEvent;}
    public function getEventMot(){return $this->eventMot;}
    public function setEventMot($eventMot){return $this->eventMot = $eventMot;}
    public function getProveedorCod(){return $this->proveedorCod;}
    public function setproveedorCod($proveedorCod){return $this->proveedorCod = $proveedorCod;}
    public function getDateEvent(){return $this->dateEvent;}
    public function setDateEvent($dateEvent){return $this->dateEvent = $dateEvent;}
    public function getTypeStatus(){return $this->statusEvent;}
    public function setTypeStatus($statusEvent){return $this->statusEvent = $statusEvent;}
    public function getColorPriority(){return $this->colorPriority;}
    public function setColorPriority($colorPriority){return $this->colorPriority = $colorPriority;}
    
#endsection
    public function consulProv(){

        $ProvList = [];
        try {
            $bdhUser = $this->conn->query('SELECT * from proveedores where cod_estado_proveedor="Act"');
            foreach($bdhUser->fetchAll() as $prov) {
                $ProvList[] = new CalendarModel(
                    $prov['id_proveedores'],
                    $prov['cod_proveedor'],        
                    $prov['razon_social']           
                );
            }
            var_dump($ProvList);
            return $ProvList;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

/*     protected function alertData($dataAg){
        echo "<script> swal({
            title: '¡ERROR!',
            text: 'Todos los campos deben ser diligenciados',
            type: 'warning',
          }).then(function () {
            window.location.href = ?c=ModulsAdminController&a=agenda;
          };</script>";


    }
*/
    public function regisAgen($dataAg){
      
        try {
                 $codEvent = $dataAg->getCodEvent();
                 $eventMot = $dataAg->getEventMot();
                 $proveedorCod = $dataAg->getProveedorCod();
                 $dateEvent = $dataAg->getDateEvent();
                 $statusEvent = $dataAg->getTypeStatus();
                 $colorPriority = $dataAg->getColorPriority();
            try {

                $dataSave = ("INSERT INTO `agendamiento`(`id_agendamiento`, `cod_agendamiento`, `fecha_agendamiento`, `motivo_agendamiento`, `proveedor_agendado`, `cod_estado`, `priority`) VALUES (null,'".$codEvent."','".$dateEvent."','".$eventMot."','".$proveedorCod."','".$statusEvent."','".$colorPriority."')");
                
                $result= $this->conn->query($dataSave);
                if ($result) {
                    return $result;
                } else {
                    return false;
                }
            
            } catch (Exception $e) {
                return false;
            }
        } catch (Exception $e) {
            die($e->getMessage());
        };
    }

    public function listAgen(){
        $query=$this->conn->query("SELECT `id_agendamiento`, `cod_agendamiento`, `fecha_agendamiento` As start, `motivo_agendamiento`, `proveedor_agendado`, `cod_estado`, `priority` As color,event_type.nameEvent  As title from agendamiento INNER JOIN event_type WHERE agendamiento.motivo_agendamiento=event_type.cod_typeEvent");
        $resul=$query->fetchAll();
        return $resul;
        
    }
    public function updateAgen($dataAg)
    {
        try {
            $codEvent = $dataAg->getCodEvent();
            $eventMot = $dataAg->getEventMot();
            $proveedorCod = $dataAg->getProveedorCod();
            $dateEvent = $dataAg->getDateEvent();
            $statusEvent = $dataAg->getTypeStatus();
            $colorPriority = $dataAg->getColorPriority();
            $idEvent= $dataAg->getIdEvent();
            try {

                $dataSave = ("UPDATE  `agendamiento` SET  `cod_agendamiento`='" . $codEvent . "' ,`fecha_agendamiento`='" . $dateEvent . "', `motivo_agendamiento`='" . $eventMot . "',`cod_estado`='" . $statusEvent . ", `priority`='" . $colorPriority . "'  WHERE `id_agendamiento`= '" . $idEvent . "' ");

                $result = $this->conn->query($dataSave);
                if ($result) {
                    return $result;
                } else {
                    return false;
                }
            } catch (Exception $e) {
                return false;
            }
        } catch (Exception $e) {
            die($e->getMessage());
        };
    }



    
}