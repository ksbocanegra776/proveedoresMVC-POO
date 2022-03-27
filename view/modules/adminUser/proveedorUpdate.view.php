<div class="contenido">

    <div class="principalContainer limit">
        <div class="text-center">
            <h4> Actualizar Proveedores</h4>
            <?php require_once "view/roles/admin/navProveedor.view.php" ?>
        </div>
        <div class="row container-lg-fluid">
            <div id="section1Prov">
                <form id="formulario ">
                    <h4 class="ml-5mt-2">Información en bases de datos</h4>
                  
                        <div class="col-12 justify-content-center ">
                            <label class="col-5 " for="codProvee ">Codigo Proveedor:</label>
                            <input class="col-6 text-center ml-2 " type="text " id="codProvee " name="codProvee " value="<?php if (isset($proveedor['cod_proveedor'])) {echo $proveedor['cod_proveedor']; } ?>" disabled>
                        </div>
                        <div class="col-12 justify-content-center ">
                            <label class="col-5 " for="razonSocial ">Razón Social:</label>
                            <input class="col-6 text-center ml-2 " type="text " id="razonSocial " name="razonSocial " value="<?php if (isset($proveedor['razon_social'])) { echo $proveedor['razon_social']; }  ?> " disabled>
                        </div>
                        <div class="col-12 justify-content-center ">
                            <label class="col-5 " for="actiComercial ">Actividad
                                Comercial:</label>
                            <input class="col-6 text-center ml-2 " type="text " id="actividadcomercial " name="actividadcomercial " value="<?php if (isset($proveedor['cod_actividad_economica'])) { echo $proveedor['cod_actividad_economica']; }  ?> " disabled>
                        </div>
                        <div class="col-12 justify-content-center ">
                            <label class="col-5 " for="lineaProvista ">Linea Provista:</label>
                            <input class="col-6 text-center ml-2 " type="text " id="lineaProvista " name="lineaProvista " value="<?php 
                            if (isset($proveedor['linea_provista'])) { 
                                switch ($proveedor['linea_provista']){ 
                                                case 'h-N/A':
                                                    echo 'No Aplica';
                                                    break;
                                                case 'h-Per':
                                                    echo 'Perecederos';
                                                    break;
                                                case 'h-Lic':
                                                    echo 'Licores';
                                                    break;
                                                case 'h-Con':
                                                    echo 'Consumo';
                                                    break;
                                                case 'h-Car':
                                                    echo 'Cárnicos';
                                                    break;
                                                case 'h-Med':
                                                    echo 'Farmacéuticos';
                                                    break;
                                                case 'h-Bel':
                                                    echo 'Belleza';
                                                    break;
                                                case 'h-Mtt':
                                                    echo 'Suministros';
                                                    break;
                                                case 'h-tex':
                                                    echo 'Textiles';
                                                    break;
                                                
                                                    }
                                            }?>" disabled>
                        </div>
                        <div class="col-12 justify-content-center ">
                            <label class="col-5 " for="ciudad ">Ciudad :</label>
                            <input class="col-6 text-center ml-2 " type="text " id="ciudad " name="ciudad " value="<?php if (isset($proveedor['ciudad'])) { echo $proveedor['ciudad']; } ?>" disabled>
                        </div>
                        <div class="col-12 justify-content-center ">
                            <label class="col-5 " for="departamento ">Departamento:</label>
                            <input class="col-6 text-center ml-2 " type="text " id="departamento " name="departamento " value="<?php if (isset($proveedor['departamento'])) { echo $proveedor['departamento']; } ?>" disabled>
                        </div>
                        <div class="col-12 justify-content-center ">
                            <label class="col-5 " for="direccion ">Dirección :</label>
                            <input class="col-6 text-center ml-2 " type="text " id="direccionEmpresa " name="direccionEmpresa " value="<?php if (isset($proveedor['direccion'])) { echo $proveedor['direccion']; } ?>" disabled>
                        </div>
                        <div class="col-12 justify-content-center ">
                            <label class="col-5 " for="">Teléfono Empresa :</label>
                            <input class="col-6 text-center ml-2 " type="text " id="telefonoEmpresa " name="telefonoEmpresa " value="<?php if (isset($proveedor['telefonoProv'])) {echo $proveedor['telefonoProv']; }  ?>" disabled>
                        </div>
                        <div class="col-12 justify-content-center ">
                            <label class="col-5 " for="">Correo Empresa :</label>
                            <input class="col-6 text-center ml-2 " type="text " id="emailPro " name="emailPro " value="<?php if (isset($proveedor['emailPro'])) {echo $proveedor['emailPro']; }  ?>" disabled>
                        </div>
                        <div class="col-12 justify-content-center " name="info ">
                            <label class="col-5 " for="tipoConvenio">Tipo convenio:</label>
                            <input class="col-6 text-center ml-2 " type="text " id="tipoConvenio" name="tipoConvenio" value="<?php 
                            if (isset($proveedor['id_convenio'])) 
                            {switch ($proveedor['id_convenio']) {
                                case 'Crdt':
                                    echo 'Pago credito';
                                    break;
                                case 'Cntd':
                                    echo 'Pago de contado';
                                    break;
                                case 'Antcp':
                                    echo 'Pago anticipado';
                                    break;
                            }
                        }  ?>" disabled>
                        </div>
                 
                </form>
            </div>
            <div id="section2Prov">
                <form method="post" action="?c=ProveedorController&a=updateProv" class="col-auto" id="formulario ">
                    <h4>Campo de actualizaciones</h4>
                   
                    <div class="col-12 justify-content-sm-center">
                        <label class="col-1  labelForm " for="codProvee">⇒</label>
                        <input class="col-8 text-center " type="text " disabled id="codProvee" name="codProvee" value="<?php if (isset($proveedor['cod_proveedor'])) {echo $proveedor['cod_proveedor']; }?> " >
                    </div>
                    <div class="col-12 justify-content-sm-center ">
                        <label class="col-1  labelForm " for="razonSocial ">⇒</label>
                        <input class="col-8 text-center" type="text " disabled placeholder="razon social" name="razonS " value="<?php if (isset($proveedor['razon_social'])) { echo $proveedor['razon_social']; }?> ">
                    </div>
                    <div class="col-12 justify-content-sm-center ">
                        <label class="col-1 labelForm " for="actiComercial ">⇒
                        </label>
                        <input class="col-8 text-center" type="text " id="actividadcomercial " name="actividadcomercial " value="<?php if (isset($proveedor['cod_actividad_economica'])) { echo $proveedor['cod_actividad_economica']; }  ?> " disabled>
                    </div>
                    <div class="col-12 justify-content-sm-center ">
                        <label class="col-1 labelForm " for="lineaProvista">⇒
                        </label>
                        <input class="col-8 text-center" type="text " id="lineaProvista " name="lineaProvista " value="<?php if (isset($proveedor['linea_provista'])) {
                              switch ($proveedor['linea_provista']){ 
                                case 'h-N/A':
                                    echo 'No Aplica';
                                    break;
                                case 'h-Per':
                                    echo 'Perecederos';
                                    break;
                                case 'h-Lic':
                                    echo 'Licores';
                                    break;
                                case 'h-Con':
                                    echo 'Consumo';
                                    break;
                                case 'h-Car':
                                    echo 'Cárnicos';
                                    break;
                                case 'h-Med':
                                    echo 'Farmacéuticos';
                                    break;
                                case 'h-Bel':
                                    echo 'Belleza';
                                    break;
                                case 'h-Mtt':
                                    echo 'Suministros';
                                    break;
                                case 'h-tex':
                                    echo 'Textiles';
                                    break;
                                
                                    } }  ?> " disabled>
                    </div>  
                    <div class="col-12 justify-content-sm-center ">
                        <label class="col-1  labelForm " for="city ">⇒</label>
                        <input class="col-8 text-center" type="text " name="city" placeholder="ciudad" value="<?php if (isset($proveedor['ciudad'])) { echo $proveedor['ciudad']; } ?>">
                    </div>
                    <div class="col-12 justify-content-sm-center ">
                        <label class="col-1 labelForm " for="departamento ">⇒
                        </label>
                        <input class="col-8 text-center" type="text " name="departamento" placeholder="departamento" value="<?php if (isset($proveedor['departamento'])) { echo $proveedor['departamento']; } ?>">
                    </div>
                    <div class="col-12 justify-content-sm-center ">
                        <label class="col-1  labelForm " for="direccion">⇒</label>
                        <input class="col-8 text-center" type="text " name="direccion" placeholder="direccion" value="<?php if (isset($proveedor['direccion'])) { echo $proveedor['direccion']; } ?>">
                    </div>
                    <div class="col-12 justify-content-sm-center ">
                        <label class="col-1  labelForm " for="infotel " id="">⇒</label>
                        <input class="col-8 text-center" type="text " name="infotel" placeholder="telefono" value="<?php if (isset($proveedor['telefonoProv'])) {echo $proveedor['telefonoProv']; }?>">
                    </div>
                    <div class="col-12 justify-content-sm-center ">
                        <label class="col-1  labelForm " for="emailPro " id="">⇒</label>
                        <input class="col-8 text-center" type="text " name="emailPro" placeholder="emailPro" value="<?php if (isset($proveedor['emailPro'])) {echo $proveedor['emailPro']; }?>">
                    </div>
                    <div class="col-12 justify-content-sm-center " name="info">
                        <label class="col-1 labelForm " for="tipoConv">⇒</label>
                     <select name="tipoConv" class="col-8 text-center" >
                                 <option value="Cntd">Pago de contado</option>
                                 <option value="Antcp">Pago anticipado</option>
                                 <option value="Crdt">Pago credito</option>
                     </select>
                    </div>
                    <input type="hidden" value="<?php  echo $proveedor['id_proveedores'] ?>" name="idprov" class="p-1 col-3 text-center" style="font-size: medium; color:navy; font-weigth:900;">
                    <div class=" col-12 mt-2 ">
                      
                        <button type="button" class="ml-2 col-auto btn btn-info p-1" onclick="location.href='?c=ModulsAdminController&a=searchResponseProv'" target=" _self ">Regresar</button>
                        <input type="submit" name="saveUpdate" value="Guardar" class="ml-2 col-auto btn btn-success p-1 ">
                        <?php
                        if (isset($proveedor['id_proveedores'])) {
                            echo "<td><a href=\"?c=ModulsAdminController&a=creaAsesorNew&idProveedor=$proveedor[id_proveedores]&rS=$proveedor[razon_social]\" class=' col-auto p-1  btn btn-secondary'>Cambiar Asesor</a></td>";
                        }
                        ?>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>