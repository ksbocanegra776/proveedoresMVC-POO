<?php
if (isset($_REQUEST['resul'])) {
    if (isset($vPass)) {
        echo "<div class='okey'>" . $vPass . "</div>";
    }
    if (isset($errMsg)) {
        echo "<div class='error'>" . $errMsg . "</div>";
    }
    if (isset($errMsg2)) {
        echo "<div class='error'>" . $errMsg2 . "</div>";
    }
    if ($_REQUEST['resul'] == 'emptyProveedor') {
        echo "<div class='empty'>¡La busqueda de proveedor es vacia!</div>";
    }
    if ($_REQUEST['resul'] == 'error') {
        echo "<div class='error'>¡No hubo coincidencias !🤦‍♂️🤦‍♀️</div>";
    }
    if ($_REQUEST['resul'] == 'errorUpdate') {
        echo "<div class='error'>¡Lo sentimos no se pudo actualizar la información, intentelo de nuevo!🤦‍♂️🤦‍♀️</div>";
    }
    if ($_REQUEST['resul'] == 'empty2Update') {
        echo "<div class='empty'>¡Dede asociar un asesor para realizar actualizaciones de información!</div>";
    }
    if ($_REQUEST['resul'] == 'errorNewAsAc') {
        echo "<div class='error'>¡No se pudo cambiar el Asesor para este Proveedor!</div>";
    }
    if ($_REQUEST['resul'] == 'emptyNewAs') {
        echo "<div class='empty'>¡Los campos de creación de nuevo Asesor deben estar diligenciados en su totalidad!</div>";
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
    if ($_REQUEST['resul'] == 'emptyRegister') {
        echo "<div class='empty'>¡Todos los campos deben ser diligenciados!</div>";
    }
    if ($_REQUEST['resul'] == 'errorInfoLogin') {
        echo "<div class='error'>¡Lo sentimos los datos no son correctos!🤦‍♂️🤦‍♀️</div>";
    }
    if ($_REQUEST['resul'] == 'errorLogin') {
        echo "<div class='error'>¡Usuario no registrado!</div>";
    }
    if ($_REQUEST['resul'] == 'empty') {
        echo "<div class='empty'>¡Todos los campos deben ser diligenciados!</div>";
    }
    if ($_REQUEST['resul'] == 'send') {
        echo "<div class='okey'>¡Hemos recibido su correo, pronto nos comunicaremos!</div>";
    }if ($_REQUEST['resul'] == 'errorContact') {
        echo "<div class='empty'>toda la información es requerida.</div>";
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
    if ($_REQUEST['resul'] == 'errorExistProvee') {
        echo "<div class='error'>¡ya existe un proveedor con este numero de identificación!🤦‍♂️🤦‍♀️</div>";
    }
    if ($_REQUEST['resul'] == 'okeyCreateProvee') {
        echo "<div class='okey'>¡Se ha creado un nuevo proveedor!</div>";
    }
    if ($_REQUEST['resul'] == 'okeyUpdatePro') {
        echo "<div class='okey'>¡Se ha actualizado el proveedor correctamente!</div>";
    }
    if ($_REQUEST['resul'] == 'emptyUpdateProv') {
        echo "<div class='empty'>¡No se han enviado datos para generar un cambio en el proveedor.!</div>";
    }
    if ($_REQUEST['resul'] == 'okeyUpdateAs') {
        echo "<div class='okey'>¡Se ha actualizado la información del asesor!</div>";
    }
    if ($_REQUEST['resul'] == 'emptyUpdateAs') {
        echo "<div class='empty'>¡Todos los campos deben estar diligenciados!</div>";
    }
    if ($_REQUEST['resul'] == 'errorUpdateAs') {
        echo "<div class='error'>¡Lo sentimos no se pudo actualizar la información!🤦‍♂️🤦‍♀️</div>";
    }
    if ($_REQUEST['resul'] == 'okeyUpdateStatusAs') {
        echo "<div class='okey'>¡Ha cambiado el estado del asesor!</div>";
    }
    if ($_REQUEST['resul'] == 'errorSearchAs') {
        echo "<div class='okey'>¡No se encontro información para ese Asesor!</div>";
    }
    if ($_REQUEST['resul'] == 'emptySearchProv') {
        echo "<div class='empty'>¡La busqueda es vacia!</div>";
    }if ($_REQUEST['resul'] == 'existProv') {
        echo "<div class='error'>¡Ya existe un proveedor con este número de identificación o email en la base de datos!</div>";
    }
    if ($_REQUEST['resul'] == 'emptyProvInactiv') {
        echo "<div class='empty'>¡su busqueda es vacía!</div>";
    }
    if ($_REQUEST['resul'] == 'okeyProvInactiv') {
        echo "<div class='okey'>¡Se cambiado el estado del proveedor a inactivo!</div>";
    }
    if ($_REQUEST['resul'] == 'errorProvUpdate') {
        echo "<div class='empty'>¡Este proveedor ya fue inactivado anteriormente!</div>";
    }
}
?>