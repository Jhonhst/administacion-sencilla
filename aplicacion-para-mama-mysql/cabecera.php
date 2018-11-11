<?php
date_default_timezone_set('America/Lima');//para que la fecha salga con mi zona-horaria
$fecha_hoy = date("d-m-Y");
?>
<!-- cabecera -->
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administración</title>
    <link rel="stylesheet" href="librerias/bootstarp 4/css/bootstrap.min.css">
    <link rel="stylesheet" href="librerias/font-awesome/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--inicio navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary bordee">
  <a class="navbar-brand" >Administración</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Agregar <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="lista.php">Lista</a>
      </li>
      <!-- <li class="nav-item active">
        <a class="nav-link " href="dinero.php">Como vamos en dinero</a>
      </li> -->
    </ul>

  </div>
</nav>
    <!-- fin de navbar -->
<div class="container">
