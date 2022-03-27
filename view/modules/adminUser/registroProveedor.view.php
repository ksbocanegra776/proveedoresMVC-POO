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
             <h2> Agregar Nuevo proveedor</h2>
             <?php require_once "view/roles/admin/navProveedor.view.php" ?>
         </div> 
          <?php require_once "controller/dictionaryException.php"?>
         <div class="row container-lg-fluid">

             <form action="?c=ProveedorController&a=addProveAsesor" method="post" class="col-12 ml-2" id="formulario">
                 <table class="mt-2">
                     <td class="table-tbody">

                         <div class="col-12 justify-content-sm-center">
                         <label for="tipoDoc" class="col-4 labelForm">Tipo documento:</label>
                             
                          <select name="tipoDoc" class=" w-40">
                                 <option value="C-N/A">No Asignado</option>
                                 <option value="CC">Cedula de Ciudadania</option>
                                 <option value="RUT">RUT</option>
                                 <option value="NIT">NIT</option>
                                 <option value="CE">Cedula de Extranjeria</option>
                             </select>   
                         </div>
                         <div class="col-12 justify-content-sm-center">
                             <label class="col-4 " for="documentoPro" id="">Número
                                 Documento:</label>
                             <input class="col-7" type="number" id="documentoPro" name="documentoPro" >
                         </div>
                         <div class="col-12 justify-content-sm-center">
                             <label class="col-4 labelForm" for="razonSocial" id="">Razón Social:</label>
                             <input class="col-7" type="text" id="razonSocial" name="razonSocial" >

                         </div>
                         <div class="col-12 justify-content-sm-center">
                             <label class="col-4 labelForm" for="codProv" id="">Codigo Proveedor:</label>
                             <input class="col-7" type="text" id="codProv" name="codProv"  placeholder="cod:siglas más 3 digitos documento">

                         </div>
                         <div class="col-12 justify-content-sm-center">
                             <label class="col-4 labelForm" for="actiComercial" id="">Actividad
                                 Comercial:</label>
                             <select name="actiComercial" class=" w-40" >
                                 <option value="C-N/A">No Aplica</option>
                                 <option value="4642">Abastecimiento de textiles</option>
                                 <option value="4645">Abastecimiento medicamentos/belleza</option>
                                 <option value="4663">Comercio ferreterias</option>
                                 <option value="4719">Abastecimiento Canasta</option>
                                 <option value="4722">Abastecimiento Lacteos</option>
                                 <option value="4723">Abastecimiento Carnicos</option>
                                 <option value="4724">Abastecimiento Licores</option>
                                 <option value="4755">Abastecimiento Enseres cocina</option>

                             </select>
                         </div>
                         <div class="col-12 justify-content-sm-center">
                             <label class="col-4 labelForm" for="lineaTrabajo" id="">Linea Trabajo:</label>
                             <select name="lineaTrabajo" class=" w-40" >
                                 <option value="C-N/A">No Aplica</option>
                                 <option value="h-Per">Perecederos</option>
                                 <option value="h-Lic">Licores</option>
                                 <option value="h-Con">Consumo (Primera Necesidad)</option>
                                 <option value="h-Car">Carnicos</option>
                                 <option value="h-Med">Farmaceuticos</option>
                                 <option value="h-Bel">Belleza</option>
                                 <option value="h-Mtt">Suministros (ferreteria)</option>
                                 <option value="h-tex">Textiles</option>

                             </select>
                         </div>
                         <div class="col-12 justify-content-sm-center">
                             <label class="col-4 labelForm" for="city" id="">Ciudad:</label>
                             <input class="col-7" type="text" id="city" name="city" >
                         </div>
                         <div class="col-12 justify-content-sm-center">
                             <label class="col-4 labelForm" for="departamento" id="">Departamento:</label>
                             <input class="col-7" type="text" id="departamento" name="departamento" >
                         </div>
                         <div class="col-12 justify-content-sm-center">
                             <label class="col-4 labelForm" for="address" id="">Dirección:</label>
                             <input class="col-7" type="text" id="address" name="address" >
                         </div>
                         <div class="col-12 justify-content-sm-center">
                             <label class="col-4 labelForm" for="infotel" id="">Teléfono Empresa:</label>
                             <input class="col-7" type="text" id="" name="infotel" >
                         </div>
                         <div class="col-12 justify-content-sm-center">
                             <label class="col-4 labelForm" for="emailPro" id="">Email Empresa:</label>
                             <input class="col-7" type="emailPro" id="emailPro" name="emailPro" >
                         </div>
                         <div class="col-12 justify-content-sm-center">
                             <label for="tipoDocAsr" class="col-4 labelForm">Tipo documento Asesor:</label>
                             <select name="tipoDocAsr" class=" w-40">
                                 <option value="C-N/A">No Asignado</option>
                                 <option value="CC">Cedula de Ciudadania</option>
                                 <option value="RUT">RUT</option>
                                 <option value="NIT">NIT</option>
                                 <option value="CE">Cedula de Extranjeria</option>
                             </select>
                         </div>
                         <div class="col-12 justify-content-sm-center">

                             <label class="col-4" for="documentoAse">N° Documento Asesor</label>

                             <input id="documentoAse" class="col-6" name="documentoAse" type="number" placeholder=" numero de documento Asesor">
                         </div>
                         <div class="col-12 justify-content-sm-center">
                             <label class="col-4 labelForm" for="asesorName" id="">Asesor Comercial
                                 Nombre:</label>
                             <input class="col-7" type="text" id="asesorName" name="asesorName" >
                         </div>
                         <div class="col-12 justify-content-sm-center">
                             <label class="col-4 labelForm" for="asesorLastName" id="">Asesor Comercial
                                 Apellido:</label>
                             <input class="col-7" type="text" id="asesorLastName" name="asesorLastName" >
                         </div>
                         <div class="col-12 justify-content-sm-center">
                             <label class="col-4 labelForm" for="asesorCode" id=""> Código Asesor:</label>
                             <input class="col-7" type="text" id="asesorCode"  name="asesorCode" placeholder="cod: siglas + 4 digitos dosumento">
                         </div>
                         <div class="col-12 justify-content-sm-center">
                             <label class="col-4 labelForm" for="correoAsesor" id="">Correo
                                 Asesor:</label>
                             <input class="col-7" type="email" id="correoAsesor" name="correoAsesor" >
                         </div>
                         <div class="col-12 justify-content-sm-center">
                             <label class="col-4 labelForm" for="celPhone" id="">Celular Asesor:</label>
                             <input class="col-7" type="number" id="celPhone" name="celPhone" >
                         </div>
                         <div class="col-12 justify-content-sm-center">
                             <label class="col-4 labelForm" for="dateInit" id="">Fecha inicio
                                 actividad:</label>
                             <input class="col-7" type="date" id="dateInit" name="dateInit" >
                         </div>

                         <div class="col-12 justify-content-sm-center">
                             <label class="col-4 labelForm" for="typeStatus" id="">Estado
                                 Proveedor:</label>
                             <select name="typeStatus" class=" w-40">
                                 <option value="Act">Activo</option>
                                 <option value="In-Ac">Inactivo</option>
                                 <option value="Pen">Pendiente</option>
                             </select>
                         </div>
                         <div class="col-12 justify-content-sm-center" name="info">
                             <label class="col-4" for="tipoConvenio" id="">Tipo convenio:</label>
                             <select name="tipoConvenio" class=" w-40" >

                                 <option value="C-N/A">No Aplica</option>
                                 <option value="Cntd">Pago de contado</option>
                                 <option value="Antcp">Pago anticipado</option>
                                 <option value="Crdt">Pago credito</option>

                             </select>
                         </div>

                     </td>
                 </table>
                 <div>
                     <input type="submit" name="guardar" value="Guardar" class="btn btn-success col-2 m-2"></br>
                 </div>
             </form>
         </div>
     </div>
 </div>