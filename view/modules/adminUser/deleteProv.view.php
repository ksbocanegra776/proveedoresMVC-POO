<div class="contenido">

    <div class="row mt-1 p-4">
        <button class="btn btn-secondary  col-auto" onclick="location.href='?c=ModulsAdminController&a=searchResponseProv'" target="_self">Regresar</button>
        <h3 class="text-center col">Eliminación de Proveedor</h3>

    </div>

    <div class=" d-flex justify-content-center ">
        <div class="contenedor-fluid  table-responsive-lg " style="padding:15px;width: 90%;">
            <form method="post" action="?c=ProveedorController&a=deleteProv&id_proveedor=<?php  if(isset($proveedor['id_proveedores'])){ echo $proveedor['id_proveedores'];}  ?>" style="padding:15px;" class="form contenedor container-lg-fluid ml-5 ">
                <h4>¿Esta seguro de eliminar esta información ?</h4>
                <div class=" container-fluid ">

                    <table class=" table table-bordered bg-light mt-2 table-responsive " style=" display:block; overflow-x:auto;">
                        <thead class="bg-secondary ">
                            <tr class=" justify-content-between " style="color:black; ">
                                <td class="col-1 text-center ">Documento Empresa</td>
                                <td class="col-2 text-center ">Razon Social</td>
                                <td class="col-2 text-center ">Actividad Economica</td>
                                <td class="col-2 text-center ">Linea Trabajo</td>
                                <td class="col-3 text-center ">Email</td>
                                <td class="col-2 text-center ">Estado</td>
                                <td class="col-2 text-center ">convenio</td>

                            </tr>
                        </thead>
                        
                        <tbody>
                        
                              
                             <tr>
                                <input type="number" value="<?php  echo $proveedor['id_proveedores'] ?>" name="idproveedor" class="p-1 col-3 text-center" style="font-size: medium; color:navy; font-weigth:900;"disabled>
                                <td><input type="number " class="p-1 col-auto text-center " value="<?php echo $proveedor['numero_documento_prov']?> " name="documentoPro" disabled></td>
                                <td><input type="text " class="p-1 col-auto text-center " value="<?php echo $proveedor['razon_social'] ?> " name="razonSocial" disabled></td>
                                <td><input type="text " class="p-1 col-auto text-center " value=" <?php echo $proveedor['cod_actividad_economica']?>" name="actiComercial" disabled></td>
                                <td><input type="text " class="p-1 col-auto text-center " value="<?php echo $proveedor['linea_provista']?>" name="lineaTrabajo" disabled></td>
                                <td><input type="email " class="p-1 col-auto text-center " value="<?php echo $proveedor['emailPro'] ?> " name="email" disabled></td>
                                <td><input type="text " class="p-1 col-auto text-center " value="<?php echo $proveedor['cod_estado_proveedor']?>" name="statusPro" disabled></td>
                                <td><input type="text " class="p-1 col-auto text-center " value="<?php echo $proveedor['id_convenio']?> " name="tipoConvenio" disabled></td>
                            </tr>
                             
                            <td>
                                <input type="submit" class="col-auto btn-danger" name="deleteProv" value="Eliminiar">
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>