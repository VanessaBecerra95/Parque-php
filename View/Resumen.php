<?php
session_start();
if (!isset($_SESSION['parque'])) {
    header("Location: ../index.php");
    exit();
}
$parque = $_SESSION['parque'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resumen del Parque Registrado</title>
    <link rel="stylesheet" href="../src/css/styleInputPark.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-transparent y-3 px-5">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="../index.php"> <img src="../src/img/forest.png" alt="forest-logo" width="30" height="30"> Parques visitados</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="./SearchPark.php">Buscador de parques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="./ListPark.php">Listar parques</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3 class="text-white">Resumen del Parque Registrado</h3>
                <div class="card">
                    <div class="card-body">
                        <p><strong>Nombre del Parque:</strong> <?php echo $parque['name']; ?></p>
                        <p><strong>Fecha de Visita:</strong> <?php echo $parque['date']; ?></p>
                        <p><strong>Valor de la Entrada:</strong> <?php echo $parque['inputValue']; ?></p>
                        <p><strong>Dirección del Parque:</strong> <?php echo $parque['address']; ?></p>
                        <p><strong>Recorrido Realizado:</strong> <?php echo $parque['tourTaken']; ?></p>
                        <p><strong>Kilómetros Recorridos:</strong> <?php echo $parque['kmTraveled']; ?></p>
                        <a href="../index.php" class="btn btn-outline-dark">Volver a la página principal</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php
session_unset();
session_destroy();
?>