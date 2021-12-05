
<nav class="contenido">

    <div class="row  contenedorInfo justify-content-center"style="margin-left:15%;" >
        <div class=" p-2">
            <div class="row container-fluid  ml-5 mt-5" >
                <div class="justify-content-center ml-5" >
                    <h2 class="text-center">Creación de nuevo asesor comercial</h2>
                    <?php /* require_once "view/roles/admin/navProveedor.view.php"  */?>
                </div>
               
                    <?php 
                       /*  require_once('../../controller/searchProveeActiv.php'); */
                    ?>
                    <form action="../../controller/saveAsesor.php" method="post" class="col-12 embed-responsive"  id="formulario">
                        <div class="ml-5">
                            <div class="col-12 justify-content-sm-center ">
                                <label for="codAsesor " class="col-4 labelForm ">Codigo Asesor:</label>
                                <input id="codAsesor " name="codAsesor" class="col-4 text-center "  type="text" value="<?php /* echo $idAsesorNuevo */ ?>">
                            </div>
                            <div class="col-12 justify-content-center ">
                                <label class="col-4 labelForm" for="idProveedor">Id Empresa:</label>
                                <input class="col-4 text-center "  type="number" name="idProveedor" value="<?php /* echo $id */?>" ><br>
                            </div>
                            <div class="col-12 justify-content-center ">
                                <label class="col-4  labelForm" for="razonS" id="">Razon Social:</label>
                                <input class="col-4 text-center " type="text" id="razonS" name="razonS" value="<?php /* if (isset($rowProvee['razonSocial'])) {echo $rowProvee['razonSocial'];} */ ?>" disabled>
                            </div>
                            
                            <div class="col-12 justify-content-center ">
                                <label class="col-4  labelForm" for="asesorN" id="">Asesor Nombre:</label>
                                <input class="col-4 text-center "  type="text" id="asesorN" name="asesorN">
                            </div>
                            <div class="col-12 justify-content-center ">
                                <label class="col-4  labelForm" for="asesorA" id="">Asesor Apellido:</label>
                                <input class="col-4 text-center " type="text" id="asesorA" name="asesorA">
                            </div>
                            <div class="col-12 justify-content-center ">
                                <label class="col-4  labelForm" for="correo" id="">Correo:</label>
                                <input class="col-4 text-center "  type="email" id="correo" name="correo">
                            </div>
                            <div class="col-12 justify-content-center ">
                                <label class="col-4  labelForm" for="telefonoAsesor" id="">Teléfono Asesor :</label>
                                <input class="col-4 text-center " type="number" id="telefonoAsesor" name="telefonoAsesor">
                            </div>
                            <div class="col-12 justify-content-center ">
                                <label class="col-4  labelForm" for="status">Estado:</label>

                                <select name="status" class="col-4  text-center " >
                                    <?php /* foreach ($seleccion3 as $datos) { */
                                    ?>
                                        <option value="<?php /* echo $datos['id_status']  */?>">
                                            <?php /* echo $datos['nameStatus'] */ ?></option>
                                    <?php /* } */ ?>
                                </select>
                            </div>


                        </div>
                        <div class="m-2 col-9 mt-5 row">
                            <input type="submit" name="save" value="Guardar" class="ml-3 col-3 btn btn-success p-1">

                            <button type="button" name="cancel" class="ml-3 col-3 btn btn-danger p-1" onclick="location.href='?c=ModulsAdminController&a=searchProv'" target="_self">Cancelar</button>

                        </div>
                    </form>
               
            </div>
        </div>
    </div>
</nav>
