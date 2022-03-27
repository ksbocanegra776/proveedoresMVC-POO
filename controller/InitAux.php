<?php

    class InitAux
    {

        public function __construct()
        {
        }

        public function index()
        {
          require_once 'view/roles/userAux/headAux.php';
          require_once 'view/modules/auxUser/auxiliar.view.php';
        
        }
        public function notificaciones()
        {
          require_once 'view/roles/userAux/headAux.php';
          require_once 'view/modules/auxUser/notificaciones.view.php';
        
        }
        public function consulta()
        {
          require_once 'view/roles/userAux/Agendamiento/headAuxAgen.php';
          require_once 'view/modules/auxUser/consultaAgendaA.view.php';
          require_once 'view/roles/userAux/Agendamiento/footerAuxAgen.php';
        
        }
      
    }
?>