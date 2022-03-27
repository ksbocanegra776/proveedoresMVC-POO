<div class="contenido">

    <div class="row mt-1 p-4">
        <button class="btn btn-secondary  col-1" onclick="location.href='?c=ModulsAdmincontroller&a=viewAsesor'" target="_self">Regresar</button>
        <h1 class="text-center col">Actualizar Asesores</h1>
    </div>
    <div class="container-lg-fluid ">
        <form action="?c=AsesorController&a=updateAsesor&idAsesor=<?php echo $asr['id_usuario']?>" method="post" style="padding:15px;" class="form contenedor container-lg-fluid ">
            <div class="col-12">
                <table class="table table-bordered bg-light text-center table-responsive">
                    <thead class="bg-secondary">
                        <tr class=" justify-content-between" style="color:wheat;">
                            <td class="p-2 col-3 text-center">Tipo Documento</td>
                            <td class="p-2 col-3 text-center">N° Documento</td>
                            <td class="p-2 col-3 text-center">Nombre</td>
                            <td class="p-2 col-3 text-center">Apellido</td>
                            <td class="p-2 col-4 text-center">Correo</td>
                            <td class="p-2 col-5 text-center">Teléfono</td>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td><select name="tipoDoc" class="p-1 w-40">
                                 <option value="CC">Cedula de Ciudadania</option>
                                 <option value="RUT">RUT</option>
                                 <option value="NIT">NIT</option>
                                 <option value="CE">Cedula de Extranjeria</option>
                             </select></td>
                            <td><input type="text" class="p-1 col-auto text-center" value="<?php echo $asr['numero_documento']?>" name="numDocumento"></td>
                            <td><input type="text" class="p-1 col-auto text-center" value="<?php echo $asr['nombre'] ?>" name="nombre"></td>
                            <td><input type="text" class="p-1 col-auto text-center" value="<?php  echo $asr['apellido']?>" name="apellido"></td>
                            <td><input type="text" class="p-1 col-auto text-center" value="<?php  echo $asr['email']?>" name="emailAsr"></td>
                            <td><input type="number" class="p-1 col-auto text-center" value="<?php echo $asr['telefono']  ?>" name="telefono"></td>
                            <input type="number" value="<?php echo $asr['id_usuario'] ?>" name="idAsesor" class="text-center col-auto " style="font-size: x-large; color:teal;">
                        </tr>
                    </tbody>

                    <input type="submit" class="col-auto btn-info m-3" name="updateAsesor" value="Guardar">
                </table>
        </form>
    </div>
</div>