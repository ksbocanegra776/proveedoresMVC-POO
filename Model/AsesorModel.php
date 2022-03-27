<?php

class AsesorModel
{
#atributos
    private $idAsesor;
    private $nombreAsesor;
    private $apellidoAsesor;
    private $tipoDoc;
    private $numDocumento;
    private $email;
    private $celAsesor;
    private $statusAsesor;
    private $rolAsesor;
    private $codAsesor;
    private $idProv;
#endAtributos
#construct
    private $conn;
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
#endConstruct
#metodosGetSet
    public function getIdAsesor()
    {
        return $this->idAsesor;
    }
    public function setIdAsesor($idAsesor)
    {
        return $this->idAsesor = $idAsesor;
    }
    public function getNombreAsesor()
    {
        return $this->nombreAsesor;
    }
    public function setNombreAsesor($nombreAsesor)
    {
        return $this->nombreAsesor = $nombreAsesor;
    }
    public function getApellidoAsesor()
    {
        return $this->apellidoAsesor;
    }
    public function setApellidoAsesor($apellidoAsesor)
    {
        return $this->apellidoAsesor = $apellidoAsesor;
    }
    public function getCelAsesor()
    {
        return $this->celAsesor;
    }
    public function setCelAsesor($celAsesor)
    {
        return $this->celAsesor = $celAsesor;
    }
    public function getNumDocumento()
    {
        return $this->numDocumento;
    }
    public function setNumDocumento($numDocumento)
    {
        return $this->numDocumento = $numDocumento;
    }
    public function getEmailAsesor()
    {
        return $this->email;
    }
    public function setEmailAsesor($email)
    {
        return $this->email = $email;
    }
    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }
    public function setTipoDoc($tipoDoc)
    {
        return $this->tipoDoc = $tipoDoc;
    }
    public function getStatusAsesor()
    {
        return $this->statusAsesor;
    }
    public function setStatusAsesor($statusAsesor)
    {
        return $this->statusAsesor = $statusAsesor;
    }
    public function getRolAsesor()
    {
        return $this->rolAsesor;
    }
    public function setRolAsesor($rolAsesor)
    {
        return $this->rolAsesor = $rolAsesor;
    }
    public function getCodAsesor()
    {
        return $this->codAsesor;
    }
    public function setCodAsesor($codAsesor)
    {
        return $this->codAsesor = $codAsesor;
    }
    public function getIdProv()
    {
        return $this->idProv;
    }
    public function setIdProv($idProv)
    {
        return $this->idProv = $idProv;
    }
#endMethods
#funciones
public function getByid($idAsesor){
    try {
       
        $sql='SELECT * FROM usuarios WHERE id_usuario=:idAsesor';
        $dbh= $this->conn->prepare($sql);
        $dbh->bindValue('idAsesor',$idAsesor);
        $dbh->execute();
        $searchDB= $dbh->fetch(PDO::FETCH_ASSOC);
        return $searchDB;
                
    }catch (Exception $e) {
        die($e->getMessage());
    }

 } 
public function searchAsr(){

        $userList = [];
        try {
            $bdhUser = $this->conn->query('SELECT usuarios.*, proveedores.* FROM asesor_comercial JOIN proveedores ON proveedores.cod_asesor = asesor_comercial.cod_asesor JOIN usuarios ON usuarios.numero_documento=asesor_comercial.doc_asesor where cod_estado_usuario!="In-Ac"');
            $userList = $bdhUser->fetchAll(PDO::FETCH_ASSOC);
            
            return $userList;
        } catch (Exception $e) {
            die($e->getMessage());
        }
      }
public function updateAsr($asrData){
        try {
                $sqlUpdate=$this->conn->prepare("UPDATE `usuarios` SET `cod_tipo_documento_usuario`=:tipoDoc,`nombre`=:nombre,`apellido`=:apellido,`email`=:emailAsr,`telefono`=:telefono where `id_usuario`=:idAsesor");
                    
                    $sqlUpdate->execute(array(
                        ':idAsesor'=> $asrData->getIdAsesor(),
                        ':tipoDoc'=> $asrData->getTipoDoc(),
                        ':nombre'=> $asrData->getNombreAsesor(),
                        ':apellido'=> $asrData->getApellidoAsesor(),
                        ':emailAsr'=> $asrData->getEmailAsesor(),
                        ':telefono'=> $asrData->getCelAsesor(),
                    ));
                 return $sqlUpdate;
           
        } catch (Exception $e) {
            die($e->getMessage());
        };
     }
public function deleteAsr($userData){
    try {
        try {
            $sql = $this->conn->prepare("DELETE FROM `usuarios` WHERE `id_usuario`=:idAsesor");
            $sql->execute(
                array(
                    ':idAsesor' => $userData->getIdAsesor(),
                )
            );
            if( $sql->error){
                return false;}
        } catch (Exception $e) {
            return false;
        }
    } catch (Exception $e) {
        die($e->getMessage());
    };
 }

public function chanceProvAse($userData){
        try {
            $searchData= $this->conn->prepare('SELECT usuarios.*, proveedores.* FROM asesor_comercial JOIN proveedores ON proveedores.cod_asesor = asesor_comercial.cod_asesor JOIN usuarios ON usuarios.numero_documento=asesor_comercial.doc_asesor where proveedores.id_proveedores=:idProveedor');
            $searchData->execute(array(
                ':idProveedor'=> $userData->getIdProv()
            ));
            $searchData->fetchAll(PDO::FETCH_ASSOC);

          /*   if ($searchData){

                

            } */

















           /*  $searchData->fetchAll(PDO::FETCH_ASSOC);
            if($searchData!=0){
                $searchData2=$this->conn->prepare ('SELECT usuarios.cod_usuario FROM asesor_comercial JOIN proveedores ON proveedores.cod_asesor = asesor_comercial.cod_asesor JOIN usuarios ON usuarios.numero_documento=asesor_comercial.doc_asesor WHERE proveedores.id_proveedores=:idProveedor ');
                $searchData2->fetchAll(PDO::FETCH_ASSOC);
                if($searchData){

                     $queryA = $this->conn->prepare('UPDATE `usuarios` set `cod_estado_usuario`="In-Ac" WHERE usuarios.cod_estado_usuario=$searchData and usuarios.cod_usuario=$searchData2');
           
                     $queryA->execute(array(':idProveedor'=> $userData->getIdProv()));
                }

           } */
           
            /* $queryA->fetchAll(PDO::FETCH_ASSOC);
           if ($queryA > 0) {
                $newAsr = 'INSERT INTO `usuarios` (`id_usuario`, `cod_rol_usuario`, `cod_tipo_documento_usuario`, `cod_horario_user`, `cod_estado_usuario`, `numero_documento`, `nombre`, `apellido`,`cod_usuario`, `email`, `telefono`, `contrasenia`, `question1`, `question2`, `question3`, `termino_condiciones`, `tratamiento_datos`)values(null,:rol,:tipoDocAsr,"h-N/A",:statusAse,:documentoAse,:asesorName,:asesorLastName,:codAsesor,:correoAsesor,:celPhone,"---","---","---","---",1,1)';
                $queryU = $this->conn->prepare($newAsr);
                $queryU->bindValue('rol', $userData->setRolAsesor());
                $queryU->bindValue('tipoDocAsr', $userData->getTipoDoc());
                $queryU->bindValue('statusAse', $userData->getStatusAsesor());
                $queryU->bindValue('documentoAse', $userData->getNumDocumento());
                $queryU->bindValue('asesorName', $userData->getNombreAsesor());
                $queryU->bindValue('asesorLastName', $userData->getApellidoAsesor());
                $queryU->bindValue('codAsesor', $userData->getCodAsesor());
                $queryU->bindValue('correoAsesor', $userData->getEmailAsesor());
                $queryU->bindValue('celPhone', $userData->setCelAsesor());

                $queryU->execute();

                $sqlTablaAsesor = "UPDATE `asesor_comercial`,`proveesores` SET `asesor_comercial`.`doc_asesor`=:documentoAse,`asesor_comercial`.`cod_asesor`=:asesorCode,`proveedores`.`cod_asesor`=:asesorCode WHERE`cod_proveedor`=(SELECT proveedores.cod_proveedor FROM proveedores JOIN asesor_comercial ON asesor_comercial.doc_prov = proveedores.numero_documento_prov WHERE proveedores.id_proveedores=:idProveedor) ";

                $queryA = $this->conn->prepare($sqlTablaAsesor);
                $queryA->bindparam(':idProveedor', $userData->getIdProv());
                $queryA->bindValue('documentoAse', $userData->getDocumentoAsesor());
                $queryA->bindValue('asesorCode', $userData->getAsesorCode());
                

                $queryA->execute(); 
            }*/

        } catch (Exception $e) {
            die($e->getMessage());
        }
       



  /*   $dbh= $this->conn->prepare("UPDATE asesor_comercial  as com INNER JOIN proveedores as pro ON com.cod_asesor=pro.cod_asesor SET asesor_comercial.cod_asesor=:codAsr SET pro.cod_asesor=:codAsr WHERE cod_proveedor=(SELECT cod_proveedor FROM `proveedores` WHERE id_proveedores=:idproveedor)");

    $dbh->execute(array(
        ':codAsr'=> $userData->getIdAsesor(),
        ':idproveedor'=> $userData->getIdProv(),
    ));
        
    $searchDB= $dbh->fetch(PDO::FETCH_ASSOC);
    return $searchDB; */
    
}

public function updateAsrComer($userData){
      
}




public function createAsrNew($userData){

    
    try {
            try {
               
               
                    
                

                    $userSen = 'INSERT INTO `usuarios` (`id_usuario`, `cod_rol_usuario`, `cod_tipo_documento_usuario`, `cod_horario_user`, `cod_estado_usuario`, `numero_documento`, `nombre`, `apellido`, `email`, `telefono`, `contrasenia`, `question1`, `question2`, `question3`, `termino_condiciones`, `tratamiento_datos`)values(null,:asr,:tipoDoc,"N/A",:status,:documento,:asesorN,:asesorA,:correo,:telefonoAsesor,"---","---","---","---",1,1)';

                    $dbh = $this->conn->prepare($userSen);
                    $dbh->bindValue('asr', $userData->getRolAsesor());
                    $dbh->bindValue('tipoDoc', $userData->getTipoDoc());
                    $dbh->bindValue('documento', $userData->getNumDocumento());
                    $dbh->bindValue('asesorN', $userData->getNombreAsesor());
                    $dbh->bindValue('asesorA', $userData->getApellidoAsesor());
                    $dbh->bindValue('correo', $userData->getEmailAsesor());
                    $dbh->bindValue('status', $userData->getStatusAsesor());
                    $dbh->bindValue('telefonoAsesor', $userData->getCelAsesor());
                    $dbh->execute();
                    var_dump($userData);

                    
                       
                
                
        } catch (Exception $e) {
            return false;
        }
    } catch (Exception $e) {
        die($e->getMessage());
    };

   
    }
#endFunciones
}
