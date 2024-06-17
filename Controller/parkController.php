<?php
session_start();
$_SESSION['mensaje'] = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $date = $_POST["date"];
    $inputValue = $_POST["input-value"];
    $address = $_POST["address"];
    $tourTaken = $_POST["tour-taken"];
    $kmTraveled = $_POST["km-traveled"];

    if (empty($name) || empty($date) || empty($inputValue) || empty($address) || empty($tourTaken) || empty($kmTraveled)) {
        $_SESSION['mensaje'] = "Por favor, llena todos los campos";
    } elseif ($inputValue < 0 || $kmTraveled < 0) {
        $_SESSION['mensaje'] = "Por favor, ingresa valores positivos";
    } else {
        include('../Model/ModelCRUDParque.php');
        $objparque = new ModelCRUDParque();
        $respuesta = $objparque->insertParque($name, $date, $inputValue, $address, $tourTaken, $kmTraveled);

        $_SESSION['parque'] = [
            'name' => $name,
            'date' => $date,
            'inputValue' => $inputValue,
            'address' => $address,
            'tourTaken' => $tourTaken,
            'kmTraveled' => $kmTraveled
        ];

        header("Location: ../View/resumen.php");
        exit();
    }
}
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
        <nav class="navbar navbar-expand-xl bg-transparent y-3 px-5">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="../index.php"> <img src="../src/img/forest.png" alt="forest-logo" width="30" height="30"> Parques visitados</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../View/InputPark.php">Ingresar parque</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../View/SearchPark.php">Buscar Parque</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../View/ListPark.php">Listar parques</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php if (!empty($_SESSION['mensaje'])) : ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="alert alert-warning text-center">
                        <?php echo $_SESSION['mensaje']; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        unset($_SESSION['mensaje']);
        ?>
    <?php endif; ?>
</body>

</html>