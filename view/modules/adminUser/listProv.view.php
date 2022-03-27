<div class="contenido">
<div class="row mt-1 p-4">
        <button class="btn btn-secondary  col-auto" onclick="location.href='?c=InitAdmin'" target="_self">Regresar</button>
        <h2 class="text-center col">Lista de Proveedores</h2>

        <?php require_once "controller/dictionaryException.php"?>
    </div>
    <div class="section2User mt-3 ml-5">

        <table class="table table-striped table-dark table-hover table-responsive ">
            <thead class="thead-dark">
                <tr class="col-12 m-1">
                    <td class="col-auto text-center">ITEM</td>
                    <td class="col-auto text-center">Tipo Documento</td>
                    <td class="col-auto text-center">Doc</td>
                    <td class="col-auto text-center">Razon Social</td>
                    <td class="col-auto text-center">Actividad Comercial</td>
                    <td class="col-8 text-center">Linea Provista</td>
                    <td class="col-auto text-center">Cod Proveedor</td>
                    <td class="col-12 text-center">Correo Proveedor</td>
                    <td class="col-auto text-center">Teléfono</td>
                    <td class="col-auto text-center">Convenio</td>
                    <td class="col-auto text-center">Dirección</td>
                    <td class="col-auto text-center">Cod Asesor</td>
                    <td class="col-12 text-center">Nombre Asesor</td>
                    <td class="col-12 text-center">Apellido Asesor</td>
                    <td class="col-12 text-center">Correo Asesor</td>
                    <td class="col-12 text-center">Teléfono Asesor</td>
                 
                </tr>
            </thead>
            <tbody>

            <?php 
                if(isset($_GET['rt'])!= ""){
                  $proveAs = $_GET['rt'];
                  foreach ($proveAs as $proveAs) : ?>
                    <tr>
                        <td> <?php  echo $proveAs['id_proveedores']; ?></td>
                        <td> <?php switch ($proveAs['cod_tipo_documento_prov']){
                                    case 'C-N/A':
                                        echo 'No Asignado';
                                        break;
                                    case 'CC':
                                        echo 'Cedula Ciudadania';
                                        break;
                                    case 'CE':
                                        echo 'Cedula Extrangeria';
                                        break;
                                    case 'RUT':
                                        echo 'Registro Unico Tributario';
                                        break;
                                    case 'NIT':
                                        echo 'Numero Identificacion Tributaria';
                                        break;
                                    
                                }
                           ?></td>
                        
                        <td> <?php echo $proveAs['numero_documento_prov'] ?></td>
                        <td> <?php echo $proveAs['razon_social'] ?></td>
                        <td> <?php echo $proveAs['cod_actividad_economica']  ?></td>
                        <td> <?php switch ($proveAs['linea_provista']){ case 'h-N/A':
                                                echo 'No Aplica';
                                                break;
                                            case 'h-Per':
                                                echo 'Perecederos';
                                                break;
                                            case 'h-Lic':
                                                echo 'Licores';
                                                break;
                                            case 'h-Con':
                                                echo 'Consumo';
                                                break;
                                            case 'h-Car':
                                                echo 'Cárnicos';
                                                break;
                                            case 'h-Med':
                                                echo 'Farmacéuticos';
                                                break;
                                            case 'h-Bel':
                                                echo 'Belleza';
                                                break;
                                            case 'h-Mtt':
                                                echo 'Suministros';
                                                break;
                                            case 'h-tex':
                                                echo 'Textiles';
                                                break;
                                            
                                                } ?></td>
                        <td> <?php echo $proveAs['cod_proveedor']  ?></td>
                        <td> <?php echo $proveAs['emailPro']?></td>
                        <td> <?php echo $proveAs['telefonoProv']?></td>
                        <td> <?php switch($proveAs['id_convenio']){
                            case 'Crdt':
                                echo 'Pago credito';
                                break;
                            case 'Cntd':
                                echo 'Pago de contado';
                                break;
                            case 'Antcp':
                                echo 'Pago anticipado';
                                break; 
                        }?></td>
                        <td> <?php echo $proveAs['direccion']?></td>
                        <td> <?php echo $proveAs['cod_asesor']?></td>
                        <td> <?php echo $proveAs['nombre']?></td>
                        <td> <?php echo $proveAs['apellido']?></td>
                        <td> <?php echo $proveAs['email']?></td>
                        <td> <?php echo $proveAs['telefono']?></td>
                        <td>
                        </tr>
                    <?php endforeach;} ?>
            </tbody>
        </table>
    </div>
</div>