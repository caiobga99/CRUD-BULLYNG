<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" type="png" href="../assets/images/icone-bullying.png">
    <link rel="stylesheet" href="../assets/css/sign_in.css">
    <title>Sign In to Report Bullying</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
            <div class="container-fluid">
                <div class="image">
                    <img src="../assets/images/icone-bullying.png" alt="" class="image_navbar">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../index.php">Inicio</a>
                        </li>
                        <li class="nait
                        v-item">
                            <a class="nav-link" href="../src/sobre-nos.php">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../src/denuncias.php">Denuncie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../src/faq.php">FAQ</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="../src/signUp.php"> <button class="btn btn-primary botaosign">Cadastrar</button></a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <?php
        if (isset($_COOKIE["LOGIN-ERROR"])) {

            if ($_COOKIE["LOGIN-ERROR"] == true) {
                echo " <div class='alert alert-danger' role='alert'>
                Erro ao logar!Usuario ou senha incorreto
                </div>";
            }
        }

?>
            <form action="/CRUD-BULLYNG/src/php/logar.php" method="post">

        <div class="container__main">
            <div class="image">
                <img src="../assets/images/icone-bullying.png" class="image__icone_bullying">
            </div>
            <div class="tittleh1">
                <h2>
                    Entre em Report Bullying
                </h2>
            </div>
            <div class="box__container">
                <div>
                    <div class="label">
                        E-mail
                    </div>
                    <div class="inp">
                        <input id="nome" name="nome" type="email" class="inp" placeholder="E-mail" required>
                    </div>
                </div>
                <div>
                    <div class="label">
                        Senha
                    </div>

                    <div class="inp">
                        <input type="password" id="senha" name="senha" class="inp" placeholder="Senha" required >
                    </div>
                    <div class="botaoLogin">
                        <button class="btnteste btn" type="submit">Entrar</button>
                    </div>
                    </form>
                    </div>
                    </div>

            <div class="container__main box__button_footer">

            </div>
            
            <hr />

            <h5>

                Não tem uma conta?

            </h5>

            <div class="buttonsingup">
                <a href="./signUp.php"> <button class="buttonSignUp" type="button">Cadastre uma conta nova</button> </a>
            </div>


        </div>



    </main>

    <footer class="main_footer container_footer">

        <div class="content">
            <div class="colfooter">

                <h3 class="titleFooter"> Menu</h3>

                <ul>

                    <li><a href="../index.php" title="Página Inícial">Página Inícial</a></li>
                    <li><a href="../src/sobre-nos.php" title="Sobre a Empresa">Sobre a Empresa</a></li>
                    <li><a href="../src/denuncias.php" title="Denuncie">Denuncie</a></li>
                    <li><a href="../src/faq.php" title="Fale Conosco">Fale Conosco</a></li>

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
</body>

</html>
