<div class="contenido">

    <div class="row mt-1 p-4">
        <button class="btn btn-secondary  col-auto" onclick="location.href='?c=ModulsAdminController&a=users'" target="_self">Regresar</button>
        <h3 class="text-center col">Eliminación de usuarios</h3>

    </div>

    <div class=" d-flex justify-content-center ">
        <div class="contenedor-fluid  table-responsive-lg " style="padding:15px;width: 90%;">
            <form method="post" action="?c=UserController&a=deleteUser&idUsuario=<?php echo $user->getIdUsuario()?>" style="padding:15px;" class="form contenedor container-lg-fluid ml-5 ">
                <h4>¿Esta seguro de eliminar esta información ?</h4>
                <div class=" container-fluid ">

                    <table class=" table table-bordered bg-light mt-2 table-responsive" style=" display:block; overflow-x:auto;">
                        <thead class="bg-secondary ">
                            <tr class=" justify-content-between " style="color:black; ">
                                <td class="col-1 text-center ">Documento</td>
                                <td class="col-2 text-center ">Nombre</td>
                                <td class="col-2 text-center ">Apellido</td>
                                <td class="col-2 text-center ">Teléfono</td>
                                <td class="col-3 text-center ">Email</td>
                                <td class="col-2 text-center ">Rol</td>
                                <td class="col-2 text-center ">Estado</td>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <input type="number" value="<?php echo $user->getIdUsuario(); ?>" name="idUsuario" class="p-1 col-3 text-center" style="font-size: medium; color:navy; font-weigth:900;">
                                <td><input type="number " class="p-1 col-auto text-center " value="<?php echo $user->getNumdocumento(); ?> " name="numDocument" disabled></td>
                                <td><input type="text " class="p-1 col-auto text-center " value="<?php echo $user->getNombre(); ?> " name="name" disabled></td>
                                <td><input type="text " class="p-1 col-auto text-center " value=" <?php echo $user->getApellido(); ?>" name="lastName" disabled></td>
                                <td><input type="text " class="p-1 col-auto text-center " value="<?php echo $user->getTelefono(); ?>" name="telefono" disabled></td>
                                <td><input type="email " class="p-1 col-auto text-center " value="<?php echo $user->getEmail(); ?> " name="email" disabled></td>
                                <td><input type="text " class="p-1 col-auto text-center " value="<?php echo $user->getRol(); ?>" name="rolCliente" disabled></td>
                                <td><input type="text " class="p-1 col-auto text-center " value="<?php echo $user->getStatus(); ?> " name="estado" disabled></td>
                            </tr>
                            <td>
                                <input type="submit" class="col-auto btn-danger" name="deleteUser" value="Eliminiar">
                            </td>

                        </tbody>

                    </table>
                </div>
        </div>
        </form>
    </div>