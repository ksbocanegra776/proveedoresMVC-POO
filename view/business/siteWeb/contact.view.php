<main class=" fondoContact">
    <div class="form-contact align-content-sm-center row">
        <h2 class="tit1 text-center col-12">Contáctenos</h2>
        <p class="tit2 text-center col-12">
            Déjanos tus felicitaciones sugerencias quejas y reclamos.
        </p>
         <?php require_once "controller/dictionaryException.php"?>
        <div class="container-data col-auto"style="background-image: url(assests/img/fondo2.png)!important;">
            <div class="form-usuarios">
                <form method="post" action="?c=LandingPageWeb&a=contactSend" class="container-form table-responsive" id="formulario">
                    <div class="input-form">
                        <div class="labelUser">
                            <label for="nombre">Nombre:</label>
                        </div>
                        <input class="input-user" id="name" name="name" type="text">
                    </div>
                    <div class="input-form ">
                        <div class="labelUser">
                            <label for="apellido">Apellido:</label>
                        </div>
                        <input class="input-user" id="lastName" name="lastName" type="text">
                    </div>

                    <div class="input-form ">
                        <div class="labelUser">
                            <label for="phone">Teléfono:</label>
                        </div>
                        <input class="input-user" id="phone" name="phone" type="text">
                    </div>
                    <div class="input-form ">
                        <div class="labelUser">
                            <label for="email">Correo:</label>
                        </div>
                        <input class="input-user" id="email" name="email" type="email">
                    </div>
                    <div class="input-form ">
                        <div class="labelUser">
                            <label for="email">Asunto:</label>
                        </div>
                        <input class="input-user" id="affair" name="affair" type="text">
                    </div>
                    <div class="input-form mt-2">
                        <textarea class="" id="message" name="message" type="text"></textarea>
                    </div>

                    <ul class="input-form" style="list-style: none;">
                        <li>
                            <input style="width: 25px;" id="tyc" name="tyc" type="checkbox"><a onclick="location.href='compartidos/condiciones.html'" target="_self">Términos y condiciones</a>
                        </li>
                        <li>
                            <input style="width:25px;" id="td" name="td" type="checkbox"><a onclick="location.href='compartidos/tratamientoData.html'" target="_self">Tratamiento de datos</a>
                        </li>
                    </ul>
            </div>
            <div>
                <input class="btn btn-success col-2" name="enviar" type="submit" value="Enviar">
            </div>
            </form>
        </div>
    </div>
</main>