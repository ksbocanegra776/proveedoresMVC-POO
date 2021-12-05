
    <div class="contenido">
        
        <div class="principalContainer limit">
            <div class="text-center">
                <h4> Actualizar Proveedores</h4>
                <?php require_once "view/roles/admin/navProveedor.view.php" ?>
            </div>
             <?php /* include_once("../../controller/searchProveeActiv.php");
            $Id = $rowProvee['idProveedor']; */
            ?>
            <div class="row container-lg-fluid">
            <div id="section1Prov">
                <form id="formulario ">
                    <h4 class="ml-5mt-2">Información en bases de datos</h4>
                    <div class="col-12 justify-content-center ">
                        <label class="col-5 " for="codProvee ">Codigo Proveedor:</label>
                        <input class="col-6 text-center ml-2 " type="text " id="codProvee " name="codProvee " value="<?php /* if (isset($rowProvee['idProveedor'])) {echo $rowProvee['idProveedor'];} */ ?>" disabled>
                    </div>
                    <div class="col-12 justify-content-center ">
                        <label class="col-5 " for="razonSocial ">Razón Social:</label>
                        <input class="col-6 text-center ml-2 " type="text " id="razonSocial " name="razonSocial " value="<?php /* if (isset($rowProvee['razonSocial'])) {echo $rowProvee['razonSocial']; }  */?> " disabled>
                    </div>
                    <div class="col-12 justify-content-center ">
                        <label class="col-5 " for="actiComercial ">Actividad
                            Comercial:</label>
                        <input class="col-6 text-center ml-2 " type="text " id="actividadcomercial " name="actividadcomercial " value="<?php /* if (isset($rowProvee['actividadcomercial'])) {  echo $rowProvee['actividadcomercial'];} */ ?> " disabled>
                    </div>
                    <div class="col-12 justify-content-center ">
                        <label class="col-5 " for="ciudad ">Ciudad :</label>
                        <input class="col-6 text-center ml-2 " type="text " id="ciudad "  name="ciudad " value="<?php /* if (isset($rowProvee['ciudad'])) {echo $rowProvee['ciudad']; } */ ?>" disabled>
                    </div>
                    <div class="col-12 justify-content-center ">
                        <label class="col-5 " for="departamento ">Departamento:</label>
                        <input class="col-6 text-center ml-2 " type="text " id="departamento " name="departamento " value="<?php /* if (isset($rowProvee['departamento'])) { echo $rowProvee['departamento'];} */ ?>" disabled>
                    </div>
                    <div class="col-12 justify-content-center ">
                        <label class="col-5 " for="direccion ">Dirección :</label>
                        <input class="col-6 text-center ml-2 " type="text " id="direccionEmpresa " name="direccionEmpresa " value="<?php /* if (isset($rowProvee['direccionEmpresa'])) {echo $rowProvee['direccionEmpresa']; }  */?>" disabled>
                    </div>
                    <div class="col-12 justify-content-center ">
                        <label class="col-5 " for="">Teléfono Empresa :</label>
                        <input class="col-6 text-center ml-2 " type="text " id="telefonoEmpresa " name="telefonoEmpresa " value="<?php /* if (isset($rowProvee['telefonoEmpresa'])) {echo $rowProvee['telefonoEmpresa'];} */ ?>" disabled>
                    </div>
                    <div class="col-12 justify-content-center " name="info ">
                        <label class="col-5 " for="tipoConvenio ">Tipo convenio:</label>
                        <input class="col-6 text-center ml-2 " type="text " id="tipoConvenio " name="tipoConvenio " value="<?php /* if (isset($rowProvee['nameConvenio'])) {echo $rowProvee['nameConvenio'];}  */?> " disabled>
                    </div>

                </form>
            </div>
            <div id="section2Prov">
                <form method="post" action="../../controller/controllerUpdateProv.php " class="col-auto" id="formulario ">
                    <h4>Campo de actualizaciones</h4>
                    <div class="col-12 justify-content-sm-center">
                        <label class="col-1  labelForm " for="idPro">⇒</label>
                        <td><input type="hidden" name="idP" value="<?php /* echo $Id */ ?>"></td>
                        <input class="col-8 text-center " type="text " id="idPro" name="idPro" value="<?php /* if (isset($rowProvee['idProveedor'])) { echo $rowProvee['idProveedor'];}  */?> " disabled>
                    </div>
                    <div class="col-12 justify-content-sm-center ">
                        <label class="col-1  labelForm " for="razonSocial ">⇒</label>
                        <input class="col-8 text-center" type="text " disabled placeholder="razon social" name="razonS " value="<?php /* if (isset($rowProvee['razonSocial'])) {echo $rowProvee['razonSocial']; } */ ?> ">
                    </div>
                    <div class="col-12 justify-content-sm-center ">
                        <label class="col-1 labelForm " for="actiComercial ">⇒
                        </label>
                        <input class="col-8 text-center " type="text " name="actiComercial" placeholder="actividad comercial" value="<?php /* if (isset($rowProvee['actividadcomercial'])) { echo $rowProvee['actividadcomercial'];}  */?>">
                    </div>
                    <div class="col-12 justify-content-sm-center ">
                        <label class="col-1  labelForm " for="city ">⇒</label>
                        <input class="col-8 text-center" type="text " name="city" placeholder="ciudad" value="<?php /* if (isset($rowProvee['ciudad'])) {echo $rowProvee['ciudad'];}  */?>">
                    </div>
                    <div class="col-12 justify-content-sm-center ">
                        <label class="col-1 labelForm " for="departament ">⇒
                        </label>
                        <input class="col-8 text-center" type="text " name="departament" placeholder="departamento" value="<?php /* if (isset($rowProvee['departamento'])) {echo $rowProvee['departamento'];}  */?>">
                    </div>
                    <div class="col-12 justify-content-sm-center ">
                        <label class="col-1  labelForm " for="direccion">⇒</label>
                        <input class="col-8 text-center" type="text " name="direc" placeholder="direccion" value="<?php /* if (isset($rowProvee['direccionEmpresa'])) { echo $rowProvee['direccionEmpresa'];}  */?>">
                    </div>
                    <div class="col-12 justify-content-sm-center ">
                        <label class="col-1  labelForm " for="telefono " id="">⇒</label>
                        <input class="col-8 text-center" type="text " name="telef" placeholder="telefono" value="<?php /* if (isset($rowProvee['telefonoEmpresa'])) {echo $rowProvee['telefonoEmpresa'];} */ ?>">
                    </div>
                    <div class="col-12 justify-content-sm-center " name="info">
                        <label class="col-1 labelForm " for="tipoConv">⇒</label>
                        <select name="tipoConv" class="col-8  text-center" required>
                            <?php /* foreach ($seleccion2 as $datos) { */
                            ?>
                                <option value="<?php /* echo $datos['idConvenio'] */ ?>"><?php /* echo $datos['nameConvenio'] */ ?></option>
                            <?php /* } */ ?>
                        </select>
                    </div>
                    <div class=" col-12 mt-2 ">
                        <button type="button" class="ml-2 col-auto btn btn-info p-1" onclick="location.href='?c=ModulsAdminController&a=searchProv'" target=" _self ">Regresar</button>
                        <input type="submit" name="saveUpdate" value="Guardar" class="ml-2 col-auto btn btn-success p-1 ">
                        <?php
                        if (isset($rowProvee['idProveedor'])) {
                            echo "<td><a href=\"?c=ModulsAdminController=a=creaAsesor?idProveedor=$rowProvee[idProveedor]\" class=' col-4 p-1  btn btn-secondary'>Cambiar Asesor</a></td>";
                        }
                        ?>

                    </div>
                </form>

            </div> 
            </div>
        </div>
    </div>
