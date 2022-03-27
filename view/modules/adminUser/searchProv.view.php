<nav>

    <div class="contenido">
        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi
                        bi-arrow-bar-right menu-bar icono" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0
                            .5.5h5.793l-2.147
                            2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0
                            0-.708l-3-3a.5.5 0
                            0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5
                            0 0
                            1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z" />
        </svg>
        <div class="principalContainer limit">
            <div class="text-center">
                <b>
                    <h3> Consultar Proveedores</h3>
                    <?php require_once "view/roles/admin/navProveedor.view.php" ?>
                </b>
                <?php require_once "controller/dictionaryException.php"?>
            </div>
               
            <div class="containerFormSearch">

                <div class="col-12 ">
                    <div style="width: 100%;">
                    
                       <div class="col-12" style="margin-left: 15%;margin-left: 1%;width: 180px !important;">
                            <?php require_once 'view/modules/adminUser/searcher.view.php';?>
                        </div> 
                        
                    <div class="row contenedorInfo p-3 " style="width: 90%;">     
                           <?php 
                             if (isset($_GET['proveedor'])) {
                                   $_POST = $proveedor = unserialize($_GET['proveedor']);
                              } ?>  
                            <form class=" ml-5 ">
                                <div class="col-auto justify-content-center">       
                                    Razón Social :
                                    <input class="col-auto text-center " type="text " id="razonSocial " name="razonSocial " value="<?php if(isset($proveedor['razon_social'])){ echo $proveedor['razon_social'];}  ?>" disabled><br>
                                     Tipo Documento:
                                    <br>
                                    <input class="col-auto text-center " type="text " id="tipoDoc " name="tipoDoc " value="<?php 
                                    if(isset($proveedor['cod_tipo_documento_prov'])){
                                     switch ($proveedor['cod_tipo_documento_prov']){
                                        
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
                                    } 
                                    ?>"disabled><br>
                                    Número Documento:
                                    <br>
                                    <input class="col-auto text-center " type="number " id="documento " name="documento " value="<?php if(isset($proveedor['numero_documento_prov'])){ echo $proveedor['numero_documento_prov'];} ?>" disabled><br>
                                    Actividad Comercial :<br>
                                    <input class="col-auto text-center " type="text " id="actividadcomercial " name="actividadcomercial " value="<?php if(isset($proveedor['cod_actividad_economica'])){ echo $proveedor['cod_actividad_economica'];}?> " disabled><br>

                                    Linea Provista :<br>
                                    <input class="col-12 text-center " type="text" id="lineaProvista" name="lineaProvista" value="<?php if(isset($proveedor['linea_provista'])){
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
                                            }
                          
                                    ?> "disabled><br>
                                    Ciudad:
                                    <br>
                                    <input class="col-auto text-center " type="text " id="ciudad " name="ciudad " value="<?php if(isset($proveedor['ciudad'])){ echo $proveedor['ciudad'];}  ?> " disabled><br>
                                    Departamento:
                                    <br>
                                    <input class="col-auto text-center " type="text " id="departamento " name="departamento " value=" <?php if(isset($proveedor['departamento'])){ echo $proveedor['departamento'];} ?>" disabled><br>
                                    Direccion:
                                    <br>
                                    <input class="col-auto text-center " type="text " id="direccionEmpresa " name="direccionEmpresa " value="<?php if(isset($proveedor['direccion'])){ echo $proveedor['direccion'];} ?> " disabled><br>
                                    Teléfono Empresa:
                                    <br>
                                    <input class="col-auto text-center " type="number " id="telefonoEmpresa " name="telefonoEmpresa " value="<?php if(isset($proveedor['telefonoProv'])){ echo $proveedor['telefonoProv'];}?> " disabled><br>
                                    Correo: <br>
                                    <input class="col-12 text-center " type="emailPro " id="emailPro" name="emailPro " value=" <?php if(isset($proveedor['emailPro'])){ echo $proveedor['emailPro'];}?>" disabled><br>
                                    Tipo convenio:<br>
                                    <input class="col-12 text-center " type="text" id="tipoConvenio" name="tipoConvenio" value="<?php if(isset($proveedor['id_convenio'])){
                                        
                                     switch ($proveedor['id_convenio']){ 
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

                                    }?>" disabled><br>
                                    Estado:
                                    <br>
                                    <input class="col-12 text-center " type="text" id="statusPro" name="statusPro" value="<?php 
                                        if(isset($proveedor['cod_estado_proveedor'])){
                                            switch ($proveedor['cod_estado_proveedor']){
                                                case 'Act':
                                                    echo 'Activo';
                                                    break;
                                                case 'In-Ac':
                                                    echo 'Inactivo';
                                                    break;
                                                case 'Pen':
                                                    echo 'Pendiente Aprobación';
                                                    break;
                                        }
   
                                       }?>" disabled><br>
                                    
                                    Fecha Inicio Convenio: <br>
                                    <input class="col-12 text-center " type="text" type="fechaInit" id="fechaInit" name="email " value=" <?php if(isset($proveedor['fechaInicio'])){ echo $proveedor['fechaInicio'];}?>" disabled><br>
                                </div>
                            
                            <div class="justify-content-center row mt-2">
                                <td>
                                    <a href="?c=ProveedorController&a=updateProv&id_proveedor=<?php if(isset($proveedor['id_proveedores'])){ echo $proveedor['id_proveedores'];} ?>" class='col-3 p-1 mt-1 ml-4 btn btn-outline-success'>Actualizar<a>
                                </td>
                                <td> 
                                       <a href="?c=ProveedorController&a=inacProv&idproveedor=<?php if(isset($proveedor['id_proveedores'])){ echo $proveedor['id_proveedores'];} ?>" class='col-3 p-1 mt-1 ml-2 btn btn-outline-info'>Inactivar<a>
                                </td>
                                <td> 
                                       <a href="?c=ProveedorController&a=deleteProv&id_proveedor=<?php if(isset($proveedor['id_proveedores'])){ echo $proveedor['id_proveedores'];} ?>" class='col-3 p-1 mt-1 ml-2 btn btn-outline-danger'>Eliminar<a>
                                </td>
           
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</nav>