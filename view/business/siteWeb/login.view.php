<main class="main">
    <h1 class="text-center tit1">Ingreso Usuarios</h1>
        <?php require_once "controller/dictionaryException.php"?>
    <form class="form-flex" action="?c=LoginUserController&a=loginUser" method="POST">

        <div class="label col-6">
            <label for="email">Usuario</label>

        </div>
        <input id="email" name="email" type="text" class="input" placeholder="Digite su correo Aquí" value="">
        <div class="label col-6">
            <label for="password">Contraseña</label>
        </div>
       
        <input id="password" name="password" type="password" class="input" placeholder="Digite su contraseña Aqui" value="">
      
        <div>
            <input type="submit" name="login" id="loginBtn" class="btns col-auto" value="INGRESAR">
        </div>
        <div class="col-12 mt-2" style="margin-left: -17%;">
            <span><i class=" icon fas fa-pen-alt"></i>&nbsp;<a href="?c=LandingPageWeb&a=register" style="font-size: 20px; color:black;">Registrarse</a></span>
        </div>
        <div class="col-12 mt-2" style="margin-left: -17%;">
            <span><i class="fas fa-sync icon"></i>&nbsp;<a href="?c=LandingPageWeb&a=events" style="font-size: 20px; color:black; width: 100%;">Restablecer</i></span>
        </div>
    </form>  

</main>