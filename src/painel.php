<?php
$idC = $_GET["id"];
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


$query = $conexao->query("SELECT nome, mensagem, RA, email FROM denuncia WHERE id=$atualId[0]");
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

$email = $DenunciaArray[3];
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
    <link rel="stylesheet" href="../assets/css/painel.css">
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
                        <li class="nav-item">
                            <a class="nav-link" href="././lista.php">Lista</a>
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
                    echo "$mensagem".PHP_EOL;
                    echo "<div class='RA'>";
                    echo "RA-$RA" . PHP_EOL;
                    echo "</div>";
                    echo "</div>";
                    ?>

<div class="container__container_footer text-center">
                    <span class="span__icons">
          <a href="./lista.php">  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg> </a>
            </span>
            <a href="./php/deletar.php?id=<?php echo $idC?>"> <span class="span__icons">
<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
  <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
</svg>
</a>
            </span>
            <a href="./email.php?RA=<?=$RA?>&email=<?=$email?>"> <span class="span__icons">
<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
  <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
  <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
</svg>
</a>
            </span>
</div>
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