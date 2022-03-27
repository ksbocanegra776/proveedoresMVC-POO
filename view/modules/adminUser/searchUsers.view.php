<div class="contenido">
<div class="row mt-1 p-4">
        <button class="btn btn-secondary  col-auto" onclick="location.href='?c=ModulsAdminController&a=users'" target="_self">Regresar</button>
        <h2 class="text-center col">Lista de usuarios</h2>

        <?php require_once "controller/dictionaryException.php"?>
    </div>
    <div class="section2User mt-3 ml-5">

        <table class="table table-striped table-dark table-hover table-responsive ">
            <thead class="thead-dark">
                <tr class="col-12 m-1">
                    <td class="col-auto text-center">ITEM</td>
                    <td class="col-auto text-center">Tipo Documento</td>
                    <td class="col-auto text-center">Doc</td>
                    <td class="col-auto text-center">Nombre</td>
                    <td class="col-auto text-center">Apellido</td>
                    <td class="col-8 text-center">Correo</td>
                    <td class="col-auto text-center">Teléfono</td>
                    <td class="col-auto text-center">Cargo</td>
                    <td class="col-auto text-center">Horario</td>
                    <td class="col-auto text-center">Estado</td>
                    <td class="col-12 text-center">Acción</td>
                    <td class="col-12 text-center">Acción</td>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td> <?php echo $user->getIdUsuario(); ?></td>
                        <td> <?php switch ($user->getTipoDoc()){
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
                           ?></td>
                        
                        <td> <?php echo $user->getNumdocumento(); ?></td>
                        <td> <?php echo $user->getNombre(); ?></td>
                        <td> <?php echo $user->getApellido(); ?></td>
                        <td> <?php echo $user->getEmail(); ?></td>
                        <td> <?php echo $user->getTelefono(); ?></td>
                        <td> <?php switch ($user->getRol()) {
                                    case 'R-N/A':
                                        echo 'No Aplica';
                                        break;
                                    case 'Admin':
                                        echo 'Administrador';
                                        break;
                                    case 'Aux':
                                        echo 'Auxiliar';
                                        break;
                                    case 'Asr':
                                        echo 'Asesor';
                                        break;
                                }
                                ?></td>
                        <td> <?php switch ($user->getHorario()) {
                                    case 'h-N/A':
                                        echo 'No Aplica';
                                        break;
                                    case 'h-Man':
                                        echo 'Mañana';
                                        break;
                                    case 'h-Tar':
                                        echo 'Tarde';
                                        break;
                                    case 'h-Rot':
                                        echo 'Rotativo';
                                        break;
                                } ?></td>
                        <td> <?php switch ($user->getStatus()) {
                                    case 'Act':
                                        echo 'Activo';
                                        break;
                                    case 'In-Ac':
                                        echo 'Inactivo';
                                        break;
                                    case 'Pen':
                                        echo 'Pendiente';
                                        break;
                                    case 'Canc':
                                        echo 'Cancelado';
                                        break;
                                    case 'Re-Ag':
                                        echo 'Reagendar';
                                        break;
                                    case 'Agen':
                                        echo 'Agendado';
                                        break;
                                } ?></td>
                        <td><a href="?c=UserController&a=updateUser&id_usuario=<?php echo $user->getIdUsuario(); ?>" class="col-12 p-1 mt-1 btn btn-outline-success">Actualizar<a></td>
                        <td><a href="?c=UserController&a=deleteUser&id_usuario=<?php echo $user->getIdUsuario(); ?>" class='col-12 p-1 mt-1 btn btn-outline-danger'>Eliminar<a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>