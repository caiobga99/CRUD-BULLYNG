<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" type="png/" href="./src/images/icone-bullying.png">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>Report Bullying</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
            <div class="container-fluid">
                <div class="image">
                    <img src="./assets/images/icone-bullying.png" alt="" class="image_navbar">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./src/sobre-nos.php">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./src/denuncias.php">Denuncie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./src/faq.php">FAQ</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <?php
                if (isset($_SESSION['logged'])) {
                    if ($_SESSION['logged'] == true) {
                        echo "<a href='./src/php/deslogar.php'><button class='btn btn-primary botaosign'>Deslogar</button></a>";
                    }
                } 
                else {
                   
                    echo "<a href='./src/signIn.php'>  <button class='btn btn-primary botaosign'>Entrar</button> </a>  ";
                    echo "<a href='./src/signUp.php'> <button class='btn btn-primary botaosign'> Cadastrar </button></a>";
                }
                ?>

                </div>
        </nav>
    </header>

    <main>
        <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/images/bullying-carousel.jpg" class="d-block w-100 carousel__image" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/bullying-nao-carousel.png" class="d-block w-100 carousel__image"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/stop-bulling-carousel.png" class="d-block w-100 carousel__image"
                        alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container card__container">
            <div class="card" style="width: 18rem;">
                <img src="./assets/images/diga-nao-bullying.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Bullying é uma palavra de origem inglesa que designa atos de agressão e
                        intimidação repetitivos contra um indivíduo que não é aceito por um grupo, geralmente na escola.
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="./assets/images/bullying.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">A prática do bullying também chamado de intimidação sistemática, intimidação
                        vexatória, violência escolar e bulimento consiste em um conjunto de violências que se repetem
                        por algum período.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="./assets/images/placa-bullying.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Bullying é uma palavra de origem inglesa que designa atos de agressão e
                        intimidação repetitivos contra um indivíduo que não é aceito por um grupo, geralmente na escola.
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id error, quas impedit earum eius a quisquam, in ipsam,
        non beatae vero exercitationem perferendis est rem voluptatibus. Tempore veniam voluptatum dicta.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id error, quas impedit earum eius a quisquam, in ipsam,
        non beatae vero exercitationem perferendis est rem voluptatibus. Tempore veniam voluptatum dicta.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id error, quas impedit earum eius a quisquam, in ipsam,
        non beatae vero exercitationem perferendis est rem voluptatibus. Tempore veniam voluptatum dicta.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id error, quas impedit earum eius a quisquam, in ipsam,
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id error, quas impedit earum eius a quisquam, in ipsam,
        non beatae vero exercitationem perferendis est rem voluptatibus. Tempore veniam voluptatum dicta.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id error, quas impedit earum eius a quisquam, in ipsam,
        non beatae vero exercitationem perferendis est rem voluptatibus. Tempore veniam voluptatum dicta.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id error, quas impedit earum eius a quisquam, in ipsam,
        non beatae vero exercitationem perferendis est rem voluptatibus. Tempore veniam voluptatum dicta.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id error, quas impedit earum eius a quisquam, in ipsam,
        non beatae vero exercitationem perferendis est rem voluptatibus. Tempore veniam voluptatum dicta.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id error, quas impedit earum eius a quisquam, in ipsam,
        non beatae vero exercitationem perferendis est rem voluptatibus. Tempore veniam voluptatum dicta.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id error, quas impedit earum eius a quisquam, in ipsam,
        non beatae vero exercitationem perferendis est rem voluptatibus. Tempore veniam voluptatum dicta.
    </main>

    <footer class="main_footer container_footer">

        <div class="content">
            <div class="colfooter">

                <h3 class="titleFooter"> Menu</h3>

                <ul>

                    <li><a href="./index.php" title="Página Inícial">Página Inícial</a></li>
                    <li><a href="./src/sobre-nos.php" title="Sobre a Empresa">Sobre a Empresa</a></li>
                    <li><a href="./src/denuncias.php" title="Denuncie">Denuncie</a></li>
                    <li><a href="./src/faq.php" title="Fale Conosco">Fale Conosco</a></li>

                </ul>
            </div>
            <!--Col Footer 1-->
            <div class="colfooter">

                <h3 class="titleFooter"> Contato</h3>
                <p><i class="icon icon-mail"></i> contato@seusite.com.br</p>
                <p><i class="icon icon-phone"></i> 21 90000-0000</p>
                <p><i class="icon icon-whatsapp"></i> 21 90000-0000</p>
            </div>
            <!--Col Footer 2-->
            <div class="colfooter">
                <h3 class="titleFooter"> Redes Sociais</h3>
                <a href="https://github.com/caiobga99" class="botao"><span> <img
                            src="./assets/images/image-logo-git-hub.png" alt="" class="image__logo_github"> <i
                            class="icon icon-pinterest"></i> </span></a>
                <a href="https://github.com/caiobga99" class="botao"><span> <img
                            src="./assets/images/image-logo-git-hub.png" alt="" class="image__logo_github"> <i
                            class="icon icon-pinterest"></i> </span></a>
                <a href="https://github.com/caiobga99" class="botao"><span> <img
                            src="./assets/images/image-logo-git-hub.png" alt="" class="image__logo_github"> <i
                            class="icon icon-pinterest"></i> </span></a>
                <a href="https://github.com/caiobga99" class="botao"><span> <img
                            src="./assets/images/image-logo-git-hub.png" alt="" class="image__logo_github"> <i
                            class="icon icon-pinterest"></i> </span></a>
            </div>
            <!--Col Footer 3-->
            <div class="clear"></div>

        </div>
        <!--Contant-->
        <div class="main_footer_copy">

            <p class="m-b-footer"> Report Bullying - 2022, todos os direitos reservados.</p>
            <p class="by"><i class="icon icon-heart-3"></i> Desenvolvido por: <a href="https://github.com/caiobga99"
                    title="Seu nome">Caio</a></p>

        </div>
    </footer>









    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="./src/js/scripts.js"></script>
</body>

</html>