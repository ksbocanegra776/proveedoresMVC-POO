<div class="contenido">

    <div class="row mt-1 p-4">
        <button class="btn btn-secondary  col-auto" onclick="location.href='?c=ModulsAdminController&a=users'" target="_self">Regresar</button>
        <h3 class="text-center col">Eliminación de usuarios</h3>
        
    </div>
    <?php /* require_once("../../controller/searchUserActiv.php") */ ?>

    <div class=" d-flex justify-content-center ">
        <div class="contenedor-fluid  table-responsive-lg " style="padding:15px;width: 90%;">
            <form method="post" action="" style="padding:15px;" class="form contenedor container-lg-fluid ml-5 ">
                <h4 ">¿Esta seguro de eliminar esta información ?</h4>
                        <div class=" container-fluid " >
                           
                            <table class=" table table-bordered bg-light mt-2 table-responsive "style=" display:block; overflow-x:auto;">
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
                            <td><input type="number " class="p-1 col-auto text-center " value="<?php /* if (isset($rowClient['numDocument'])) {echo $rowClient['numDocument'];} */ ?> " name="numDocument" disabled></td>
                            <td><input type="text " class="p-1 col-auto text-center " value="<?php /* if (isset($rowClient['nombre'])) {echo $rowClient['nombre'];} */ ?> " name="name" disabled></td>
                            <td><input type="text " class="p-1 col-auto text-center " value="<?php /* if (isset($rowClient['apellido'])) {echo $rowClient['apellido'];} */ ?> " name="lastName" disabled></td>
                            <td><input type="text " class="p-1 col-auto text-center " value="<?php /* if (isset($rowClient['phone'])) {echo $rowClient['phone']; } */ ?> " name="telefono" disabled></td>
                            <td><input type="email " class="p-1 col-auto text-center " value="<?php /* if (isset($rowClient['email'])) {echo $rowClient['email'];} */ ?> " name="email" disabled></td>
                            <td><input type="text " class="p-1 col-auto text-center " value="<?php /* if (isset($rowClient['nameRol'])) {echo $rowClient['nameRol'];}  */?> " name="rolCliente" disabled></td>
                            <td><input type="text " class="p-1 col-auto text-center " value="<?php /* if (isset($rowClient['nameStatus'])) {echo $rowClient['nameStatus'];}*/ ?> " name="estado" disabled></td>

                        </tr>
                      <!--   <div style="margin-left:10%;margin-top: 5px;">
                            <?php
                            echo "<td>" . "<a href=\"../../controller/deshabilitarCli.php?idCli=$idCli\"class='col-2 btn-danger m-3 p-2'>Eliminiar" . "</td></br>";
                            ?>
                        </div> -->
                    </tbody>

                    </table>
        </div>
    </div>
    </form>
</div>