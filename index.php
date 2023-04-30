<?php
require_once "helpers/Utils.php";
if (empty($_SESSION)) {
    Utils::Horarios();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Pico y Placa</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="views/placa/ingreso.php">Consulte su horario</a>
                <a class="nav-link" href="views/horarios/login.php">Configuración Horarios</a>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img class="img-fluid mt-3" width="50%" src="assets/img/Logo%20UIO.png" alt="">
            <h1 class="h1"><b>Pico y Placa</b></h1>
            <br>
            <div class="main d-flex justify-content-center">
                <a class="link" href="views/placa/ingreso.php">
                    Consulte su horario
                </a>
            </div>
            <br>
            <div class="main d-flex justify-content-center">
                <a class="link" href="views/horarios/login.php">Configuración Horarios</a>
            </div>
        </div>

    </div>
</div>
</body>
</html>