<?php session_start() ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/style.css">
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
                <a class="nav-link active" aria-current="page" href="../../index.php">Home</a>
                <a class="nav-link" href="../../views/placa/ingreso.php">Consulte su horario</a>
                <a class="nav-link" href="../../helpers/logout.php">Cerra Sesión</a>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img class="img-fluid mt-3" width="50%" src="../../assets/img/Logo%20UIO.png" alt="">
            <h1 class="h1"><b>Pico y Placa</b></h1>
            <br>
            <?php if (isset($_SESSION['login']) && $_SESSION['login']):?>
            <?php $_SESSION['mantener_sesion'] = true; ?>
                <h1>Bienvenido</h1>
            <div class="col-md-3 mx-auto">
                <form action="../../controller/AdminControllerHorarios.php" method="post">
                    <div class="mb-3 form-check">
                        <label class="form-label h4">Placa 1-2</label><br>
                        <label class="form-label">Hora Inicio: </label><input type="text" class="form-control" name="horaInicio1_2" value=<?= $_SESSION['horaInici_12'];?> required>
                        <label for="">Hora Fin: </label><input type="text" class="form-control" name="horaFin1_2" value=<?= $_SESSION['horaFin_12'];?> required>
                    </div>
                    <div class="mb-3 form-check">
                        <label class="form-label h4">Placa 3-4</label><br>
                        <label class="form-label">Hora Inicio: </label><input type="text" class="form-control" name="horaInicio3_4" value=<?= $_SESSION['horaInici_34'];?> required>
                        <label for="">Hora Fin: </label><input type="text" class="form-control" name="horaFin3_4" value=<?= $_SESSION['horaFin_12'];?> required>
                    </div>
                    <div class="mb-3 form-check">
                        <label class="form-label h4">Placa 5-6</label><br>
                        <label class="form-label">Hora Inicio: </label><input type="text" class="form-control" name="horaInicio5_6" value=<?= $_SESSION['horaInici_56'];?> required>
                        <label for="">Hora Fin: </label><input type="text" class="form-control" name="horaFin5_6" value=<?= $_SESSION['horaFin_56'];?> required>
                    </div>
                    <div class="mb-3 form-check">
                        <label class="form-label h4">Placa 7-8</label><br>
                        <label class="form-label">Hora Inicio: </label><input type="text" class="form-control" name="horaInicio7_8" value=<?= $_SESSION['horaInici_78'];?> required>
                        <label for="">Hora Fin: </label><input type="text" class="form-control" name="horaFin7_8" value=<?= $_SESSION['horaFin_78'];?> required>
                    </div>
                    <div class="mb-3 form-check">
                        <label class="form-label h4">Placa 9-0</label><br>
                        <label class="form-label">Hora Inicio: </label><input type="text" class="form-control" name="horaInicio9_0" value=<?= $_SESSION['horaInici_90'];?> required>
                        <label for="">Hora Fin: </label><input type="text" class="form-control" name="horaFin9_0" value=<?= $_SESSION['horaFin_90'];?> required>
                    </div>
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </form>
            </div>
            <?php else:?>
                <h1>Usuario o clave incorrectos</h1>
            <?php endif;?>
            <br>
        </div>

    </div>
</div>
</body>
</html>

