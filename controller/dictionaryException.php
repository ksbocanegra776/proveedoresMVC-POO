<?php
    
/* <?php require_once "controller/dictionaryException.php"?> */
if (isset($_REQUEST['resul'])) {

    if (isset($_REQUEST['resul'] )== 'asrOk'&& isset($_GET['asesorD'])!= "") {
       
        $dataAsr = unserialize($_GET['asesorD']);
       
        echo "<div class='okey'>"."¡Hola su información es ésta: !"."</div>";
    }
    if (isset($_REQUEST['resul'] )== 'dataUser'&& isset($_GET['dataD'])!= "") {
       
        $dataD = unserialize($_GET['dataD']);
        $pass=$dataD['contrasenia'];
        $name=$dataD['nombre'];
        echo "<div class='okey'>"."¡Hola  ".$name."  su clave es:  ".$pass." !"."</div>";
    }
    if ($_REQUEST['resul'] == 'emptyProveedor') {
        echo "<div class='error'>¡La busqueda de proveedor es vacia!</div>";
     }
    if ($_REQUEST['resul'] == 'error') {
        echo "<div class='error'>¡No hubo coincidencias !🤦‍♂️🤦‍♀️</div>";
     }
    if ($_REQUEST['resul'] == 'errorUpdate') {
        echo "<div class='error'>¡Lo sentimos no se pudo actualizar la información, intentelo de nuevo!🤦‍♂️🤦‍♀️</div>";
     }
    if ($_REQUEST['resul'] == 'empty2Update') {
        echo "<div class='error'>¡Dede asociar un asesor para realizar actualizaciones de información!</div>";
     }
    if ($_REQUEST['resul'] == 'errorNewAsAc') {
        echo "<div class='error'>¡No se pudo cambiar el Asesor para este Proveedor!</div>";
     }
    if ($_REQUEST['resul'] == 'emptyNewAs') {
        echo "<div class='error'>¡Campos en el nuevo asesor estan vacios, todo debe diligenciarse!</div>";
    }
    if ($_REQUEST['resul'] == 'okeyNewAs') {
        echo "<div class='okey'>¡Se a asignado un nuevo asesor al proveedor que seleccionó, valide tabla Asesores!</div>";
    }
    if ($_REQUEST['resul'] == 'errorNewAsCh') {
        echo "<div class='error'>¡No fue posible remover el asesor antiguo!🤦‍♂️🤦‍♀️</div>";
    }
    if ($_REQUEST['resul'] == 'errorSearchContact') {
        echo "<div class='error'>¡Lo sentimos  no ha sido posible completar el registro!🤦‍♂️🤦‍♀️</div>";
    }
    if ($_REQUEST['resul'] == 'okeyRegister') {
        echo "<div class='okey'>¡Se ha registrado satisfactoriamente , dirijase al Ingreso!</div>";
    }
    if ($_REQUEST['resul'] == 'errorInfoLogin') {
        echo "<div class='error'>¡Lo sentimos los datos no son correctos!🤦‍♂️🤦‍♀️</div>";
    }
    if ($_REQUEST['resul'] == 'errorLogin') {
        echo "<div class='error'>¡Usuario no registrado!</div>";
    }
    if ($_REQUEST['resul'] == 'empty') {
        echo "<div class='error'>¡Todos los campos deben ser diligenciados!</div>";
    }
    if ($_REQUEST['resul'] == 'send') {
        echo "<div class='okey'>¡Hemos recibido su correo, pronto nos comunicaremos!</div>";
    }if ($_REQUEST['resul'] == 'errorContact') {
        echo "<div class='error'>toda la información es requerida.</div>";
    }
    if ($_REQUEST['resul'] == 'errorExist') {
        echo "<div class='error'>¡ Ya existe un usuario con este número de documento o correo!</div>";
    }
    if ($_REQUEST['resul'] == 'okeyCreateUser') {
        echo "<div class='okey'>¡se ha cambiado de estado el usuario!</div>";
    }
    if ($_REQUEST['resul'] == 'okeyinhabilitUser') {
        echo "<div class='okey'>¡se ha cambiado de estado el usuario!</div>";
    }
    if ($_REQUEST['resul'] == 'okeyUpdateUser') {
        echo "<div class='okey'>¡ se han actualizado datos del usuario!</div>";
    }
    if ($_REQUEST['resul'] == 'errorUpdateProv') {
        echo "<div class='error'>¡No se ha actualizado el estado del proveedor!</div>";
    }
    if ($_REQUEST['resul'] == 'errorExistProvee') {
        echo "<div class='error'>¡ya existe un proveedor con este numero de identificación!🤦‍♂️🤦‍♀️</div>";
    }
    if ($_REQUEST['resul'] == 'okeyCreateProvee') {
        echo "<div class='okey'>¡Se ha creado un nuevo proveedor y su asesor !</div>";
    }
    if ($_REQUEST['resul'] == 'ErrorCreateProvee') {
        echo "<div class='error'>¡Error: No Se ha creado el nuevo proveedor y ni su asesor !</div>";
    }
    if ($_REQUEST['resul'] == 'okeyUpdatePro') {
        echo "<div class='okey'>¡Se ha actualizado el proveedor correctamente!</div>";
    }
    if ($_REQUEST['resul'] == 'emptyUpdateProv') {
        echo "<div class='error'>¡No se han enviado datos para generar un cambio en el proveedor.!</div>";
    }
    if ($_REQUEST['resul'] == 'okeyUpdateAs') {
        echo "<div class='okey'>¡Se ha actualizado la información del asesor!</div>";
    }
    if ($_REQUEST['resul'] == 'okUpdateInfo') {
        echo "<div class='okey'>¡Se ha actualizado la informacion correctamente!</div>";
    }
    if ($_REQUEST['resul'] == 'errorInfo') {
        echo "<div class='error'>¡Lo sentimos la informacion no fue encontrada!</div>";
    }
    if ($_REQUEST['resul'] == 'errorUpdateAs') {
        echo "<div class='error'>¡Lo sentimos no se pudo actualizar la información!🤦‍♂️🤦‍♀️</div>";
    }
    if ($_REQUEST['resul'] == 'deleteRegister') {
        echo "<div class='okey'>¡Ha Eliminado el registro correctamente!</div>";
    }
    if ($_REQUEST['resul'] == 'errorDeleteRegister') {
        echo "<div class='error'>¡No se ha podido eliminar el registro del proveedor, cuenta con un asesor asociado!</div>";
    }
    if ($_REQUEST['resul'] == 'errorSearchAs') {
        echo "<div class='okey'>¡No se encontro información para ese Asesor!</div>";
    }
    if ($_REQUEST['resul'] == 'errorPass') {
        echo "<div class='error'>¡Las contraseñas no coinciden!</div>";
    }if ($_REQUEST['resul'] == 'existProv') {
        echo "<div class='error'>¡Ya existe un proveedor con este número de identificación o email en la base de datos!</div>";
    }
    if ($_REQUEST['resul'] == 'emptyProvInactiv') {
        echo "<div class='error'>¡su busqueda es vacía!</div>";
    }
    if ($_REQUEST['resul'] == 'okeyProvInactiv') {
        echo "<div class='okey'>¡Se cambiado el estado del proveedor a inactivo!</div>";
    }
    if ($_REQUEST['resul'] == 'errorProvUpdate') {
        echo "<div class='error'>¡No fue posible inactivar el proveedor!</div>";
    }
    if ($_REQUEST['resul'] == 'errorSearch') {
        echo "<div class='error'>¡Debe seleccionar una opción!</div>";
    }
}
?>