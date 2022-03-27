<?php

class ProveeModel
{

    #selectionVariables
    private $tipoDoc;
    private $tipoDocAsr;
    private $documentoPro;
    private $documentoAse;
    private $razonSocial;
    private $actiComercial;
    private $lineaTrabajo;
    private $city;
    private $departamento;
    private $address;
    private $infotel;
    private $emailPro;
    private $asesorCode;
    private $asesorName;
    private $asesorLastName;
    private $correoAsesor;
    private $celPhone;
    private $dateInit;
    private $typeStatusAse;
    private $typeStatusProv;
    private $tipoConvenio;
    private $codProv;
    private $rol;
    private $idprov;

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

    function __construct23($tipoDocAsr, $asesorCode, $asesorName, $asesorLastName, $celPhone, $documentoPro, $razonSocial, $actiComercial, $lineaTrabajo, $city, $departamento, $address, $infotel, $emailPro, $dateInit, $typeStatusProv, $typeStatusAse, $tipoConvenio, $codProv, $rol, $tyd, $td, $tipoDoc)
    {
        $this->rol = $rol;
        $this->tipoDocAsr = $tipoDocAsr;
        $this->tipoDoc = $tipoDoc;
        $this->asesorCode = $asesorCode;
        $this->question3 = $asesorName;
        $this->tyd = $tyd;
        $this->td = $td;
        $this->asesorLastName = $asesorLastName;
        $this->celPhone = $celPhone;
        $this->documentoPro = $documentoPro;
        $this->razonSocial = $razonSocial;
        $this->actiComercial = $actiComercial;
        $this->lineaTrabajo = $lineaTrabajo;
        $this->city = $city;
        $this->departamento = $departamento;
        $this->address = $address;
        $this->infotel = $infotel;
        $this->emailPro = $emailPro;
        $this->dateInit = $dateInit;
        $this->typeStatusProv = $typeStatusProv;
        $this->typeStatusAse = $typeStatusAse;
        $this->tipoConvenio = $tipoConvenio;
        $this->codProv = $codProv;
    }
    function __construct10($actiComercial, $lineaTrabajo, $city, $departamento, $address, $infotel, $emailPro, $tipoConvenio, $codProv, $idprov)
    {
        $this->actiComercial = $actiComercial;
        $this->lineaTrabajo = $lineaTrabajo;
        $this->city = $city;
        $this->departamento = $departamento;
        $this->address = $address;
        $this->infotel = $infotel;
        $this->emailPro = $emailPro;
        $this->idprov = $idprov;
        $this->tipoConvenio = $tipoConvenio;
        $this->codProv = $codProv;
    }
    #end
 #methodosSetGet
    public function getIdProveedor()
    {
        return $this->idprov;
    }
    public function setIdProveedor($idprov)
    {
        return $this->idprov = $idprov;
    }
    public function getCodProveedor()
    {
        return $this->codProv;
    }
    public function setCodProveedor($codProv)
    {
        return $this->codProv = $codProv;
    }
    public function getTipoDocProveedor()
    {
        return $this->tipoDoc;
    }
    public function setTipoDocProveedor($tipoDoc)
    {
        return $this->tipoDoc = $tipoDoc;
    }
    public function getTipoDocAsr()
    {
        return $this->tipoDocAsr;
    }
    public function setTipoDocAsr($tipoDocAsr)
    {
        return $this->tipoDocAsr = $tipoDocAsr;
    }
    public function getDocumentoProveedor()
    {
        return $this->documentoPro;
    }
    public function setDocumentoProveedor($documentoPro)
    {
        return $this->documentoPro = $documentoPro;
    }
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }
    public function setRazonSocial($razonSocial)
    {
        return $this->razonSocial = $razonSocial;
    }
    public function getActiComercialPro()
    {
        return $this->actiComercial;
    }
    public function setActiComercialPro($actiComercial)
    {
        return $this->actiComercial = $actiComercial;
    }
    public function getLineaTrabajo()
    {
        return $this->lineaTrabajo;
    }
    public function setLineaTrabajo($lineaTrabajo)
    {
        return $this->lineaTrabajo = $lineaTrabajo;
    }
    public function setCity($city)
    {
        return $this->city = $city;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function setDepartamento($departamento)
    {
        return $this->departamento = $departamento;
    }
    public function getDepartamento()
    {
        return $this->departamento;
    }
    public function setAddress($address)
    {
        return $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setInfotel($infotel)
    {
        return $this->infotel = $infotel;
    }
    public function getInfotel()
    {
        return $this->infotel;
    }
    public function setEmail($emailPro)
    {
        return $this->emailPro = $emailPro;
    }
    public function getEmail()
    {
        return $this->emailPro;
    }
    public function setAsesorCode($asesorCode)
    {
        return $this->asesorCode = $asesorCode;
    }
    public function getAsesorCode()
    {
        return $this->asesorCode;
    }
    public function setAsesorName($asesorName)
    {
        return $this->asesorName = $asesorName;
    }
    public function getAsesorName()
    {
        return $this->asesorName;
    }
    public function setAsesorLastName($asesorLastName)
    {
        return $this->asesorLastName = $asesorLastName;
    }
    public function getAsesorLastName()
    {
        return $this->asesorLastName;
    }
    public function setCorreoAsesor($correoAsesor)
    {
        return $this->correoAsesor = $correoAsesor;
    }
    public function getCorreoAsesor()
    {
        return $this->correoAsesor;
    }
    public function setCelPhone($celPhone)
    {
        return $this->celPhone = $celPhone;
    }
    public function getCelPhone()
    {
        return $this->celPhone;
    }
    public function setDateInit($dateInit)
    {
        return $this->dateInit = $dateInit;
    }
    public function getDateInit()
    {
        return $this->dateInit;
    }
    public function setTypeStatusPro($typeStatusProv)
    {
        return $this->typeStatusProv = $typeStatusProv;
    }
    public function getTypeStatusPro()
    {
        return $this->typeStatusProv;
    }
    public function setTypeStatusAse($typeStatusAse)
    {
        return $this->typeStatusAse = $typeStatusAse;
    }
    public function getTypeStatusAse()
    {
        return $this->typeStatusAse;
    }
    public function setTipoConvenio($tipoConvenio)
    {
        return $this->tipoConvenio = $tipoConvenio;
    }
    public function getTipoConvenio()
    {
        return $this->tipoConvenio;
    }
    public function getRol()
    {
        return $this->rol;
    }
    public function setRol($rol)
    {
        return $this->rol = $rol;
    }
    public function getDocumentoAsesor()
    {
        return $this->documentoAse;
    }
    public function setDocumentoAsesor($documentoAse)
    {
        return $this->documentoAse = $documentoAse;
    }
    public function getSelecTablaBD()
    {
        return $this->selecTablaBD;
    }
    public function setSelecTablaBD($selecTablaBD)
    {
        return $this->selecTablaBD = $selecTablaBD;
    }
    public function getBuscador()
    {
        return $this->buscador;
    }
    public function setBuscador($buscador)
    {
        return $this->buscador = $buscador;
    }
#end
    #funtions

    public function registrarProveedor($proveedor)
     
    {
        var_dump($proveedor);
        $search =  $this->conn->prepare('SELECT * FROM proveedores,asesor_comercial,usuarios where proveedores.numero_documento_prov=:documentoPro or proveedores.razon_Social=:razonSocial or proveedores.emailPro=:emailPro or usuarios.email=:correoAsesor or asesor_comercial.doc_asesor=:documentoAse or usuarios.numero_documento=:documentoAse');
        $search->execute(array(
            ':documentoPro' => $proveedor->getDocumentoProveedor(),
            ':razonSocial' => $proveedor->getRazonSocial(),
            ':emailPro' => $proveedor->getEmail(),
            ':correoAsesor' => $proveedor->getCorreoAsesor(),
            'documentoAse' => $proveedor->getDocumentoAsesor(),

        ));
        $rt = $search->fetch(PDO::FETCH_ASSOC);
        if ($rt == true) {
            header('Location:?c=ModulsAdminController&a=creaProvee&resul=errorExistProvee');
        }

         try {

                echo "0";
                if ($rt == false) {
                    echo "rt";
                    $ProSen = ' INSERT INTO `proveedores`(`id_proveedores`, `cod_proveedor`, `cod_tipo_documento_prov`, `numero_documento_prov`, `razon_social`, `linea_provista`, `telefonoProv`, `emailPro`, `departamento`, `ciudad`, `direccion`, `cod_estado_proveedor`, `cod_asesor`, `cod_actividad_economica`, `id_convenio`, `fechaInicio`)values(null,:codProv,:tipoDoc,:documentoPro,:razonSocial,:lineaTrabajo,:infotel,:emailPro,:departamento,:city,:address,:statusPro,:asesorCode,:actiComercial,:tipoConvenio,:dateInit)';

                    $dbh = $this->conn->prepare($ProSen);
                    $dbh->bindValue('codProv', $proveedor->getCodProveedor());
                    $dbh->bindValue('tipoDoc', $proveedor->getTipoDocProveedor());
                    $dbh->bindValue('documentoPro', $proveedor->getDocumentoProveedor());
                    $dbh->bindValue('razonSocial', $proveedor->getRazonSocial());
                    $dbh->bindValue('lineaTrabajo', $proveedor->getLineaTrabajo());
                    $dbh->bindValue('infotel', $proveedor->getInfotel());
                    $dbh->bindValue('emailPro', $proveedor->getEmail());
                    $dbh->bindValue('departamento', $proveedor->getDepartamento());
                    $dbh->bindValue('city', $proveedor->getCity());
                    $dbh->bindValue('address', $proveedor->getAddress());
                    $dbh->bindValue('statusPro', $proveedor->getTypeStatusPro());
                    $dbh->bindValue('asesorCode', $proveedor->getAsesorCode());
                    $dbh->bindValue('actiComercial', $proveedor->getActiComercialPro());
                    $dbh->bindValue('tipoConvenio', $proveedor->getTipoConvenio());
                    $dbh->bindValue('dateInit', $proveedor->getDateInit());
                    $dbh->execute();
                    echo "1";
                    if ($dbh) {
                        $userSen = 'INSERT INTO `usuarios` (`id_usuario`, `cod_rol_usuario`, `cod_tipo_documento_usuario`, `cod_horario_user`, `cod_estado_usuario`, `numero_documento`, `nombre`, `apellido`,`cod_usuario`, `email`, `telefono`, `contrasenia`, `question1`, `question2`, `question3`, `termino_condiciones`, `tratamiento_datos`)values(null,:rol,:tipoDocAsr,"h-N/A",:statusAse,:documentoAse,:asesorName,:asesorLastName,:asesorCode,:correoAsesor,:celPhone,"---","---","---","---",1,1)';
                        $queryU = $this->conn->prepare($userSen);

                        $queryU->bindValue('rol', $proveedor->getRol('Asr'));
                        $queryU->bindValue('tipoDocAsr', $proveedor->getTipoDocAsr());
                        $queryU->bindValue('statusAse', $proveedor->getTypeStatusAse());
                        $queryU->bindValue('documentoAse', $proveedor->getDocumentoAsesor());
                        $queryU->bindValue('asesorName', $proveedor->getAsesorName());
                        $queryU->bindValue('asesorLastName', $proveedor->getAsesorLastName());
                        $queryU->bindValue('asesorCode', $proveedor->getAsesorCode());
                        $queryU->bindValue('correoAsesor', $proveedor->getCorreoAsesor());
                        $queryU->bindValue('celPhone', $proveedor->getCelPhone());
                        $queryU->execute();
                        echo "2";
                        if ($queryU) {

                            $sqlTablaAsesor = "INSERT INTO `asesor_comercial`(`id_asesor_comercial`, `doc_asesor`, `doc_prov`, `cod_rol_asesor`, `cod_asesor`, `cod_proveedor`)VALUES (null,:documentoAse,:documentoPro,:rol,:asesorCode,:codProv)";

                            $queryA = $this->conn->prepare($sqlTablaAsesor);
                            $queryA->bindValue('documentoAse', $proveedor->getDocumentoAsesor());
                            $queryA->bindValue('documentoPro', $proveedor->getDocumentoProveedor());
                            $queryA->bindValue('rol', $proveedor->getRol('Asr'));
                            $queryA->bindValue('asesorCode', $proveedor->getAsesorCode());
                            $queryA->bindValue(
                                'codProv',
                                $proveedor->getCodProveedor()
                            );
                            $queryA->execute();

                            echo "3";
                            return true;
                        }
                    }

                }
           
        } catch (Exception $e) {
            die($e->getMessage());
        };
    }
    public function getByid($id_proveedor)
    {

        try {
            $sql = 'SELECT * FROM `proveedores` WHERE `id_proveedores`=:idproveedor';
            $dbh = $this->conn->prepare($sql);
            $dbh->bindValue('idproveedor', $id_proveedor);
            $dbh->execute();
            $searchDB = $dbh->fetch(PDO::FETCH_ASSOC);
            return $searchDB;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function searcherProv($provSearch)
    {
        $proVer = [];

        try {

            switch ($provSearch->getSelecTablaBD()) {
                case 'R-Soc':
                    $bdhUser = $this->conn->prepare('SELECT * from proveedores WHERE razon_social=:buscador');
                    break;
                case 'N-Doc':
                    $bdhUser = $this->conn->prepare('SELECT * from proveedores WHERE numero_documento_prov=:buscador');
                    break;
                case 'N-Ema':
                    $bdhUser = $this->conn->prepare('SELECT * from proveedores WHERE emailPro=:buscador');

                    break;
                case 'C-Pro':
                    $bdhUser = $this->conn->prepare('SELECT * from proveedores WHERE cod_proveedor=:buscador');

                    break;
                default:
                    header('Location:?c=ModulsAdminController&a=searchResponseProv&resul=errorSearch');

                    break;
            }

            $bdhUser->execute(array(':buscador' => $provSearch->getBuscador()));
            $data = $bdhUser->fetch(PDO::FETCH_ASSOC);
            return $data;
            if ($data == false) {
                return false;
            } elseif ($data == true) {

                foreach ($data as $proRequest) {

                    $proVer[] = new ProveeModel(
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
        } catch (Exception $e) {
            die($e->getMessage());
        };
    }
    public function consulProvAs()
    {
        $ProvList = [];
        try {
            $bdhProvAs = $this->conn->query("SELECT usuarios.*, proveedores.* FROM asesor_comercial JOIN proveedores ON proveedores.cod_asesor = asesor_comercial.cod_asesor JOIN usuarios ON usuarios.numero_documento=asesor_comercial.doc_asesor");
            $ProvList = $bdhProvAs->fetchAll();
            return $ProvList;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function inactiveProveedor($userData)
    {
        try {
            $sql = $this->conn->prepare("UPDATE `proveedores` SET `cod_estado_proveedor`=:statusPro WHERE `id_proveedores`=:idproveedor");

            $sql->execute(
                array(
                    ':statusPro' => $userData->getTypeStatusPro(),
                    ':idproveedor' => $userData->getIdProveedor(),
                )
            );
            return $sql;
        } catch (Exception $e) {
            die($e->getMessage());
        };
    }
    public function deleteProvee($provData)
    {
        try {

            try {
                $sql = $this->conn->prepare("DELETE FROM `proveedores` WHERE `id_proveedores`=:idproveedor");
                $sql->execute(
                    array(
                        ':idproveedor' => $provData->getIdProveedor(),
                    )
                );
                if ($sql->error) {
                    return false;
                }
            } catch (Exception $e) {
                return false;
            }
        } catch (Exception $e) {
            echo ($e->getMessage());
            die();
        };
    }
    public function updatePro($proveedor)
    {
        try {

            $sqlPRov = $this->conn->prepare("UPDATE `proveedores` SET `telefonoProv`=:infotel,`emailPro`=:emailPro,`departamento`=:departamento,`ciudad`=:city,`direccion`=:direccion,`id_convenio`=:tipoConv WHERE `id_proveedores`=:idprov");
            $sqlPRov->execute(array(
                ':idprov' => $proveedor->getIdProveedor(),
                ':infotel' => $proveedor->getInfotel(),
                ':emailPro' => $proveedor->getEmail(),
                ':departamento' => $proveedor->getDepartamento(),
                ':city' => $proveedor->getCity(),
                ':direccion' => $proveedor->getAddress(),
                ':tipoConv' => $proveedor->getTipoConvenio(),

            ));
            return ($sqlPRov);
        } catch (Exception $e) {
            die($e->getMessage());
        };
    }
}
