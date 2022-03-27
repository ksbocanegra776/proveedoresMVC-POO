<!doctype html>
<html lang="en">

<head>
    <title>Agenda Web vista auxiliar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="assests/js/main.js"></script>
    <link rel="stylesheet" href="assests/css/main.css">
    <link rel="stylesheet" href="assests/css/agenda.css">
    <link rel="stylesheet" href="assests/css/auxiliar.css">
    <link rel="stylesheet" href="assests/css/main.min.css">
    <!-- <link href="assests/css/styleGeneralModul.css" rel="stylesheet"> -->

</head>

<body class="Auxbody">

    <div class="Auxheader">
       
            <nav class="navbar navbar-info container-fluid col-12 ">
                <div class=" justify-content-between row">
                    <div class="text-center col-auto">

                        <h2> Módulo Proveedores</h2>
                        <h6>Auxiliar</h6>

                    </div>
                    <div class="col-3 align-content-end"><a class='btn btn-success text-white rounded-2' href='?'>SALIR</a></div>

                </div>
            </nav>
            <div class="paginacion" style="margin-left: 15%;">
                <button class="btn btn-secondary rounded-0 col-3 mt-2" onclick="location.href='?c=InitAux'" target="_self">Buscar Proveedor</button>
                <button class="btn btn-secondary rounded-0 col-3 mt-2" onclick="location.href='?c=InitAux&a=notificaciones'" target="_self">Notificaciones</button>
                <button class="btn btn-secondary rounded-0 col-3 mt-2" onclick="location.href='?c=InitAux&a=consulta'" target="_self">Consultar Agenda</button>
            </div>