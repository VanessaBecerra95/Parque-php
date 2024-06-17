<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de parques visitados</title>
    <link rel="stylesheet" href="./src/css/styleIndex.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-dark y-3 px-5">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="./index.php"> <img src="./src/img/forest.png" alt="forest-logo" width="30" height="30"> Parques visitados</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="./View/InputPark.php">Ingresar parque</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="./View/SearchPark.php">Buscador de parques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="./View/ListPark.php">Listar parques</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="carousel-heroSection" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./src/img/carrousel1.webp" class="d-block w-100" alt="parque nacional Conguillio" />
                </div>
                <div class="carousel-item">
                    <img src="./src/img/carrousel2.webp" class="d-block w-100" alt="Parque torres del Paine" />
                </div>
                <div class="carousel-item">
                    <img src="./src/img/carrousel3.webp" class="d-block w-100" alt="parque japonés santiago" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-heroSection" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel-heroSection" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <main>
        <!-- Quienes somos -->
        <section class="container-fluid pt-4" id="quienes-somos">
            <h3 class="text-center text-light pt-2 pb-4">¿QUIÉNES SOMOS?</h3>
            <div class="border-top border-secondary border-1 mx-2"></div>
            <div class="container pt-4">
                <div class="row">
                    <div class="col-12 col-md-4 pb-3">
                        <div class="icon-parrafo text-white text-center bg-info p-1">
                            <i class="fa-solid fa-plane fs-2 iconos"></i>
                        </div>
                        <p class="text-light justify-content-center d-none d-md-block pt-2">
                            Lorem ipsum dolor sit amet. consectetur adipiscing elit Donec
                            mattis ante nulla. Donec in neque consectetur, ultrices justo
                            eu. hendrerit lectus Nullam fermentum turpis et dolor euismod
                            consequat sed sed ante. Curabitur vel lacinia nisi. Sed mollis
                            condimentum rhoncus. Proin sed diam eu auctor aliquet Sed nisi
                            lorem, mollis sit amet gravida in, finibus ut diam. Nunc cursus
                            lacus ex. id interdum nibh tristique ac. Maecenas in mi blandit.
                            euismod ipsum eu. lobortis nisi. Interdum et malesuada fames ac
                            ante ipsum primis in faucibus Mauris ultricies sem eu massa
                            pellentesque. id interdum nibh luctus. Nam ac orci id neque
                            posuere alkluam.
                        </p>
                    </div>
                    <div class="col-12 col-md-4 pb-3">
                        <p class="text-light justify-content-center d-none d-md-block">
                            Lorem ipsum dolor sit amet. consectetur adipiscing elit Donec
                            mattis ante nulla. Donec in neque consectetur, ultrices justo
                            eu. hendrerit lectus Nullam fermentum turpis et dolor euismod
                            consequat sed sed ante. Curabitur vel lacinia nisi. Sed mollis
                            condimentum rhoncus. Proin sed diam eu auctor aliquet Sed nisi
                            lorem, mollis sit amet gravida in, finibus ut diam. Nunc cursus
                            lacus ex. id interdum nibh tristique ac. Maecenas in mi blandit.
                            euismod ipsum eu. lobortis nisi. Interdum et malesuada fames ac
                            ante ipsum primis in faucibus Mauris ultricies sem eu massa
                            pellentesque. id interdum nibh luctus. Nam ac orci id neque
                            posuere alkluam.
                        </p>
                        <div class="icon-parrafo text-white text-center bg-info p-1">
                            <i class="fa-solid fas fa-mountain fs-2 iconos"></i>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 pb-3">
                        <div class="icon-parrafo text-white text-center bg-info p-1">
                            <i class="fa-solid fa-route fs-2 iconos"></i>
                        </div>
                        <p class="text-light justify-content-center d-none d-md-block pt-2">
                            Lorem ipsum dolor sit amet. consectetur adipiscing elit Donec
                            mattis ante nulla. Donec in neque consectetur, ultrices justo
                            eu. hendrerit lectus Nullam fermentum turpis et dolor euismod
                            consequat sed sed ante. Curabitur vel lacinia nisi. Sed mollis
                            condimentum rhoncus. Proin sed diam eu auctor aliquet Sed nisi
                            lorem, mollis sit amet gravida in, finibus ut diam. Nunc cursus
                            lacus ex. id interdum nibh tristique ac. Maecenas in mi blandit.
                            euismod ipsum eu. lobortis nisi. Interdum et malesuada fames ac
                            ante ipsum primis in faucibus Mauris ultricies sem eu massa
                            pellentesque. id interdum nibh luctus. Nam ac orci id neque
                            posuere alkluam.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--Destacados-->
        <section class="container-fluid" id="Destacados">
            <h3 class="text-center text-light pt-2 pb-4">DESTACADOS</h3>
            <div class="border-top border-secondary border-1 mx-2 pb-5"></div>
            <div class="container">
                <div class="row align-items-center gy-2">
                    <!--primera cards-->
                    <div class="col-12 col-md-3 pb-4">
                        <div class="card h-100">
                            <img src="./src/img/card/card1.jpg" class="card-img-top" alt="lago" />
                            <div class="card-body bg-info text-white">
                                <h4 class="card-title pb-2 text-start">
                                    Lorem ipsum dolor sit amet
                                </h4>
                                <p class="card-text my-2 align-middle">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--Segunda cards-->
                    <div class="col-12 col-md-3 pb-4">
                        <div class="card h-100">
                            <img src="./src/img/card/card2.jpg" class="card-img-top" alt="paisaje" />
                            <div class="card-body bg-info text-white">
                                <h4 class="card-title pb-2 text-start">
                                    consectetur adipiscing elit
                                </h4>
                                <p class="card-text my-2 align-middle">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--Tercera cards-->
                    <div class="col-12 col-md-3 pb-4">
                        <div class="card h-100">
                            <img src="./src/img/card/card3.jpg" class="card-img-top" alt="paisaje-en-lago" />
                            <div class="card-body bg-info text-white">
                                <h4 class="card-title pb-2 text-start">
                                    sed do eiusmod tempor incididunt ut labore
                                </h4>
                                <p class="card-text my-2 align-middle texto">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--Cuarta cards-->
                    <div class="col-12 col-md-3 pb-4">
                        <div class="card h-100">
                            <img src="./src/img/card/card4.jpg" class="card-img-top" alt="Plateada" />
                            <div class="card-body bg-info text-white">
                                <h4 class="card-title pb-2 text-start">
                                    Ut enim ad minim veniam
                                </h4>
                                <p class="card-text my-2 align-middle texto">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="py-4" style="background-color: rgb(13, 202, 240)">
            <div class="container d-md-flex justify-content-around align-items-center text-white text-center">
                <h3 class="fw-light">PARQUES VISITADOS</h3>
                <div class="h2">
                    <a href="https://github.com/VanessaBecerra95" target="_blank" class="text-decoration-none text-white p-1">
                        <i class="fab fa-github-square"></i>
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank" class="text-decoration-none text-white p-1">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="text-decoration-none text-white p-1">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                    <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none text-white p-1">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                </div>
            </div>
        </footer>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="./src/js/app.js"></script>
</body>

</html>