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
        <div class="row container-lg-fluid">

            <form action="" method="post" class="col-12 ml-2" id="formulario" >
                <table class="mt-2">
                    <td class="table-tbody">

                        <!--   <div class="col-12 justify-content-sm-center">
                                <label for="tipoDoc" class="col-4 labelForm">Tipo documento:</label>
                                <select name="tipoDoc" class="col-7" required>
                                    <?php foreach ($seleccion as $datos) {
                                    ?>
                                        <option value="<?php echo $datos['idDocument'] ?>">
                                            <?php echo $datos['nameDocument'] ?></option>>
                                    <?php } ?>
                                </select>
                            </div> -->
                        <div class="col-12 justify-content-sm-center">
                            <label class="col-4 " for="document" id="">Número
                                Documento:</label>
                            <input class="col-7" type="number" id="documento" name="document" required>
                        </div>
                        <div class="col-12 justify-content-sm-center">
                            <label class="col-4 labelForm" for="razonSocial" id="">Razón Social:</label>
                            <input class="col-7" type="text" id="razonSocial" name="razonSocial" required>
                        </div>
                        <div class="col-12 justify-content-sm-center">
                            <label class="col-4 labelForm" for="actiComercial" id="">Actividad
                                Comercial:</label>
                            <input class="col-7" type="text" id="actiComercial" name="actiComercial" required>
                        </div>
                        <div class="col-12 justify-content-sm-center">
                            <label class="col-4 labelForm" for="city" id="">Ciudad:</label>
                            <input class="col-7" type="text" id="city" name="city" required>
                        </div>
                        <div class="col-12 justify-content-sm-center">
                            <label class="col-4 labelForm" for="deparment" id="">Departamento:</label>
                            <input class="col-7" type="text" id="deparment" name="deparment" required>
                        </div>
                        <div class="col-12 justify-content-sm-center">
                            <label class="col-4 labelForm" for="address" id="">Dirección:</label>
                            <input class="col-7" type="text" id="address" name="address" required>
                        </div>
                        <div class="col-12 justify-content-sm-center">
                            <label class="col-4 labelForm" for="infotel" id="">Teléfono Empresa:</label>
                            <input class="col-7" type="text" id="" name="infotel" required>
                        </div>
                        <div class="col-12 justify-content-sm-center">
                            <label class="col-4 labelForm" for="email" id="">Email Empresa:</label>
                            <input class="col-7" type="email" id="email" name="email" required>
                        </div>
                        <!--  <div class="col-12 justify-content-sm-center">
                                <label class="col-4 labelForm" for="asesorCode" id=""> Código Asesor:</label>
                                <input class="col-7" type="text" id="asesorCode" required name="asesorCode" value="<?php echo $idAsesorNuevo ?>">
                            </div> -->
                        <div class="col-12 justify-content-sm-center">
                            <label class="col-4 labelForm" for="asesorName" id="">Asesor Comercial
                                Nombre:</label>
                            <input class="col-7" type="text" id="asesorName" name="asesorName" required>
                        </div>
                        <div class="col-12 justify-content-sm-center">
                            <label class="col-4 labelForm" for="asesorLastName" id="">Asesor Comercial
                                Apellido:</label>
                            <input class="col-7" type="text" id="asesorLastName" name="asesorLastName" required>
                        </div>
                        <div class="col-12 justify-content-sm-center">
                            <label class="col-4 labelForm" for="correoAsesor" id="">Correo
                                Asesor:</label>
                            <input class="col-7" type="email" id="correoAsesor" name="correoAsesor" required>
                        </div>
                        <div class="col-12 justify-content-sm-center">
                            <label class="col-4 labelForm" for="celPhone" id="">Celular Asesor:</label>
                            <input class="col-7" type="number" id="celPhone" name="celPhone" required>
                        </div>
                        <div class="col-12 justify-content-sm-center">
                            <label class="col-4 labelForm" for="dateInit" id="">Fecha inicio
                                actividad:</label>
                            <input class="col-7" type="date" id="dateInit" name="dateInit" required>
                        </div>

                        <!-- <div class="col-12 justify-content-sm-center">
                                <label class="col-4 labelForm" for="typeStatus" id="">Estado
                                    Proveedor:</label>
                                <select name="typeStatus" class="col-7" required>
                                    <?php foreach ($seleccion3 as $datos) {
                                    ?>
                                        <option value="<?php echo $datos['id_status'] ?>">
                                            <?php echo $datos['nameStatus'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-12 justify-content-sm-center" name="info">
                                <label class="col-4" for="tipoConvenio" id="">Tipo convenio:</label>
                                <select name="tipoConvenio" class="col-7" required>
                                    <?php foreach ($seleccion2 as $datos) {
                                    ?>
                                        <option value="<?php echo $datos['idConvenio'] ?>">
                                            <?php echo $datos['nameConvenio'] ?></option>

                                    <?php } ?>
                                </select>
                            </div> -->

                    </td>
                </table>
                <div>
                    <input type="submit" name="guardar" value="Guardar" class="btn btn-success col-2 m-2"></br>
                </div>
            </form>
        </div>
    </div>
</div> 
