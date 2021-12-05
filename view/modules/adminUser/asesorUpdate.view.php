<div class="contenido">

    <div class="row mt-1 p-4">
        <button class="btn btn-secondary  col-1" onclick="location.href='?c=ModulsAdmincontroller&a=viewAsesor'" target="_self">Regresar</button>
        <h1 class="text-center col">Actualizar Asesores</h1>
    </div>
    <div class="container-lg-fluid ">
        <form action="../../controller/updateAs.php" method="post" style="padding:15px;" class="form contenedor container-lg-fluid ">
            <div class=" ">
                <table class="table table-bordered bg-light text-center table-responsive">
                    <thead class="bg-secondary">
                        <tr class=" justify-content-between" style="color:wheat;">
                            <td class="p-2 col-3 text-center">Nombre</td>
                            <td class="p-2 col-3 text-center">Apellido</td>
                            <td class="p-2 col-4 text-center">Correo</td>
                            <td class="p-2 col-5 text-center">Teléfono</td>

                        </tr>
                    </thead>
                    <?php
                  /*   include_once("../../controller/searchAsesorActiv.php"); */
                    ?>
                    <tbody>
                        <tr>
                            <td> <input type="text" class="p-1 col text-center" value="<?php /* echo $row['nombre'] */ ?>" name="nombre"></td>
                            <td><input type="text" class="p-1 col text-center" value="<?php /*  echo $row['apellido']   */?>" name="apellido"></td>
                            <td><input type="text" class="p-1 col text-center" value="<?php /*  echo $row['correo']  */ ?>" name="correo" disabled></td>
                            <td><input type="number" class="p-1 col text-center" value="<?php /* echo $row['telefono']  */ ?>" name="telefono"></td>
                            <input type="number" value="<?php /* echo $row['idAsesor'] */ ?>" name="idAs" class="text-center w-50 " style="font-size: x-large; color:teal;">
                        </tr>
                    </tbody>

                    <input type="submit" class="col-auto btn-info m-3" name="updateAsesor" value="Guardar">
                </table>
        </form>
    </div>
</div>