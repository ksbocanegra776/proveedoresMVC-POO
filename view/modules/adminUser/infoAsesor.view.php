<nav style="width: 50%;height: 640px;">
    <?php require "../compartidos/menuLateralProveedores.html"; ?>
    <div class="contenido">
            <?php require "../compartidos/navProveedor.html"; ?>
        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi
                    bi-arrow-bar-right menu-bar icono" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0
                        .5.5h5.793l-2.147
                        2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0
                        0-.708l-3-3a.5.5 0
                        0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5
                        0 0
                        1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z" />
        </svg>

        <div class="text-center">
            <h2> Actualización Asesor Comercial (asignar nuevo asesor)</h2>
        </div>
        <nav class="" style=" margin-left: 0%;width: 80%;height: 80%; ">

            <div class="row  contenedorInfo justify-content-center" style=" margin-left: 2%;width: 95%;height: 85%; ">
                <div class="container p-2 ">
                    <div class="row container-fluid table-responsive-sm " style="width:80%;height:auto; ">
                        <div class="col mt-5 " style="height:auto !important ;">

                            <form action="" method="post" class="col-12 table-responsive-sm" style="width:auto;height: auto !important; margin-top:1%;margin-right: 1% !important;" id="formulario">
                                <div class="m-1">
                                    <div class="col-12 justify-content-sm-center ">
                                        <label class="col-4  labelForm" for="asesorCode" id="">Asesor Comercial Código:</label>
                                        <input class="col-6  text-center " type="text" id="asesorCode" name="asesorCode" value="">
                                    </div>


                                    <div class="col-12 justify-content-sm-center ">
                                        <label class="col-4  labelForm" for="idProveedor">Id Empresa:</label>
                                        <input class="col-6 text-center " type="number" id="idProveedor" name="idProveedor" value=""><br>

                                    </div>

                                    <div class="col-12 justify-content-sm-center ">
                                        <label class="col-4  labelForm" for="razonS" id="">Razon Social:</label>
                                        <input class="col-6 text-center" type="text" id="razonS" name="razonS" value="" disabled>
                                    </div>


                                    <div class="col-12 justify-content-sm-center ">
                                        <label class="col-4  labelForm" for="asesorN" id="">Asesor Nombre:</label>
                                        <input class="col-6 text-center " type="text" id="asesorN" name="asesorN">
                                    </div>
                                    <div class="col-12 justify-content-sm-center ">
                                        <label class="col-4  labelForm" for="asesorA" id="">Asesor Apellido:</label>
                                        <input class="col-6 text-center " type="text" id="asesorA" name="asesorA">
                                    </div>
                                    <div class="col-12 justify-content-sm-center ">
                                        <label class="col-4  labelForm" for="asesorAdos" id="">Asesor Apellido dos:</label>
                                        <input class="col-6 text-center " type="text" id="asesorAdos" name="asesorAdos">
                                    </div>
                                    <div class="col-12 justify-content-sm-center ">
                                        <label class="col-4  labelForm" for="telefonoAsesor" id="">Teléfono Asesor :</label>
                                        <input class="col-6 text-center" type="number" id="telefonoAsesor" name="telefonoAsesor">
                                    </div>
                                    <div class="col-12 justify-content-sm-center ">
                                        <label class="col-4  labelForm" for="status">Estado</label>

                                        <select name="status" class="col-6 text-center">
                                            <?php foreach ($seleccion4 as $datos) {
                                            ?>
                                                <option value=""></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="m-2 col-9 row">

                                    <input type="submit" name="save" value="Guardar" class="ml-3 col-3 btn btn-success p-1">
                                    <button type="button" name="cancel" class="ml-3 col-auto btn btn-danger p-1" onclick="location.href='buscarProveedor.html'" target="_self">Cancelar</button>
                                    <button type="button" name="exit" class="ml-3 col-auto btn btn-primary p-1" onclick="location.href='adminPrincipal.html'" target="_self">Salir</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</nav>
