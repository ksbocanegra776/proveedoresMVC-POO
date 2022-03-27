<div class="contenido">

    <div class="row mt-1 p-4">
        <button class="btn btn-secondary  col-auto" onclick="location.href='?c=UserController&a=listar'" target="_self">Regresar</button>
        <h2 class="text-center col">Actualizar Usuario</h2>
    </div>

    <div class="container-fluid">
        <form method="post" action="?c=UserController&a=updateUser" id="update" style="padding:15px;" class="form contenedor container-lg-fluid ">
            <div class="container-fluid ">

                <table class="table table-bordered bg-light table-responsive mt-2">

                    <thead class="bg-secondary ">
                        <label for="password" style="margin-left: 8%;"> ITEM</label>
                        <input type="number" value="<?php echo $user->getIdUsuario(); ?>" name="idUsuario" class="p-1 ml-5 col-3 text-center" style="font-size: medium; color:navy; font-weigth:900;">

                        <tr class=" justify-content-between row" style="color:wheat;">
                            <td class="p-1 col-6 text-center">
                                <label for="password" style="margin-left: -1%;"> Documento</label>
                                <input type="text" value="<?php echo $user->getNumdocumento(); ?>" name="numDocumento" class="p-1 col-6 text-center" style="font-size:medium; color:navy; font-weigth:900;margin-left: 5%;">
                            </td>
                            <td class="p-1 col-6 text-center"> Tipo Doc
                                <select name="tipoDoc" class="p-1 ml-5 col-6 text-center" style="font-size:medium; color:navy;" required>

                                    <option><?php switch ($user->getTipoDoc()) {
                                                case 'C-N/A':
                                                    echo 'No Asignado';
                                                    break;
                                                case 'CC':
                                                    echo 'Cedula Ciudadania';
                                                    break;
                                                case 'CE':
                                                    echo 'Cedula Extrangeria';
                                                    break;
                                                case 'RUT':
                                                    echo 'Registro Unico Tributario';
                                                    break;
                                                case 'NIT':
                                                    echo 'Numero Identificacion Tributaria';
                                                    break;
                                            }
                                            ?></option>
                                </select>
                            </td>
                        </tr>
                        <tr class=" justify-content-between row" style="color:wheat;">

                            <td class="p-1 col-6 text-center">Nombre
                                <input type="text" value="<?php echo $user->getNombre(); ?>" name="nombre" class="p-1 ml-5 col-6 text-center">
                            </td>
                            <td class="p-1 col-6 text-center">Apellido
                                <input type="text" class="p-1 ml-5 col-6 text-center" value="<?php echo $user->getApellido(); ?>" name="apellido">
                            </td>
                            <td class="p-1 col-6 text-center">Teléfono
                                <input type="text" class="p-1 ml-5 col-6 text-center" value="<?php echo $user->getTelefono(); ?>" name="telefono">
                            </td>
                            <td class="p-1 col-6 text-center">Cargo Usuario
                                <select name="tipoRol" class="p-1 ml-1 col-6 text-center">
                                    <option value="R-N/A">No Aplica</option>
                                    <option value="Admin">Administrador</option>
                                    <option value="Aux">Auxiliar</option>

                                </select>
                            </td>
                            <td class="p-1 col-6 text-center">Estado Usuario
                                <select name="status" class="p-1 ml-1 col-6 text-center" required>

                                    <option value="Act">Activo</option>
                                    <option value="In-Ac">Inactivo</option>
                                    <option value="Pen">Pendiente</option>

                                </select>
                            </td>
                            <td class="p-1 col-6 text-center">Correo Usuario

                                <input type="text" class="p-1 col-6 text-center" value="<?php echo $user->getEmail(); ?> " name="email">
                            </td>
                            <td class="p-1 col-6 text-center">Contraseña
                                <input type="password" class="p-1 ml-4 col-6 text-center" value="<?php echo $user->getPass(); ?> " name="password">
                            </td>
                            <td class="p-1 col-6 text-center">
                                <label for="password2" style="margin-left: -6%;"> Validar Contraseña</label>
                                <input id="password2" name="password2" class="p-1 col-6 text-center" value="<?php echo $user->getPass(); ?> " type="password">
                            </td>
                            <td class="p-1 col-6 text-center">Horario Usuario
                                <select name="horario" class="p-1 col-6 text-center">
                                    <option value="h-N/A">No Aplica</option>
                                    <option value="h-Man">Mañana</option>
                                    <option value="h-Tar">Tarde</option>
                                    <option value="h-Rot">Rotativo</option>
                                </select>
                            </td>
                            <td class="p-1 col-6 text-center ">Pregunta 1
                                <input id="question1" name="question1" type="text" class="p-1 ml-4 col-6 text-center" value="<?php echo $user->getQuestion1(); ?>">

                            </td>
                            <td class="p-1 col-6 text-center ">Pregunta 2
                                <input id="question2" name="question2" type="text" class="p-1 ml-4 col-6 text-center" value="<?php echo $user->getQuestion2(); ?>">
                            </td>
                            <td class="p-1 col-6 text-center ">Pregunta 3
                                <input id="question3" name="question3" type="text" class="p-1 ml-4 col-6 text-center" value="<?php echo $user->getQuestion3(); ?>">
                            </td>
                        </tr>

                    </thead>
                </table>
            </div>
            <input type="submit" class="col-auto btn-info ml-2 p-1" name="updateUser" value="Actualizar">

        </form>
    </div>
</div>