<?php
include('../Model/Conexion.php');
$conexion = Conexion::conectar();

$query = "SELECT * FROM tbl_parque";
$result = mysqli_query($conexion, $query);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

mysqli_close($conexion);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultados de búsqueda</title>
    <link rel="stylesheet" href="../src/css/styleSearch.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                            <a class="nav-link text-white" href="./InputPark.php">Ingresar parque</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="./SearchPark.php">Buscador de parques</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-11 text-center">
                <h3 class="text-white">Lista de Parques Recorridos</h3>
                <?php if (mysqli_num_rows($result) > 0) : ?>
                    <div class="d-flex justify-content-center align-items-center" style="min-height: 100%;">
                        <table class="table table-bordered align-items-center">
                            <thead>
                                <tr class="table-dark">
                                    <th>Nombre del Parque</th>
                                    <th>Fecha de Visita</th>
                                    <th>Valor de Entrada</th>
                                    <th>Dirección del Parque</th>
                                    <th>Recorrido Realizado</th>
                                    <th>Kilómetros Recorridos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($parque = mysqli_fetch_assoc($result)) : ?>
                                    <tr>
                                        <td><?php echo $parque['NOMBRE_PARQUE']; ?></td>
                                        <td><?php echo $parque['FECHA_VISITA']; ?></td>
                                        <td><?php echo $parque['VALOR_ENTRADA']; ?></td>
                                        <td><?php echo $parque['DIRECCION_PARQUE']; ?></td>
                                        <td><?php echo $parque['RECORRIDO_REALIZADO']; ?></td>
                                        <td><?php echo $parque['KILOMETROS_RECORRIDO']; ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else : ?>
                    <p>No se encontraron parques registrados.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>