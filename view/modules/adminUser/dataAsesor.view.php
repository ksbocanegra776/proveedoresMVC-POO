<nav>

    <div class="contenido">
        <div class="row mt-1 p-4">
            <button class="btn btn-secondary  col-auto" onclick="location.href='?c=InitAdmin'" target="_self">Regresar</button>
            
                 
        </div>
        <div class="container-lg-fluid limit ">
            
            <?php require "controller/dictionaryException.php"; ?>
            <form action="?c=AsesorController&a=searchAsesor" method="POST" style="margin-top: 1%;margin-left: 8%; padding: 1px; width: 90%;" class="contenedorInfo responsive">
                <div class=" col-12">
                <div style="margin-left: 5%;">
                  <h1 class="text-center col mt-2">Asesores activos</h3>
            </div>
                    <table class="table table-striped table-dark table-hover justify-content-center table-responsive">
                        <thead class="thead-dark ">
                            <tr>
                                <td class="p-2 col-3 text-center">Empresa</td>
                                <td class="p-2 col-1 text-center">Codigo Asesor</td>
                                <td class="p-2 col-1 text-center">Tipo Documento</td>
                                <td class="p-2 col-1 text-center">Número Documento</td>
                                <td class="p-2 col-3 text-center">Nombre</td>
                                <td class="p-2 col-3 text-center">Apellido</td>
                                <td class="p-2 col-3 text-center">Correo</td>
                                <td class="p-2 col-3 text-center">Teléfono</td>
                                <td class="p-2 col-3 text-center">Estado</td>
                                <td class="p-2 col-3 text-center">Rol</td>
                                <td class="p-2 col-3 text-center">Acción</td>
                                <td class="p-2 col-3 text-center">Acción</td>
                            </tr>
                        </thead>
                        
                        <tbody class="p-2 col-3 text-center">

                            <?php
                            if(isset($asesor)){
                                foreach ($asesor as $userAsesor) : ?>
                                    <tr>
                                        <td> <?php if(isset($userAsesor['razon_social'])){ echo $userAsesor['razon_social']; }?></td>
                                        <td> <?php if(isset($userAsesor['cod_asesor'])){ echo $userAsesor['cod_asesor']; } ?></t>
                                        <td> <?php if(isset($userAsesor['cod_tipo_documento_usuario'])){ switch ($userAsesor['cod_tipo_documento_usuario']) {

                                                    case 'CC':
                                                        echo 'Cedula Ciudadania';
                                                        break;
                                                    case 'CE':
                                                        echo 'Cedula Extrangeria';
                                                        break;
                                                }
                                            }
                                                ?></td>
                                        <td> <?php if(isset($userAsesor['numero_documento'])){ echo $userAsesor['numero_documento'];} ?></td>
                                        <td> <?php if(isset($userAsesor['nombre'])){ echo $userAsesor['nombre'];} ?></td>
                                        <td> <?php if(isset($userAsesor['apellido'])){ echo $userAsesor['apellido'];} ?></td>
                                        <td> <?php if(isset($userAsesor['email'])){ echo $userAsesor['email'];} ?></td>
                                        <td> <?php if(isset($userAsesor['telefono'])){echo $userAsesor['telefono'];} ?></td>
                                        <td> <?php if(isset($userAsesor['cod_estado_usuario'])){switch ($userAsesor['cod_estado_usuario']) {
                                                    case 'Act':
                                                        echo 'Activo';
                                                        break;
                                                    case 'In-Ac':
                                                        echo 'Inactivo';
                                                        break;
                                                }
                                                } ?></td>
                                        <td> <?php if(isset($userAsesor['cod_rol_usuario'])){switch ($userAsesor['cod_rol_usuario']) {
                                                    case 'R-N/A':
                                                        echo 'No Aplica';
                                                        break;
                                                    case 'Asr':
                                                        echo 'Asesor';
                                                        break;
                                                }
                                            }
                                                ?></td>
                                        <td><a href="?c=AsesorController&a=updateAsesor&idAsesor=<?php echo $userAsesor['id_usuario']; ?>" class="col-12 p-1 mt-1 btn btn-outline-success">Actualizar<a></td>
                                        <td><a href="?c=AsesorController&a=deleteAsesor&idAsesor=<?php echo $userAsesor['id_usuario']; ?>" class='col-12 p-1 mt-1 btn btn-outline-danger'>Eliminar<a></td>
                                    </tr>
                                <?php endforeach;}?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>


    </div>
</nav>