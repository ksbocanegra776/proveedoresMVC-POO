<nav class="contenido">

    <div class="row  contenedorInfo justify-content-center" style="margin-left:15%;">
        <div class=" p-2">
            <div class="row container-fluid  ml-5 mt-5">
                <div class="justify-content-center ml-5">
                    <h2 class="text-center">Creación de nuevo asesor comercial</h2>

                </div>
                <?php require_once "controller/dictionaryException.php"?>
                <?php
                if (isset($_GET['idProveedor'])) {
                    $_POST = $proveedor = $_GET['idProveedor'];
                }
                ?>
               
                <form action="?c=AsesorController&a=changeAsrNew" method="post" class="col-12 embed-responsive" id="formulario">
                    <div class="ml-5">
                        <div class="col-12 justify-content-sm-center ">
                            <label for="codAsesor " class="col-4 labelForm ">Codigo Asesor:</label>
                            <input id="codAsesor " name="codAsesor" class="col-4 text-center " placeholder="siglas + 4 # del documento" type="text">
                        </div>
                        <div class="col-12 justify-content-center ">
                            <label class="col-4 labelForm" for="idProveedor">Id Empresa:</label>
                            <input class="col-4 text-center " type="number" name="idProveedor" value="<?php echo $_GET['idProveedor'] ?>"><br>
                        </div>

                        <div class="col-12 justify-content-sm-center">
                            <label for="tipoDoc" class="col-4 labelForm">Tipo documento:</label>
                            <select name="tipoDoc" class="col-4 text-center">
                                <option value="C-N/A">No Asignado</option>
                                <option value="CC">Cedula de Ciudadania</option>
                                <option value="RUT">RUT</option>
                                <option value="NIT">NIT</option>
                                <option value="CE">Cedula de Extranjeria</option>
                            </select> 
                        </div>
                        <div class="col-12 justify-content-sm-center">
                            <label class="col-4 " for="documento" id="">Número
                                Documento:</label>
                            <input class="col-4 text-center" type="number" id="documento" name="documento">
                        </div>
                        <div class="col-12 justify-content-center ">
                            <label class="col-4  labelForm" for="asesorN" id="">Asesor Nombre:</label>
                            <input class="col-4 text-center " type="text" id="asesorN" name="asesorN">
                        </div>
                        <div class="col-12 justify-content-center ">
                            <label class="col-4  labelForm" for="asesorA" id="">Asesor Apellido:</label>
                            <input class="col-4 text-center " type="text" id="asesorA" name="asesorA">
                        </div>
                        <div class="col-12 justify-content-center ">
                            <label class="col-4  labelForm" for="correo" id="">Correo:</label>
                            <input class="col-4 text-center " type="email" id="correo" name="correo">
                        </div>
                        <div class="col-12 justify-content-center ">
                            <label class="col-4  labelForm" for="telefonoAsesor" id="">Teléfono Asesor :</label>
                            <input class="col-4 text-center " type="number" id="telefonoAsesor" name="telefonoAsesor">
                        </div>
                        <div class="col-12 justify-content-center ">
                            <label class="col-4  labelForm" for="status">Estado:</label>

                            <select name="status" class="col-4 text-center">
                                <option value="Act">Activo</option>
                                <option value="In-Ac">Inactivo</option>
                                <option value="Pen">Pendiente</option>
                            </select>
                        </div>


                    </div>
                    <div class="m-2 col-9 mt-5 row">
                        <input type="submit" name="save" value="Guardar" class="ml-3 col-3 btn btn-success p-1">

                        <button type="button" name="cancel" class="ml-3 col-3 btn btn-danger p-1" onclick="location.href='?c=ModulsAdminController&a=searchResponseProv'" target="_self">Cancelar</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
</nav>