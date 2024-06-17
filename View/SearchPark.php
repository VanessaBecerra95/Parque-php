<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de parques visitados</title>
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
                            <a class="nav-link text-white" href="./ListPark.php">Listar parques</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <form action="../Controller/searchController.php" method="post">
                    <div class="search">
                        <i class="fa fa-search"></i>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Ingresa el nombre del parque">
                        <button class="btn btn btn-outline-dark">Buscar</button>
                    </div>
                    <?php if (!empty($men)) { ?>
                        <div class="alert alert-warning mt-3"><?php echo $men; ?></div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>