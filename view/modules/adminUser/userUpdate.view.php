<div class="contenido">

    <div class="row mt-1 p-4">
        <button class="btn btn-secondary  col-auto" onclick="location.href='?c=ModulsAdminController&a=users'" target="_self">Regresar</button>
        <h2 class="text-center col">Actualizar de usuarios</h2>
    </div>

    <div class="container-fluid">
        <form method="post" action="../../controller/updateAux.php" style="padding:15px;" class="form contenedor container-lg-fluid ">
            <div class="container-fluid ">

                <table class="table table-bordered bg-light table-responsive mt-2">

                    <thead class="bg-secondary ">
                        <?php /* require_once("../../controller/searchUserActiv.php");  */?>
                        <tr class=" justify-content-between row" style="color:wheat;">

                            <td class="p-1 col-6 text-center">Nombre
                                <input type="text" class="p-1 ml-5 col-6 text-center" value="<?php /* if (isset($rowClient['nombre'])) {echo $rowClient['nombre']; }  */?> " name="nombre">
                            </td>
                            <td class="p-1 col-6 text-center">Apellido
                                <input type="text" class="p-1 ml-5 col-6 text-center" value="<?php /* if (isset($rowClient['apellido'])) {echo $rowClient['apellido']; }*/ ?> " name="apellido">
                            </td>
                            <td class="p-1 col-6 text-center">Teléfono
                                <input type="text" class="p-1 ml-5 col-6 text-center" value="<?php /* echo $rowClient['phone'] */ ?>" name="telefono">
                            </td>
                            <td class="p-1 col-6 text-center">Cargo Usuario
                                <select name="tipoRol" class="p-1  ml-2 col-6 text-center">
                                    <?php /* foreach ($seleccion4 as $datos) { */
                                    ?>
                                        <option value="<?php /* echo $datos['idRol'] */ ?>"><?php /* echo $datos['nameRol']  */?></option>
                                    <?php /*  } */ ?>
                                </select>
                            </td>
                            <td class="p-1 col-6 text-center">Estado Usuario
                                <select name="estado" class="p-1 ml-1 col-6 text-center" required>
                                    <?php /* foreach ($seleccion3 as $datos) { */
                                    ?>
                                        <option value="<?php /* echo $datos['id_status'] */ ?>">
                                            <?php /* echo $datos['nameStatus']  */?></option>
                                    <?php /* }  */?>
                                </select>


                            </td>
                            <td class="p-1 col-6 text-center">Correo Usuario

                                <input type="text" class="p-1 col-6 text-center" value="<?php /* if (isset($rowClient['email'])) { echo $rowClient['email'];} */ ?> " name="correo" disabled>
                            </td>
                            <td class="p-1 col-6 text-center">Contraseña
                                <input type="password" class="p-1 ml-4 col-6 text-center" value="<?php /* if (isset($rowClient['password'])) {echo $rowClient['password']; }*/ ?> " name="contrasenia">
                            </td>
                            <td class="p-1 col-6 text-center">Horario
                                <select name="horario" class="p-1 ml-5 col-6 text-center">
                                    <?php /* foreach ($seleccion5 as $datos) { */
                                    ?>
                                        <option value="<?php /* echo $datos['idHorarios'] */ ?>"><?php /* echo $datos['nameHorario']  */?></option>
                                    <?php /* }  */?>
                                </select>
                            </td>

                        </tr>

                    </thead>
                    <tbody>
                        <input type="number" value="<?php /* echo $idCli */ ?>" name="numDocument" class="text-center col-3" style="font-size: x-large; color:teal;" disabled>

                    </tbody>
                </table>
            </div>
            <input type="submit" class="col-auto btn-info ml-2 p-1" name="updateAux" value="Guardar">

        </form>
    </div>
</div>