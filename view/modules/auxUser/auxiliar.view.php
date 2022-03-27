<div class=" container-fluid ">
    <?php require_once "controller/dictionaryException.php" ?>
    <div class="col-12 formulario ">
            <form action="?c=AuxiliarController&a=searchProAsr" method="post" class="col btn-dark p-2" id="formulario ">
                <div class="ml-3 row">
                    <input type="submit" class="btn-info col-2 text-center " value="Buscar">
                    <div class="col-auto">
                        <select name="selecTablaBD" id="" style="height: 29px;">
                            <option value="D-N/A">Seleccionar</option>
                            <option value="R-Soc">Razón Social</option>
                            <option value="C-Pro">Código Proveedor</option>
                            <option value="N-Doc">Documento</option>
                            <option value="N-Ema">Email</option>
                        </select>
                    </div>
                    <input type="text" id="buscador" value=" " class="col-auto">
                </div>
            </form>
       <form action=" " method=" " class="col btn-dark p-2 " id="formulario ">
            <?php 
                if (isset($_GET['provD'])) {
                    $_POST = $provAsrD = unserialize($_GET['provD']);
            } ?> 
            <div class="col-12 justify-content-sm-center mt-2 ">
                <label class="col-sm-4 " for="codProv " id=" ">codigo:</label>
                <input class="col-sm-5 " type="text " id="codProv " name="codProv " readonly="readonly" value="<?php  if(isset($provAsrD['razon_social'])){ echo $provAsrD['razon_social'];} ?>">
            </div>
            <div class="col-12 justify-content-sm-center ">
                <label class="col-sm-4 " for="razonSocial " id=" ">Razón Social:</label>
                <input class="col-sm-5 " type="text " id="razonSocial " name="razonSocial " readonly="readonly ">
            </div>
            <div class="col-12 justify-content-sm-center ">
                <label class="col-sm-4 " for="actiComercial " id=" ">Actividad
                    Comercial:</label>
                <input class="col-sm-5 " type="text " id="actiComercial " name="actiComercial " readonly="readonly ">
            </div>
            <div class="col-12 justify-content-sm-center ">
                <label class="col-sm-4 " for="asesor " id=" ">Asesor Comercial:</label>
                <input class="col-sm-5 " type="text " id="asesor " name="ciudad " readonly="readonly ">
            </div>
            <div class="col-12 justify-content-sm-center ">
                <label class="col-sm-4 " for="telefono " id=" ">Telefono Asesor:</label>
                <input class="col-sm-5 " type="number " id="telefono " name="telefono " readonly="readonly ">
            </div>
            <div class="container-fluid ">
                <h5>Caja de comentarios</h5>
                <div class="col-12 justify-content-center ">
                    <textarea name="comentAux " id="comentAux " class="comentAux "></textarea>
                </div>
            </div>

            <button type="button " onclick=" " id=" " neme=" " class="btn btn-success ">Guardar</button>
        </form>
    </div>
</div>
</div>
</div>