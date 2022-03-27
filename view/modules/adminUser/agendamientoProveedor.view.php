<body class="bodyCalendary">

    <button type="button" class="tabButtonCalendary rounded-circle col-4" onclick="location.href='?c=InitAdmin'" target="_self">Volver</button>
    
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <div id='calendar'></div>
        </div>
    </div>
   
    <div class="modal fade" id="modalCalendar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title font-italic text-white-50" id="titulo"></h5>
                </div>

                <form id="formCalendar" name="formCalendar" class="embed-responsive-16by9">
                    <div class="modal-body">
                        <input type="hidden" name="id_evento" id="id_evento">
                        <div class="mb-3 form-floating">
                            
                            <label for="codEvent" class="form-label p-2 ">Codigo Evento</label>
                            <input type="text" name="codEvent" class="form-control p-2 mt-4 btn-outline-secondary text-center" placeholder="Iniciales evento + dia (Fecha)" id="codEvent">
                        </div>
                        <div class="mb-3 form-floating">
                            <label for="eventMot" class="form-label p-2 ">Motivo evento</label>
                            <select name="eventMot" id="eventMot" class="form-control p-2 mt-4 btn-btn-outline-light text-center">
                                <option value="N/A">Seleccionar Evento</option>
                                <option value="PGF">Pago Factura</option>
                                <option value="HP">Hacer Pedido</option>
                                <option value="RP">Recibir Pedido</option>
                                <option value="CM">Cambio Mercancia</option>
                                <option value="DP">Devolución Mercancia</option>
                                <option value="Otros">Otros</option>

                            </select>
                        </div>
                        <div class="mb-3 form-floating">
                            <label for="proveedorCod" class="form-label p-2 text-center ">Proveedor Agendado</label>
                            <select name="proveedorCod" id="proveedorCod" class="form-control p-2 mt-4 btn-btn-outline-light text-center">
                                <option value="N/A">Seleccionar Proveedor</option>
                                <option value="tm123">textilex martha</option>
                                <option value="lf444">lacteos flores</option>
                                <option value="tm698">textiles mathi</option>

                            </select>
                            <!--   <select name="proveedorCod" id="proveedorCod"class="form-control p-2 mt-4 btn-btn-outline-light">
                                <option value="
                                                <?php

                                                if (isset($_GET['rt']) != "") {
                                                    $proveAs = $_GET['rt'];
                                                    foreach ($proveAs as $proveAs) : ?>
                                                        <?php echo $proveAs['cod_proveedor'] ?>

                                                        <?php endforeach;
                                                }
                                                        ?>
                            "> <?php if (isset($proveAs['razon_social'])) {
                                    echo $proveAs['razon_social'];
                                }   ?>
                             </option>
                           
                            </select> -->
                        </div>
                        <div class="mb-3 form-floating">
                            <label for="dateEvent" class="form-label p-2 ">Fecha</label>
                            <input type="date" name="dateEvent" class="form-control p-2 text-center btn-outline-secondary" id="dateEvent">
                        </div>
                        <div class="mb-3 form-floating">
                            <label for="statusEvent" class="form-label p-2 text-center ">estado Agendamiento</label>
                            <select name="statusEvent" id="statusEvent" class="form-control p-2 mt-4 btn-btn-outline-light text-center">
                                <option value="N/A">Seleccionar estado</option>
                                <option value="Agen">Agendado</option>
                                <option value="Canc">Cancelado</option>
                                <option value="Pen">Pendiente</option>
                                <option value="Re-Ag">Reagendar</option>
                            </select>

                        </div>
                        <div class="mb-3 form-floating">
                            <label for="colorPriority" class="form-label p-2 text-center">Prioridad</label>
                            <input type="color" name="colorPriority" class="form-control p-4 btn-outline-secondary" id="colorPriority">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="close" class="btn btn-warning" onclick="location.href='?c=ModulsAdminController&a=agenda'">Cerrar</button>
                        <button type="button" class="btn btn-danger" id="eliminar">Eliminar</button>
                        <button type="submit" class="btn btn-success" id="btnSave">Guardar</button>

                    </div>
                </form>

            </div>
        </div>
    </div>



</body>

</html>