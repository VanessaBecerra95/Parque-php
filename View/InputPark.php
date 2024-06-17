<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de parques visitados</title>
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
                <h3 class="text-white">Registro de parques visitados</h3>
                <p class="text-white fst-italic">Ingresa los datos del parque<br> para obtener una mejor experiencia</p>
                <div class="card">
                    <form action="../Controller/parkController.php" method="post">
                        <div class="row justify-content-between mb-3">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="name" class="form-label">Nombre del parque</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="date" class="form-label">Fecha de visita</label>
                                <input type="date" class="form-control" id="date" name="date">
                            </div>
                        </div>
                        <div class="row justify-content-between mb-3">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="input-value" class="form-label">Valor de entrada</label>
                                <input type="number" class="form-control" id="input-value" name="input-value">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="address" class="form-label">Dirección del parque</label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                        </div>
                        <div class="row justify-content-between mb-3">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="tour-taken" class="form-label">Recorrido realizado</label>
                                <input type="text" class="form-control" id="tour-taken" name="tour-taken">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="km-traveled" class="form-label">Kilómetros recorrido</label>
                                <input type="number" class="form-control" name="km-traveled" id="km-traveled">
                            </div>
                        </div>
                        <div class="row justify-content-center pt-4">
                            <div class="form-group col-sm-6">
                                <button type="submit" class="btn btn-outline-dark">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>