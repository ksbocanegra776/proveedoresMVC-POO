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
                </b>
            </div>
            <?php require "view/roles/admin/navProveedor.view.php"; ?>

            <?php
            require "buscador.view.php";
            require "controller/dictionaryException.php";
            ?>
            <div class="containerFormSearch">

                <div class="col-12 ">
                    <div class="row contenedorInfo " style="width: 80%; ">

                        <div class="col-12 p-3 " style="width: 80%; margin-left: 10%; ">

                            <form class=" ml-2 ">
                                <?php

                                if (isset($_GET['result'])) {
                                    $_POST = $row = unserialize(base64_decode($_GET['result']));
                                } ?>

                                <div class="col-auto justify-content-center ">

                                    <label for=" ">Razón Social :</label>
                                    <input class="col-auto text-center " type="text " id="razonSocial " name="razonSocial " value="<?php if (isset($row['razonSocial'])) {echo $row['razonSocial'];} ?>" disabled><br>
                                    Número Documento:
                                    <br>
                                    <input class="col-auto text-center " type="number " id="idProveedor " name="idProveedor " value="<?php if (isset($row['idProveedor'])) {echo $row['idProveedor'];} ?>" disabled><br>
                                    Actividad Comercial :<br>
                                    <input class="col-auto text-center " type="text " id="actividadcomercial " name="actividadcomercial " value="<?php if (isset($row['actividadcomercial'])) {echo $row['actividadcomercial'];} ?> " disabled><br>
                                    Ciudad  :
                                    <br>
                                    <input class="col-auto text-center " type="text " id="ciudad " name="ciudad " value="<?php if (isset($row['ciudad'])) { echo $row['ciudad'];} ?> " disabled><br>
                                    Departamento :
                                    <br>
                                    <input class="col-auto text-center " type="text " id="departamento " name="departamento " value=" <?php if (isset($row['departamento'])) { echo $row['departamento'];} ?>" disabled><br>
                                    Direccion :
                                    <br>
                                    <input class="col-auto text-center " type="text " id="direccionEmpresa " name="direccionEmpresa " value="<?php if (isset($row['direccionEmpresa'])) {echo $row['direccionEmpresa'];} ?> " disabled><br>
                                    Teléfono Empresa:
                                    <br>
                                    <input class="col-auto text-center " type="number " id="telefonoEmpresa " name="telefonoEmpresa " value="<?php if (isset($row['telefonoEmpresa'])) { echo $row['telefonoEmpresa'];} ?> " disabled><br>
                                    Tipo convenio :<br>
                                    <input class="col-12 text-center " type="text" id="tipoConvenio" name="tipoConvenio" value="<?php if (isset($row['nameConvenio'])) {echo $row['nameConvenio'];} ?>" disabled><br>
                                    Estado :
                                    <br>
                                    <input class="col-12 text-center " type="text" id="estado" name="estado" value="<?php if (isset($row['nameStatus'])) {echo $row['nameStatus'];} ?>" disabled><br>
                                    Correo : <br>
                                    <input class="col-12 text-center " type="email " id=" " name="email " value=" <?php if (isset($row['email'])) { echo $row['email'];} ?>" disabled><br>
                                </div>
                            </form>
                            <div class="justify-content-center ">
                                <?php
                                if (isset($row['idProveedor'])) {
                                    echo "<td><a href=\"../../controller/deshabilitarProveedor.php?idProveedor=$row[idProveedor]\" class='col-1 p-1 mt-5 btn btn-outline-info'>Deshabilitar</a><a href=\"proveedorUpdate.php?idProveedor=$row[idProveedor]\" class=' col-4 p-1  mt-5 btn btn-outline-success'>Actualizar</a></td>";;
                                } ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</nav>