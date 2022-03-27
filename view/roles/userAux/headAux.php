<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/imagenes/header-logo.png">
    <title>auxiliar</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assests/css/auxiliar.css">
    <link href="assests/css/styleGeneralModul.css" rel="stylesheet">
    <link href="assests/css/message.css" rel="stylesheet">

</head>

<body>
    <div class="contenido ">
        <div class=" tabcontenedor col">
            <div class="text-center row">
                
                <h2> Módulo Proveedores</h2>
                <h6>Auxiliar</h6>
            
            </div>    
            <div class="row justify-content-end"><a class='btn btn-success text-white rounded-2' href='?'>SALIR</a></div>

            <div class="paginacion">
                <button class="btn btn-secondary rounded-0 col-3 mt-2" onclick="location.href='?c=InitAux'" target="_self">Buscar Proveedor</button>
                <button class="btn btn-secondary rounded-0 col-3 mt-2" onclick="location.href='?c=InitAux&a=notificaciones'" target="_self">Notificaciones</button>
                <button class="btn btn-secondary rounded-0 col-3 mt-2" onclick="location.href='?c=InitAux&a=consulta'" target="_self">Consultar Agenda</button>
            </div>

        </div>