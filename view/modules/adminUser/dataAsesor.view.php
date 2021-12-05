<nav>

<div class="contenido">
<div class="row mt-1 p-4">
        <button class="btn btn-secondary  col-auto" onclick="location.href='?c=InitAdmin'" target="_self">Regresar</button>
        <h2 class="text-center col">Actualizar de usuarios</h2>
    </div>
    <div class="container-lg-fluid limit ">

        <form action="post" style="margin-top: 1%;margin-left: 8%; padding: 1px; width: 90%;" class="contenedorInfo responsive">
            <div class=" col-12">

                <div style="margin-left: 5%;">
                    <h1 class="text-center col mt-5">Asesores activos</h3>
                </div>
                <?php
                require "controller/dictionaryException.php";
                ?>
                <table class="table table-striped table-dark table-hover justify-content-center table-responsive">
                    <thead class="thead-dark ">
                        <tr>
                            <td class="p-2 col-3 text-center">Empresa</td>
                            <td class="p-2 col-1 text-center">Codigo Asesor</td>
                            <td class="p-2 col-3 text-center">Nombre</td>
                            <td class="p-2 col-3 text-center">Apellido</td>
                            <td class="p-2 col-3 text-center">Correo</td>
                            <td class="p-2 col-3 text-center">Teléfono</td>
                            <td class="p-2 col-3 text-center">Estado</td>
                            <td class="p-2 col-3 text-center">Acción</td>
                            <td class="p-2 col-3 text-center">Acción</td>
                        </tr>
                    </thead>
                    <tbody class="p-2 col-3 text-center">
                        <!--   <?php require "Model/conexionDB.php"; ?>
                        <?php require " ../../controller/dataAsesorController.php "; ?>-->
                    </tbody>
                </table>
            </div>
        </form>
    </div>


</div>
</nav>