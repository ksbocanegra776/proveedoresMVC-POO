<div class="contenido">
    <div class="row mt-1 p-4">
        <button class="tabButton  col-auto" onclick="location.href='?c=InitAdmin'" target="_self">Regresar</button>
        <h2 class="text-center col">Usuarios Plataforma</h2>
        
    </div>
    <?php require_once "controller/dictionaryException.php"?> 
    <div class="section1User ml-5">
        
        <form method="POST" action="?c=UserController&a=crearUserAdmin" class="form  container-lg-fluid p-2">
            <div class="input col-3">
                <label for="tipoDoc">Tipo-Documento:</label>
                <select name="tipoDoc" class=" col-12">
                    <option value="C-N/A">No Asignado</option>
                    <option value="CC">Cedula de Ciudadania</option>
                    <option value="RUT">RUT</option>
                    <option value="NIT">NIT</option>
                    <option value="CE">Cedula de Extranjeria</option>
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
                    <option value="R-N/A">No Aplica</option>
                    <option value="Admin">Administrador</option>
                    <option value="Aux">Auxiliar</option>
                    
                </select>
            </div>
            <div class="input col-3">
                <div>
                    <label for="horario">Horario</label>
                </div>
                <select name="horario" class="col-12">
                    <option value="h-N/A">No Aplica</option>
                    <option value="h-Man">Mañana</option>
                    <option value="h-Tar">Tarde</option>
                    <option value="h-Rot">Rotativo</option>
                </select>
            </div>
            <div class="input col-3">
                <div>
                    <label for="status">Estado</label>
                </div>
                <select name="status" class="col-12">
                    <option value="Act">Activo</option>
                    <option value="In-Ac">Inactivo</option>
                    <option value="Pen">Pendiente</option>
                </select>
            </div>
            <div class=" input col-3 mt-3">
                <ul class="input-form" style="list-style: none;">
                    <li>
                        <input style="width: 25px;" id="tyc" name="tyc" type="checkbox"><a onclick="location.href='../compartidos/condiciones.html'"  target="_self">Términos y condiciones</a>
                    </li>
                    <li>
                        <input style="width:25px;" id="td" name="td" type="checkbox"><a onclick="location.href='../compartidos/tratamientoData.html'"  target="_self">Tratamiento de datos</a>
                    </li>
                </ul>
            </div>
            <input id="saveInfoUser" class="btn btn-success col-2 mt-3" style="width:40px ;height: 40px" name="saveInfoUser" type="submit" value="Guardar">
        </form>
    </div>
    <form action="?c=UserController&a=listar" method="post">
        <div>
            <input id="searchUser" class="btn btn-info col-auto mt-3" name="searchUser" type="submit" value="Listar Usuarios">
        </div>
    </form>

</div>