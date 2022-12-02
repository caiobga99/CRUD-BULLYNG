<?php
session_start();
if (!isset($_SESSION["isAdmin"])) {
    header("location:../index.php");
} else {
    if ($_SESSION["isAdmin"] == false) {
        header("location:../index.php");
    }
}


require_once("php/conexao.php");

$idRecebido = $_GET["id"];

if (!isset($idRecebido)) {
    header('location:./painel.php?id=1');
}
//GET

$allIds = $conexao->query("SELECT id from denuncia");
$fetchAll = $allIds->fetchAll();
//QUERY FOR ALL IDS


$atualId = $fetchAll[$idRecebido - 1];
//ID FROM GET TO FIT QUERY


$query = $conexao->query("SELECT nome, mensagem, RA FROM denuncia WHERE id=$atualId[0]");
//QUERY TO GET ATUAL PAGE USING ADAPTED ID

$previous = $idRecebido - 1;

$next = $idRecebido + 1;

$ultimoId = $fetchAll[count($fetchAll) - 1];
//VARIABLES FOR RESTRICTING ACCESS TO ERROR PAGES


$fetchAllDenuncia = $query->fetchAll();


$DenunciaArray = $fetchAllDenuncia[0];

$nome = $DenunciaArray[0];

$mensagem = $DenunciaArray[1];

$RA = $DenunciaArray[2];
//VARIABLES FOR FACILITATE FRONT
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
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/denuncie.css">
    <link rel="stylesheet" href="../assets/css/painelCerto.css">
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
                            <a class="nav-link " aria-current="page" href="../index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="././sobre-nos.php">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="././denuncias.php">Denuncie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="././faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="././painel.php">Painel</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <?php
                    if (isset($_SESSION['logged'])) {
                        if ($_SESSION['logged'] == true) {
                            echo "<a href='./php/deslogar.php'><button class='btn btn-primary botaosign'>Deslogar</button></a>";
                        }
                    } else {
                        echo "<div>";
                        echo "<a href='./src/signIn.php'>  <button class='btn btn-primary botaosign'>Entrar</button> </a>  " . PHP_EOL;
                        echo "<a href='./src/signUp.php'> <button class='btn btn-primary botaosign'> Cadastrar </button></a>";
                        echo "</div>";
                    }
                    ?>

                </div>
        </nav>
    </header>
    <main>
        <main>

            <?php
            ?>
            <div class="container__container__form_icons">

                <div class="icon__arrow_left">
                <?php
                if($previous != 0){
                    echo "<a href='./painel.php?id=$previous'>";
                    echo "<img src='../assets/images/arrow-left-circle-fill.svg' class='image__flecha arrow__left' alt='Flecha esquerda'>";
                    echo "</a>";
                } else {
                    echo "<img src='../assets/images/arrow-left-circle-fill gray.svg' class='image__flecha arrow__left' alt='Flecha esquerda'>";
                }
                ?>
                </div>

                <div class="container_form">
                    <div class="box__container">
                        <?php
                           if($previous != 0){
                               echo "<a href='./painel.php?id=$previous'>";
                               echo "<img src='../assets/images/arrow-left-circle-fill.svg' class='image__flecha__cell arrow__left none_image' alt='Flecha esquerda'>";
                               echo "</a>";
                           } 
                           else {
                               echo "<img src='../assets/images/arrow-left-circle-fill gray.svg' class='image__flecha__cell arrow__left none_image' alt='Flecha esquerda'>";
                           }
                           if($atualId[0] != $ultimoId[0]){
                            echo "<a href='./painel.php?id=$next'>";
                            echo "<img src='../assets/images/arrow-right-circle-fill.svg' class='image__flecha__cell none_image' alt='Flecha Direita'>";
                            echo "</a>";
                        } 
                        else {
                            echo "<img src='../assets/images/arrow-right-circle-fill gray.svg' class='image__flecha__cell none_image' alt='Flecha Direita'>";
                    }
                    ?>
                    </div>
                    <h1 class="title_contato"><i class="icon icon-file-text-o"></i> Fale Conosco</h1>
                    <?php
                    echo "<div class='titulo__denuncia'>";
                    echo "$nome" . PHP_EOL;
                    echo "</div>";
                    echo "<div class='conteudo__denuncia'>";
                    // echo "$mensagem".PHP_EOL;
                    echo "
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, nihil, error sapiente velit veniam inventore, quia mollitia nemo cum ea temporibus. Vitae quibusdam facilis debitis atque laudantium rem nostrum molestias.
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, nihil, error sapiente velit veniam inventore, quia mollitia nemo cum ea temporibus. Vitae quibusdam facilis debitis atque laudantium rem nostrum molestias.
                ";
                    echo "<div class='RA'>";
                    echo "RA-$RA" . PHP_EOL;
                    echo "</div>";
                    echo "</div>";
                    ?>


                </div>
                <?php 
                    if($atualId[0] != $ultimoId[0]){
                        echo "<div class='icon__arrow_right'>";
                        echo "<a href='./painel.php?id=$next'>";
                        echo "<img src='../assets/images/arrow-right-circle-fill.svg' class='image__flecha arrow__right' alt='Flecha Direita'>";
                        echo "</a>";
                        echo "</div>";
                    } else {
                        echo "<div class='icon__arrow_right'>";
                        echo "<img src='../assets/images/arrow-right-circle-fill gray.svg' class='image__flecha arrow__right' alt='Flecha Direita'>";
                        echo "</div>";
                }
                ?>
                
            </div>


        </main>

    </main>



    <footer class="main_footer container_footer">

        <div class="content">
            <div class="colfooter">

                <h3 class="titleFooter"> Menu</h3>

                <ul>

                    <li><a href="../index.php" title="Página Inícial">Página Inícial</a></li>
                    <li><a href="./sobre-nos.php" title="Sobre a Empresa">Sobre a Empresa</a></li>
                    <li><a href="./denuncias.php" title="Denuncie">Denuncie</a></li>
                    <li><a href="./faq.php" title="Fale Conosco">Fale Conosco</a></li>

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
                            src="../assets/images/image-logo-git-hub.png" alt="" class="image__logo_github"> <i
                            class="icon icon-pinterest"></i> </span></a>
                <a href="https://github.com/caiobga99" class="botao"><span> <img
                            src="../assets/images/image-logo-git-hub.png" alt="" class="image__logo_github"> <i
                            class="icon icon-pinterest"></i> </span></a>
                <a href="https://github.com/caiobga99" class="botao"><span> <img
                            src="../assets/images/image-logo-git-hub.png" alt="" class="image__logo_github"> <i
                            class="icon icon-pinterest"></i> </span></a>
                <a href="https://github.com/caiobga99" class="botao"><span> <img
                            src="../assets/images/image-logo-git-hub.png" alt="" class="image__logo_github"> <i
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