<main class="">
    <h1 class="tit1">Formulario Registro</h1>

    <div class="container-register">

        <form method="post" action="" class="form-flexR">
            
            <div >
                <label for="nombre">  Nombre:</label>
                <input  id="nombre" name="nombre"type="text" placeholder="Primer Nombre">
            </div>
            <div >
             <label for="apellido">Apellido:</label><input id="apellido" name="apellido" class="ml-1" type="text" placeholder="Primer Apellido">
            </div>
            <div >
                <label for="tipoDoc">Tipo-Documento:</label>
                    <select name="tipoDoc" class="mt-2">
                        <?php foreach ($seleccion as $datos) {
                        ?>
                            <option  value="<?php echo $datos['idDocument'] ?>"><?php echo $datos['nameDocument'] ?></option>
                        <?php } ?>
                    </select>
            </div>
            <div >
             <label for="documento">  Documento:</label> <input id="documento" name="documento" type="number" placeholder="ingrese el numero de documento">
            </div>
            <div >
            <label for="email">   Correo:</label> <input id="email" name="email" type="email" placeholder="Correo Aqui">
            </div>
            <div >
            <label for="password">   Contraseña:</label> <input id="password" name="password" type="password" placeholder="contraseña Aqui">
            </div>
            <div >
            <label for="telefono">Teléfono:</label> <input id="telefono" name="telefono" type="number" placeholder=" Número de contacto">
            </div>
            <div >
            <label for="question1">Pregunta:</label> <input id="question1" name="question1" type="text" placeholder=" Nombre de pila de su Madre">
            </div>
            <div class="">
            <label for="question2">Pregunta:</label> <input id="question2" name="question2" type="text" placeholder=" Nombre de su primer mascota">
            </div>
            <div class="">
            <label for="question3">Pregunta: </label><input id="question3" class="ml-1" name="question3" type="text" placeholder=" Nombre de pila de su Padre">
            </div>
            <ul class="" style="list-style: none;">
                <li>
                    <input style="width: 25px;" id="tyc" name="tyc" type="checkbox"><a onclick="location.href='compartidos/condiciones.html'" target="_self">Términos y condiciones</a>
                </li>
                <li>
                    <input style="width:25px;" id="td" name="td" type="checkbox"><a onclick="location.href='compartidos/tratamientoData.html'" target="_self">Tratamiento de datos</a>
                </li>
            </ul>
            <div>
                <input type="submit" class="form-button col-3" name="enviarRegistro" value="ENVIAR"></br>
            </div>
        </form>
    </div>
</main>