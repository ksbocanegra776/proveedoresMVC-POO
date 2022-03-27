<?php

class UserModel
{
 
#selection
    private $idUsuario;
    private $nombre;
    private $apellido;
    private $tipoDoc ;
    private $numDocumento;
    private $email;
    private $password;
    private $password2;
    private $telefono;
    private $question1;
    private $question2;
    private $question3;
    private $status;
    private $rol;
    private $tyc;
    private $td ;
    private $horario;
#end
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
    public function __construct10($idUsuario, $rol, $tipoDoc, $horario, $status, $numDocumento, $nombre, $apellido, $email, $telefono)
    {
        $this->idUsuario = $idUsuario;
        $this->rol = $rol;
        $this->tipoDoc = $tipoDoc;
        $this->horario = $horario;
        $this->status = $status;
        $this->numDocumento = $numDocumento;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }
    public function __construct16($idUsuario, $rol, $tipoDoc, $horario, $status, $numDocumento, $nombre, $apellido, $email, $telefono,$password,$question1,$question2,$question3,$tyc,$td)
    {
        $this->idUsuario = $idUsuario;
        $this->rol = $rol;
        $this->tipoDoc = $tipoDoc;
        $this->horario = $horario;
        $this->status = $status;
        $this->numDocumento = $numDocumento;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->password = $password;
        $this->question1 = $question1;
        $this->question2 = $question2;
        $this->question3 = $question3;   
        $this->tyd = $tyc;
        $this->td = $td;    

    }
#section
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
    public function setIdUsuario($idUsuario)
    {
        return $this->idUsuario = $idUsuario;
    }
    public function getRol()
    {
        return $this->rol;
    }
    public function setRol($rol)
    {
        return $this->rol = $rol;
    }
    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }
    public function setTipoDoc($tipoDoc)
    {
        return $this->tipoDoc = $tipoDoc;
    }
    public function getHorario()
    {
        return $this->horario;
    }
    public function setHorario($horario)
    {
        return $this->horario = $horario;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setstatus($status)
    {
        return $this->status = $status;
    }
    public function getNumdocumento()
    {
        return $this->numDocumento;
    }
    public function setNumdocumento($numDocumento)
    {
        return $this->numDocumento = $numDocumento;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        return $this->nombre = $nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($apellido)
    {
        return $this->apellido = $apellido;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        return $this->email = $email;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setTelefono($telefono)
    {
        return $this->telefono = $telefono;
    }
    public function getPass()
    {
        return $this->password;
    }
    public function setPass($password)
    {
        return $this->password = $password;
    }
    public function getPass2()
    {
        return $this->password2;
    }
    public function setPass2($password2)
    {
        return $this->password2 = $password2;
    }
    public function getQuestion1()

    {
        return $this->question1;
    }
    public function setQuestion1($question1)
    {
        return $this->question1 = $question1;
    }
    public function getQuestion2()
    {
        return $this->question2;
    }
    public function setQuestion2($question2)
    {
        return $this->question2 = $question2;
    }
    public function getQuestion3()
    {
        return $this->question3;
    }
    public function setQuestion3($question3)
    {
        return $this->question3 = $question3;
    }
    public function getTyc()
    {
        return $this->tyc;
    }
    public function setTyc($tyc)
    {
        return $this->tyc = $tyc;
    }
    public function getTd()
    {
        return $this->td;
    }
    public function setTd($td)
    {
        return $this->td = $td;
    }
#endsection

    public function registrar($usuario)
    {
        try {
            
            try {
                
                $userSen = 'INSERT INTO `usuarios` (`id_usuario`, `cod_rol_usuario`, `cod_tipo_documento_usuario`, `cod_horario_user`, `cod_estado_usuario`, `numero_documento`, `nombre`, `apellido`,`cod_usuario`, `email`, `telefono`, `contrasenia`, `question1`, `question2`, `question3`, `termino_condiciones`, `tratamiento_datos`)values(null,:cod_rol_usuario,:cod_tipo_documento_usuario,:cod_horario_user,:cod_estado_usuario,:numero_documento,:nombre,:apellido,"N/A",:email,:telefono,:contrasenia,:question1,:question2,:question3,:termino_condiciones,:tratamiento_datos)';

                $dbh = $this->conn->prepare($userSen);

                $dbh->bindValue('cod_rol_usuario', $usuario->getRol());
                $dbh->bindValue('cod_tipo_documento_usuario', $usuario->getTipoDoc());
                $dbh->bindValue('cod_horario_user', $usuario->getHorario());
                $dbh->bindValue('cod_estado_usuario', $usuario->getStatus());
                $dbh->bindValue('numero_documento', $usuario->getNumdocumento());
                $dbh->bindValue('nombre', $usuario->getNombre());
                $dbh->bindValue('apellido', $usuario->getApellido());
                $dbh->bindValue('email', $usuario->getEmail());
                $dbh->bindValue('telefono', $usuario->getTelefono());
                $dbh->bindValue('contrasenia', $usuario->getPass());
                $dbh->bindValue('question1', $usuario->getQuestion1());
                $dbh->bindValue('question2', $usuario->getQuestion2());
                $dbh->bindValue('question3', $usuario->getQuestion3());
                $dbh->bindValue('termino_condiciones', $usuario->getTyc());
                $dbh->bindValue('tratamiento_datos', $usuario->getTd());
                $dbh->execute();
            } catch (Exception $e) {
                return false;
            }
        } catch (Exception $e) {
            die($e->getMessage());
        };
    }
    public function consultarUserAdmin()
    {
        $userList = [];
        try {
            $bdhUser = $this->conn->query('SELECT * from usuarios where cod_rol_usuario!="Asr"');
            foreach($bdhUser->fetchAll() as $user) {
                $userList[] = new UserModel(
                    $user['id_usuario'],
                    $user['cod_rol_usuario'],
                    $user['cod_tipo_documento_usuario'],
                    $user['cod_horario_user'],
                    $user['cod_estado_usuario'],
                    $user['numero_documento'],
                    $user['nombre'],
                    $user['apellido'],
                    $user['email'],
                    $user['telefono'],
                    $user['contrasenia'],
                    $user['question1'],
                    $user['question2'],
                    $user['question3'],
                    $user['termino_condiciones'],
                    $user['tratamiento_datos']
                );
            }
            return $userList;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function getByid($id_usuario){
        try {
           
            $sql='SELECT * FROM usuarios WHERE id_usuario=:id_usuario';
            $dbh= $this->conn->prepare($sql);
            $dbh->bindValue('id_usuario',$id_usuario);
            $dbh->execute();
            $searchDB= $dbh->fetch();
            $user= new UserModel(
                $searchDB['id_usuario'],
                $searchDB['cod_rol_usuario'],
                $searchDB['cod_tipo_documento_usuario'],
                $searchDB['cod_horario_user'],
                $searchDB['cod_estado_usuario'],
                $searchDB['numero_documento'],
                $searchDB['nombre'],
                $searchDB['apellido'],
                $searchDB['email'],
                $searchDB['telefono'],
                $searchDB['contrasenia'],
                $searchDB['question1'],
                $searchDB['question2'],
                $searchDB['question3'],
                $searchDB['termino_condiciones'],
                $searchDB['tratamiento_datos']

            );
            return $user;
                    
        }catch (Exception $e) {
            die($e->getMessage());
        }

    }
    public function actualizarUser($userData){
       
        try {
            
            $sqlUpdate=$this->conn->prepare("UPDATE `usuarios` SET `cod_rol_usuario`=:rol,`cod_horario_user`=:horario,`cod_estado_usuario`=:status,`nombre`=:nombre,`apellido`=:apellido,`email`=:email,`telefono`=:telefono,`contrasenia`=:password,`question1`=:question1,`question2`=:question2,`question3`=:question3,`termino_condiciones`=:tyc,`tratamiento_datos`=:td where `numero_documento`=:numDocumento or `id_usuario`=:idUsuario");
            
            $sqlUpdate->execute(array(
                ':idUsuario'=> $userData->getIdUsuario(),
                ':rol'=> $userData->getRol(),
                ':horario'=> $userData->getHorario(),
                ':status'=> $userData->getStatus(),
                ':numDocumento'=> $userData->getNumdocumento(),
                ':nombre'=> $userData->getNombre(),
                ':apellido'=> $userData->getApellido(),
                ':email'=> $userData->getEmail(),
                ':telefono'=> $userData->getTelefono(),
                ':password'=> $userData->getPass(),
                ':question1'=> $userData->getQuestion1(),
                ':question2'=> $userData->getQuestion2(),
                ':question3'=> $userData->getQuestion3(),
                ':tyc'=> $userData->getTyc(),
                ':td'=> $userData->getTd(),  
            ));
           
            
        } catch (Exception $e) {
            die($e->getMessage());
        };

    }     
    public function deleteUser($userData){
       try {
           $sql= $this->conn->prepare("DELETE FROM `usuarios` WHERE `id_usuario`=:idUsuario");
           $sql->execute(
               array(
                ':idUsuario'=> $userData->getIdUsuario(),
               )
           );
           if($sql==true){
            return $sql;}
        
       } catch (Exception $e) {
        die($e->getMessage());
        };
    }
    public function initSesion($usuarioLogeo){
        $info=[];
        try {
            $bdhUser =('SELECT * from usuarios WHERE `email`=:email AND `contrasenia`=:password AND `cod_estado_usuario`=:cod_estado_usuario');
            $sqlLog=$this->conn->prepare($bdhUser);
            
            $sqlLog->bindValue('email', $usuarioLogeo->getEmail());
            $sqlLog->bindValue('password', $usuarioLogeo->getPass());
            $sqlLog->bindValue('cod_estado_usuario', $usuarioLogeo->getStatus());
           
            $sqlLog ->execute();
           
            if($sqlLog==false){
                return false;
            }elseif($sqlLog==true){
                foreach ($sqlLog->fetchAll(PDO::FETCH_ASSOC) as $login) {
                    $info[]=new UserModel( 
                        $login['id_usuario'],
                        $login['cod_rol_usuario'],
                        $login['cod_estado_usuario'],
                        $login['nombre'],
                        $login['apellido'],
                        $login['email'],
                        $login['contrasenia'],
                        $login['question1'],
                        $login['question2'],
                        $login['question3']                        
                    );
                }
                return $info;
            
            }
        }catch (Exception $e) {
            die($e->getMessage());
        };
    }

    public function validateUser($userData){
        $info=[];
        try{
            $valideInfo=('SELECT * FROM usuarios where `email`=:email and `question1`=:question1 and `question2`=:question2 and `question3`=:question3');
            $dbh = $this->conn->prepare($valideInfo);
            $dbh->bindValue('email', $userData->getEmail());
            $dbh->bindValue('question1', $userData->getQuestion1());
            $dbh->bindValue('question2', $userData->getQuestion2());
            $dbh->bindValue('question3', $userData->getQuestion3());
            $dbh->execute();

            if($dbh==false){
                return false;
            }elseif($dbh==true){
                foreach ($dbh->fetchAll(PDO::FETCH_ASSOC) as $valid) {
                    $info[]=new UserModel( 
                       
                        $valid['email'],
                        $valid['contrasenia'],
                        $valid['question1'],
                        $valid['question2'],
                        $valid['question3']                        
                    );
                }
                return $info;
             
            }
        }catch (Exception $e) {
            die($e->getMessage());
        };

    }
    public function updatePassPgWeb($userDataPass)
    {
        try {

            $upPass = $this->conn->prepare('UPDATE `usuarios` SET `contrasenia`=:password WHERE`email`=:email ');
            $upPass->bindValue('email', $userDataPass->getEmail());
            $upPass->bindValue('contrasenia', $userDataPass->getPass());
            
            $upPass->execute(array(
                ':password' => $userDataPass->getPass(),
                ':email' => $userDataPass->getEmail()
            ));
           
           return $upPass;
          
        } catch (Exception $e) {
            die($e->getMessage());
        };
    }
    public function watchingData($userData){
        $info=[];
        try {
            $valideInfo = $this->conn->prepare("SELECT contrasenia, nombre FROM `usuarios` WHERE `email`=:email And `question1`=:question1 And `question2`=:question2 And `question3`=:question3 And `cod_estado_usuario`=:status");
            $valideInfo ->execute(array(
                ':email'=> $userData->getEmail(),
                ':question1'=>$userData->getQuestion1(),
                ':question2'=>$userData->getQuestion2(),
                ':question3'=>$userData->getQuestion3(),
                ':status'=>$userData->getStatus()

            ));
            $data = $valideInfo->fetch(PDO::FETCH_ASSOC);
            return $data;
            if($data==false){
                return false;
            }elseif($data==true){
                foreach ($data as $valid) {
                    
                    $info[]=new UserModel( 
                        $valid['nombre'],
                        $valid['contrasenia'],
                    );
                }
                return $info;
            }
        }catch (Exception $e) {
            die($e->getMessage());
        };
    }
}