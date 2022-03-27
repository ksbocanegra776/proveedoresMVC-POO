<?php
require_once 'Model/UserModel.php';
class UserController
{
    private  $modelo;
    public function __construct()
    {
        $this->modelo = new UserModel();
    }
    public function crearUser(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = new UserModel();

            $usuario->setRol('R-N/A');
            $usuario->setTipoDoc($_POST['tipoDoc']);
            $usuario->setHorario('h-N/A');
            $usuario->setStatus('Pen');
            $usuario->setNumdocumento($_POST['documento']);
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellido($_POST['apellido']);
            $usuario->setEmail($_POST['email']);
            $usuario->setTelefono($_POST['telefono']);
            $usuario->setPass(/* password_hash */($_POST['password']/* , PASSWORD_DEFAULT */));
            $usuario->setQuestion1($_POST['question1']);
            $usuario->setQuestion2($_POST['question2']);
            $usuario->setQuestion3($_POST['question3']);
            $usuario->setTyc(1);
            $usuario->setTd(1);
            if ($_POST['documento']!=""||$_POST['nombre']!=""||$_POST['apellido']!=""||$_POST['email']!=""||$_POST['telefono']!=""||$_POST['password']!=""||$_POST['question1']!=""||$_POST['question2']!=""||$_POST['question3']!="") {
                $reg = $this->modelo->registrar($usuario);
                var_dump($reg);
                if ($reg) {
                    header('Location:?c=LandingPageWeb&a=register&resul=okeyRegister');
                } else{
                header('Location:?c=LandingPageWeb&a=register&resul=errorExist');}
            } else {
                header('Location: ?c=LandingPageWeb&a=register&resul=empty');
            }
        }
     }
    public function crearUserAdmin(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $usuario = new UserModel();
            $usuario->setRol($_POST['tipoRol']);
            $usuario->setTipoDoc($_POST['tipoDoc']);
            $usuario->setHorario($_POST['horario']);
            $usuario->setStatus($_POST['status']);
            $usuario->setNumdocumento($_POST['documento']);
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellido($_POST['apellido']);
            $usuario->setEmail($_POST['email']);
            $usuario->setTelefono($_POST['telefono']);
            $usuario->setPass(/* password_hash */($_POST['password']/* , PASSWORD_DEFAULT */));
            $usuario->setPass2(sha1($_POST['password2']));
            $usuario->setQuestion1($_POST['question1']);
            $usuario->setQuestion2($_POST['question2']);
            $usuario->setQuestion3($_POST['question3']);
            $usuario->setTyc($_POST['tyc']);
            $usuario->setTd($_POST['td']);
            var_dump($usuario);

            if ($_POST['documento']==""||$_POST['nombre']==""||$_POST['apellido']==""||$_POST['email']==""||$_POST['telefono']==""||$_POST['password']==""||$_POST['password2']==""||$_POST['question1']==""||$_POST['question2']==""||$_POST['question3']=="" && $_POST['tyc']==0 && $_POST['td']==0&& $_POST['status']=="") {
                header('Location:?c=ModulsAdminController&a=users&resul=empty');
            } else {                
                
                if (($usuario->setPass(/* password_hash */($_POST['password']/* , PASSWORD_DEFAULT */)) != $usuario->setPass2(/* password_hash */($_POST['password2'])/* , PASSWORD_DEFAULT */) || ($usuario->setPass(/* password_hash */($_POST['password']/* , PASSWORD_DEFAULT */)) == "") || ($usuario->setPass2(/* password_hash */($_POST['password2'])/* , PASSWORD_DEFAULT */) == ""))) {
                      
                  header('Location:?c=ModulsAdminController&a=users&resul=errorPass');
                } else {
                    $us=  $this->modelo->registrar($usuario);
                    var_dump($us);
                    header('Location: ?c=ModulsAdminController&a=users&resul=okeyCreateUser');
                }
            }

         }

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            require_once 'view/roles/admin/menuLateralProveedores.view.php';
            require_once 'view/modules/adminUser/usuarios.view.php';
            require_once 'view/roles/admin/footerAdmin.php';
        }
     }
    public function listar(){
        
        $users= $this->modelo->consultarUserAdmin();
        
        require_once 'view/roles/admin/headAdmin.php';
        require_once 'view/roles/admin/menuLateralProveedores.view.php';
        require_once 'view/modules/adminUser/searchUsers.view.php';
        require_once 'view/roles/admin/footerAdmin.php';
     } 
    public function updateUser(){
        
        if(($_SERVER['REQUEST_METHOD'])=='GET'){
            $user= $this->modelo->getByid($_GET['id_usuario']);
            require_once 'view/roles/admin/headAdmin.php';
            require_once 'view/roles/admin/menuLateralProveedores.view.php';
            require_once 'view/modules/adminUser/userUpdate.view.php';
            require_once 'view/roles/admin/footerAdmin.php';
        }
        if(($_SERVER['REQUEST_METHOD'])=='POST'){
            $userData = new UserModel();
            $userData->setIdUsuario($_POST['id_usuario']);
            $userData->setTipoDoc($_POST['tipoDoc']);
            $userData->setNumdocumento($_POST['numDocumento']);
            $userData->setEmail($_POST['email']);
            $userData->setHorario($_POST['horario']);
            $userData->setStatus($_POST['status']);
            $userData->setNombre($_POST['nombre']);
            $userData->setApellido($_POST['apellido']);
            $userData->setRol($_POST['tipoRol']);
            $userData->setTelefono($_POST['telefono']);
            $userData->setPass(/* password_hash */($_POST['password']/* , PASSWORD_DEFAULT */));
            $userData->setPass2(/* password_hash */($_POST['password2']/* , PASSWORD_DEFAULT */));
            $userData->setQuestion1($_POST['question1']);
            $userData->setQuestion2($_POST['question2']);
            $userData->setQuestion3($_POST['question3']);
            $userData->setTyc(1);
            $userData->setTd(1);
               

         if ($_POST['numDocumento']==""||$_POST['nombre']==""||$_POST['apellido']==""||$_POST['email']==""||$_POST['telefono']==""||$_POST['password']==""||$_POST['password2']==""||$_POST['question1']==""||$_POST['question2']==""||$_POST['question3']=="" && $_POST['tyc']==0 && $_POST['td']==0&& $_POST['status']=="") {
               
                header('Location:?c=UserController&a=listar&resul=empty');
            }elseif (($userData->setPass(/* password_hash */($_POST['password']/* , PASSWORD_DEFAULT */)) != $userData->setPass2(/*password_hash */($_POST['password2'])/* , PASSWORD_DEFAULT */) || ($userData->setPass(/* password_hash */($_POST['password']/* , PASSWORD_DEFAULT */)) == "") || ($userData->setPass2(/* password_hash */($_POST['password2'])/* , PASSWORD_DEFAULT */) == ""))) 
            {                
                header('Location:?c=UserController&a=listar&resul=errorPass');
            }  
            else{
                $this->modelo->actualizarUser($userData);
                header('Location:?c=UserController&a=listar&resul=okUpdateInfo');
            } 
                        
        }
     }

    public function deleteUser(){

        if(($_SERVER['REQUEST_METHOD'])=='GET'){
            $user= $this->modelo->getByid($_GET['id_usuario']);
            require_once 'view/roles/admin/headAdmin.php';
            require_once 'view/roles/admin/menuLateralProveedores.view.php';
            require_once 'view/modules/adminUser/deleteUser.view.php';
            require_once 'view/roles/admin/footerAdmin.php';
        }
        if(($_SERVER['REQUEST_METHOD'])=='POST'){
            $userData = new UserModel();
            $userData->setIdUsuario($_GET['idUsuario']);
            $this->modelo->deleteUser($userData);
            header('Location:?c=UserController&a=listar&resul=deleteRegister');
          }
        }

   
}
