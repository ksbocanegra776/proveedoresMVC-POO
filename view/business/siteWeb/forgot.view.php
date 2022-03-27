<main class="fondoForgot">

    <div style="margin: 15px 25px 25px 25px;">
        <div aling="center">
            <div aling="center">
                <div class="titleForgot">
                    <h2 class="text-white">Olvido su contraseña?</h2>
                    <p class="text-white">Mostrar contraseña</p>
                </div>
                <div class="col-12"><?php require_once "controller/dictionaryException.php";?></div>
                <div class="divForm">

                    <form method="POST" action="?c=LoginUserController&a=watchData">

                        <p class="text-white"> Email:</p>
                        <div>
                            <input type="text" name="email" id="email" autocomplete="off" class="box"></br>
                        </div>
                        <br>
                        <p class="text-white">Datos de seguridad:</br>
                        </p>

                        <div>
                            <p class="text-white"> Pregunta Uno:</p>
                            <input id="question1" name="question1" type="text" placeholder=" Nombre de pila de su Madre">
                        </div>
                        <div>
                            <p class="text-white"> Pregunta Dos:</p>
                            <input id="question2" name="question2" type="text" placeholder=" Nombre de su primer mascota">
                        </div>
                        <div>
                            <p class="text-white"> Pregunta Tres:</p>
                            <input id="question3" name="question3" type="text" placeholder=" Nombre de pila de su Padre">
                        </div>

                        <div class="justify-content-center m-2 ">

                            <input type="submit" name="forgotpass" value="Mostrar" class="submit">

                            <button type="button" class="submit" onclick="location.href='?c=LandingPageWeb&a=events'">Regresar</button>

                        </div>


                        </br>
                    </form>
                </div>

            </div>
        </div>
    </div>
</main>
