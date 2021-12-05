<div class="contenido">
    <div class="row mt-1 p-4">
        <button class="tabButton  col-auto" onclick="location.href='?c=InitAdmin'" target="_self">Regresar</button>
        <h2 class="text-center col">Usuarios Plataforma</h2>
    </div>
    <div class="section1User ml-5" >
            <?php require_once("controller/dictionaryException.php") ?>
            <form method=" post" action="../../controller/controlusuario.php" class="form  container-lg-fluid p-2">

        <div class="input col-3">
            <div>
                <label for="tipoDoc">Tipo documento</label>
            </div>
            <select name="tipoDoc" class="col-12">
                <?php foreach ($seleccion as $datos) {
                ?>
                    <option value="<?php echo $datos['idDocument'] ?>"><?php echo $datos['nameDocument'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="input col-3">
            <div>
                <label for="documento">N° Documento</label>
            </div>
            <input id="documento" name="documento" type="number" placeholder=" numero de documento">
        </div>
        <div class="input col-3">
            <div>
                <label for="nombre">Nombre</label>
            </div>
            <input id="nombre" name="nombre" type="text" placeholder="Diligencie el campo">
        </div>
        <div class="input col-3">
            <div>
                <label for="apellido">Apellido</label>
            </div>
            <input id="apellido" name="apellido" type="text" placeholder="Diligencie el campo">
        </div>
        <div class="input col-3">
            <div>
                <label for="telefono">Telefono</label>
            </div>
            <input id="telefono" name="telefono" type="number" placeholder="Diligencie su telefono">
        </div>
        <div class="input col-3">
            <div>
                <label for="email">Correo</label>
            </div>
            <input id="email" name="email" type="email" placeholder="Diligencie el campo">
        </div>
        <div class="input col-3">
            <div>
                <label for="password">Contraseña</label>
            </div>
            <input id="password" name="password" type="password" placeholder="Digite su Clave de acceso">
        </div>
        <div class="input col-3">
            <div>
                <label for="password"> Validar Contraseña</label>
            </div>
            <input id="password" name="password2" type="password" placeholder="Digite su Clave de acceso">

        </div>
        <div class="input col-3">
            <div>
                <label for="question1">Pregunta 1</label>
            </div>
            <input id="question1" name="question1" type="text" placeholder=" Nombre de pila de su Madre">
        </div>
        <div class="input col-3">
            <div>
                <label for="question2">Pregunta 2</label>
            </div>
            <input id="question2" name="question2" type="text" placeholder=" Nombre de su primer mascota">
        </div>
        <div class="input col-3">
            <div>
                <label for="question3">Pregunta 3</label>
            </div>
            <input id="question3" name="question3" type="text" placeholder=" Nombre de pila de su Padre">
        </div>
        <div class="input col-3">
            <div>
                <label for="tipoRol">Cargo</label>
            </div>
            <select name="tipoRol" class="col-12">
                <?php foreach ($seleccion4 as $datos) {
                ?>
                    <option value="<?php echo $datos['idRol'] ?>"><?php echo $datos['nameRol'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="input col-3">
            <div>
                <label for="horario">Horario</label>
            </div>
            <select name="horario" class="col-12">
                <?php foreach ($seleccion5 as $datos) {
                ?>
                    <option value="<?php echo $datos['idHorarios'] ?>"><?php echo $datos['nameHorario'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="input col-3">
            <div>
                <label for="status">Estado</label>
            </div>
            <select name="status" class="col-12">
                <?php foreach ($seleccion3 as $datos) {
                ?>
                    <option value="<?php echo $datos['id_status'] ?>"><?php echo $datos['nameStatus'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class=" input col-3 mt-3">
            <ul class="input-form" style="list-style: none;">
                <li>
                    <input style="width: 25px;" id="tyc" name="tyc" type="checkbox"><a onclick="location.href='../compartidos/condiciones.html'" require target="_self">Términos y condiciones</a>
                </li>
                <li>
                    <input style="width:25px;" id="td" name="td" type="checkbox"><a onclick="location.href='../compartidos/tratamientoData.html'" require target="_self">Tratamiento de datos</a>
                </li>
            </ul>
        </div>
        <input id="saveInfoUser" class="btn btn-success col-2 mt-3" style="width:40px ;height: 40px" name="saveInfoUser" type="submit" value="Guardar">
        </form>
    </div>
    <div class="section2User mt-3 ml-5">
        <form action="post">

            <table class="table table-striped table-dark table-hover table-responsive ">
                <thead class="thead-dark">
                    <tr class="col-12 m-1">
                        <td class="col-auto text-center">Tipo Documento</td>
                        <td class="col-auto text-center">Doc</td>
                        <td class="col-auto text-center">Nombre</td>
                        <td class="col-auto text-center">Apellido</td>
                        <td class="col-8 text-center">Correo</td>
                        <td class="col-auto text-center">Teléfono</td>
                        <td class="col-auto text-center">Cargo</td>
                        <td class="col-auto text-center">Horario</td>
                        <td class="col-auto text-center">Estado</td>
                        <td class="col-12 text-center">Acción</td>

                    </tr>
                </thead>
          <!--       <tbody>
                    <?php require_once("../../controller/dataClientsController.php"); ?>
                </tbody> -->
            </table>

        </form>
    </div>

</div>