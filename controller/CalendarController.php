<?php
require_once 'Model/CalendarModel.php';
class CalendarController
{
    private  $modelCalendar;
    public function __construct()
    {
        
         $this->modelCalendar = new CalendarModel();
    }
    public function register()
    {
        $dataAg = new CalendarModel();
        $dataAg->setCodEvent($_POST['codEvent']);
        $dataAg->setEventMot($_POST['eventMot']);
        $dataAg->setProveedorCod($_POST['proveedorCod']);
        $dataAg->setDateEvent($_POST['dateEvent']);
        $dataAg->setTypeStatus($_POST['statusEvent']);
        $dataAg->setColorPriority($_POST['colorPriority']);
        $dataAg->setIdEvent($_POST['id_evento']);

        if (empty($_POST['eventMot']) || $_POST['eventMot'] == 'N/A' || empty($_POST['codEvent']) || empty($_POST['proveedorCod']) || $_POST['proveedorCod'] == 'N/A' || empty($_POST['dateEvent']) || (empty($_POST['statusEvent']) || $_POST['statusEvent'] == 'N/A') || empty($_POST['colorPriority']) || $_POST['colorPriority']=='#000000') {
            $message = array('info'=>'Error: Todos los campos deben estar diligenciados y la prioridad debe ser diferente de negro', 'status' => false, 'type' => 'warning');
            
        } else {
            if($_POST['id_evento']==''){
                $rt = $this->modelCalendar->regisAgen($dataAg);
                if ($rt) {
                    $message = array('info'=> 'Success:¡Se guardo correctamente el evento, ya puede cerrar el formulario Registro Evento!', 'status' => true, 'type' => 'success');
                
                } else {
                    $message = array('info'=> 'Error: No fue posible agendar el evento', 'status' => false, 'type' => 'danger');
                    return false;
                 }
            }else{
                $rt = $this->modelCalendar->updateAgen($dataAg);
                if ($rt) {
                    $message = array('info'=> 'Success:¡Se modificó correctamente el evento, ya puede cerrar el formulario Registro Evento!', 'status' => true, 'type' => 'success');
                
                } else {
                    $message = array('info'=> 'Error: No fue posible modificar el evento', 'status' => false, 'type' => 'danger');
                    return false;
                 }

            }
        }
        echo json_encode($message);
         die();
    }
    public function listEvent(){

      $info= $this->modelCalendar->listAgen();
      /* var_dump($info); */
      echo json_encode($info,JSON_UNESCAPED_UNICODE);
      die();
    }
}