<div class="contenido">

    <div class="row mt-1 p-4">
        <button class="btn btn-secondary  col-auto" onclick="location.href='?c=ModulsAdminController&a=viewAsesor'" target="_self">Regresar</button>
        <h3 class="text-center col">Eliminación de Asesor</h3>

    </div>

    <div class=" d-flex justify-content-center ">
        <div class="contenedor-fluid  table-responsive-lg " style="padding:15px;width: 90%;">
        <?php require_once "controller/dictionaryException.php"?>
            <form method="post" action="?c=AsesorController&a=deleteAsesor&idAsesor=<?php echo $asr['id_usuario']?>" style="padding:15px;" class="form contenedor container-lg-fluid ml-5 ">
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
                                <input type="number" value="<?php echo $asr['id_usuario']; ?>" name="idAsr" class="p-1 col-3 text-center" style="font-size: medium; color:navy; font-weigth:900;">
                                <td><input type="number " class="p-1 col-auto text-center " value="<?php echo $asr['numero_documento']; ?> " name="numDocument" disabled></td>
                                <td><input type="text " class="p-1 col-auto text-center " value="<?php echo $asr['nombre']; ?> " name="name" disabled></td>
                                <td><input type="text " class="p-1 col-auto text-center " value=" <?php echo $asr['apellido']; ?>" name="lastName" disabled></td>
                                <td><input type="text " class="p-1 col-auto text-center " value="<?php echo $asr['telefono']; ?>" name="telefono" disabled></td>
                                <td><input type="email " class="p-1 col-auto text-center " value="<?php echo $asr['email']; ?> " name="email" disabled></td>
                                <td><input type="text " class="p-1 col-auto text-center " value="<?php switch ($asr['cod_rol_usuario']) {
                                    case 'Asr':
                                        echo 'Asesor';
                                        break;
                                }
                               ?>" name="rolCliente" disabled></td>
                                <td><input type="text " class="p-1 col-auto text-center " value="<?php switch ($asr['cod_estado_usuario']) {
                                    case 'Act':
                                        echo 'Activo';
                                        break;
                                    case 'In-Ac':
                                        echo 'Inactivo';
                                        break;
                                    
                                } ?>" name="estado" disabled></td>
                           </tr>
                            <td>
                                <input type="submit" class="col-auto btn-danger" name="deleteAsr" value="Eliminar">
                            </td>
                         </tbody>

                    </table>
                </div>
        </div>
        </form>
    </div>