<?php

require_once 'Model/UserModel.php';
class LoginUserController
{

    private  $modeloLogin;
    public function __construct()
    {
        $this->modeloLogin = new UserModel();
    }

    public function loginUser()
    {
        if (($_SERVER['REQUEST_METHOD']) == 'GET') {
            header('Location:?c=loginUserController&a=loginUser');
        }

        if (($_SERVER['REQUEST_METHOD']) == 'POST') {

            try {

                $usuarioLogeo = new UserModel();
                echo  $usuarioLogeo->setEmail(trim($_POST['email']));
                echo  $usuarioLogeo->setPass(trim($_POST['password']));
                if (($_POST['email'] == "" || $_POST['password'] == "") || ($_POST['email'] != "" && $_POST['password'] == "") || ($_POST['email'] == "" && $_POST['password'] != "")) {

                    header('Location:?c=LandingPageWeb&a=login&resul=empty');
                } elseif ($_POST['email'] != "" || $_POST['password'] != "") {

                    $usuarioLogeo->setStatus('Act');
                    $resultInstancia = $this->modeloLogin->initSesion($usuarioLogeo);
                    var_dump($resultInstancia);
                    if ($resultInstancia == false) {
                        header('Location:?c=LandingPageWeb&a=login&resul=errorInfoLogin');
                    } else {
                        foreach ($resultInstancia as $userVerify) {

                            if ($userVerify == true) {
                                /*  if (isset($_SESSION['login'])) { */
                                if ($userVerify->getRol() == "Admin") {
                                    /*  $_SESSION['login'] = $userVerify->getNombre(); */
                                    header('Location:?c=initAdmin');
                                } elseif ($userVerify->getRol() == "Aux") {
                                    /*  $_SESSION['login'] = $userVerify->getNombre(); */
                                    header('Location:?c=initAux&a=index');
                                }
                                /*  } */
                            } elseif ($userVerify == false) {
                                header('Location:?c=LandingPageWeb&a=login&resul=errorInfoLogin');
                            }
                        }
                    }
                }
            } catch (Exception $e) {
                die($e->getMessage());
            };
        }
    }
    public function validatePassUser()
    {
        if (($_SERVER['REQUEST_METHOD']) == 'GET') {
            header('Location: ?c=LandingPageWeb&a=events');
        }
        if (($_SERVER['REQUEST_METHOD']) == 'POST') {

            $userData = new UserModel();
            $userData->setEmail($_POST['email']);
            $userData->setPass(/* password_hash */($_POST['password']/* , PASSWORD_DEFAULT */));
            $userData->setPass2(/* password_hash */($_POST['password2']/* , PASSWORD_DEFAULT */));
            $userData->setQuestion1($_POST['question1']);
            $userData->setQuestion2($_POST['question2']);
            $userData->setQuestion3($_POST['question3']);

            if ($_POST['email'] == "" || $_POST['password'] == "" || $_POST['password2'] == "" || $_POST['question1'] == "" || $_POST['question2'] == "" || $_POST['question3'] == "") {

                header('Location:?c=LandingPageWeb&a=updatePass&resul=empty');
            } else {

                if (($userData->setPass(/* password_hash */($_POST['password']/* , PASSWORD_DEFAULT */)) != $userData->setPass2(/*password_hash */($_POST['password2'])/* , PASSWORD_DEFAULT */) || ($userData->setPass(/* password_hash */($_POST['password']/* , PASSWORD_DEFAULT */)) == "") || ($userData->setPass2(/* password_hash */($_POST['password2'])/* , PASSWORD_DEFAULT */) == ""))) {
                    header('Location:?c=LandingPageWeb&a=updatePass&resul=errorPass');
                } else {
                    $userD = $this->modeloLogin->validateUser($userData);

                    if ($userD == false) {
                        header('Location:?c=LandingPageWeb&a=updatePass&resul=errorInfo');
                    } elseif($userD==true){

                                $userDataPass = new UserModel();
                                $userDataPass->setEmail($_POST['email']);
                                $userDataPass->setPass($_POST['password']);
                                $this->modeloLogin->updatePassPgWeb($userDataPass);

                                header('Location:?c=LandingPageWeb&a=updatePass&resul=okUpdateInfo');

                    }
                }
            }
        }
    }
    public function watchData()
    {
        if (($_SERVER['REQUEST_METHOD']) == 'GET') {
            header('Location: ?c=LandingPageWeb&a=events');
        }
        if (($_SERVER['REQUEST_METHOD']) == 'POST') {

            $userData = new UserModel();
            $userData->setEmail($_POST['email']);
            $userData->setQuestion1($_POST['question1']);
            $userData->setQuestion2($_POST['question2']);
            $userData->setQuestion3($_POST['question3']);
            $userData->setStatus('Act');
          
            $dataInfo = $this->modeloLogin->watchingData($userData);
            if($dataInfo){
               
               echo $info = serialize($dataInfo);
              
               echo $dataD = urlencode($info);
                header("Location:?c=LandingPageWeb&a=forgot&resul=dataUser&dataD=".$dataD);

            }else{
                header("Location:?c=LandingPageWeb&a=forgot&resul=error");

            }
            
        }
    }
}
