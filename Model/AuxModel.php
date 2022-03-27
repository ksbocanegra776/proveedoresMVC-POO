<?php

class AuxModel
{
#selectionVariables
    private $idprov;
    private $codProv;
    private $razonSocial;
    private $actComercial;
    private $asrComercial;
    private $telAsesor;
    private $commitProv;
    private $notificationProv;
#end
#constructores
    private  $conn;
    public function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this, $f = '__construct' . $i)) {
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

#endCosnstructor
#method
 public function getIdProveedor(){ return $this->idprov;}
 public function setIdProveedor($idprov){return $this->idprov = $idprov;}
 public function getCodProv(){ return $this->codProv;}
 public function setCodProv($codProv){return $this->codProv = $codProv;}
 public function getRazonSocial(){ return $this->razonSocial;}
 public function setRazonSocial($razonSocial){return $this->razonSocial = $razonSocial;}
 public function getActComercial(){ return $this->actComercial;}
 public function setactComercial($actComercial){return $this->actComercial = $actComercial;}
 public function getAsrComercial(){ return $this->asrComercial;}
 public function setAsrComercial($asrComercial){return $this->asrComercial = $asrComercial;}
 public function getTelAsesor(){ return $this->telAsesor;}
 public function setTelAsesor($telAsesor){return $this->telAsesor = $telAsesor;}
 public function getCommitProv(){ return $this->commitProv;}
 public function setCommitProv($commitProv){return $this->commitProv = $commitProv;}
 public function getNotificationProv(){ return $this->notificationProv;}
 public function getBuscador(){ return $this->buscador;}
 public function setBuscador($buscador){return $this->buscador = $buscador;}
 public function getSelecTablaBD(){return $this->selecTablaBD;}
 public function setSelecTablaBD($selecTablaBD){return $this->selecTablaBD = $selecTablaBD;}
  
#endMethod

     public function searchAsrProv($provSearchAsr)
    {
       try {
           try {
            $proVer=[];
            switch ($provSearchAsr->getSelecTablaBD()) {
                case 'R-Soc':
                    $bdhUserP = $this->conn->prepare('SELECT * from proveedores, usuarios INNER JOIN asesor_comentario ON proveedores.cod_asesor=asesor_comentario.cod_asesor WHERE razon_social=:buscador');
                    break;
                case 'N-Doc':
                    $bdhUserP = $this->conn->prepare('SELECT * from proveedores, usuarios INNER JOIN asesor_comentario ON proveedores.cod_asesor=asesor_comentario.cod_asesor WHERE numero_documento_prov=:buscador');
                    break;
                case 'N-Ema':
                    $bdhUserP = $this->conn->prepare('SELECT * from proveedores, usuarios INNER JOIN asesor_comentario ON proveedores.cod_asesor=asesor_comentario.cod_asesor WHERE emailPro=:buscador');
                   
                    break;
                case 'C-Pro':
                    $bdhUserP = $this->conn->prepare('SELECT * from proveedores, usuarios INNER JOIN asesor_comentario ON proveedores.cod_asesor=asesor_comentario.cod_asesor  WHERE cod_proveedor=:buscador');
                    
                    break;
            }
            $bdhUserP->execute(array(':buscador'=>$provSearchAsr->getBuscador()));
            $data = $bdhUserP->fetch(PDO::FETCH_ASSOC);
            return $data;
            if($data==false){
                return false;
            }elseif($data==true){
            
                foreach($data as $proRequest){

                    $proVer[]=new ProveeModel( 
                                $proRequest['id_proveedores'],
                                $proRequest['cod_proveedor'],
                                $proRequest['cod_tipo_documento_prov'],
                                $proRequest['numero_documento_prov'],
                                $proRequest['razon_social'],
                                $proRequest['linea_provista'],
                                $proRequest['telefonoProv'],
                                $proRequest['emailPro'],
                                $proRequest['departamento'],
                                $proRequest['ciudad'],
                                $proRequest['direccion'],
                                $proRequest['cod_proveedor'],
                                $proRequest['cod_estado_proveedor'],
                                $proRequest['cod_asesor'],
                                $proRequest['cod_actividad_economica'],
                                $proRequest['id_convenio'],
                                $proRequest['fechaInicio']
                            
                            );
                }
                return $proRequest;
            }  
           }catch(Exception $e){
            return false;
            }
        
        } catch (Exception $e) {
            die($e->getMessage());
        };
    }


}