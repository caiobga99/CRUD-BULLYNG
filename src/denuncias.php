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
    <link rel="stylesheet" href="../assets/css/denuncie.css">
    <title>Denuncie</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container-fluid">
                <img src="../assets/images/icone-bullying.png" alt="" class="image_navbar">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../src/sobre-nos.php">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../src/denuncias.php">Denuncie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../src/faq.php">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <div class="container_form">
            <h1 class="title_contato"><i class="icon icon-file-text-o"></i> Fale Conosco</h1>
    <?php
    if (isset($_COOKIE["SUCCESS"])) {
        if ($_COOKIE["SUCCESS"] == true) {

        echo "<div class='alert alert-secondary' role='alert'>
        Denuncia Realizada com Sucesso!
      </div>";
    } 
}
    ?>
            <form method="post" action="/CRUD-BULLYNG/src/php/denunciar.php">
                <div class="style-form-input full">
                    <input type="text" name="nome" required />
                    <label><i class="icon icon-user-1"></i> Nome</label>
                </div>

                <div class="style-form-input">
                    <input type="text" name="email" required />
                    <label><i class="icon icon-mail-1"></i> E-mail</label>
                </div>

                <div class="style-form-input right">
                    <input type="number" name="RA" required />
                    <label><i class="icon icon-info-circled"></i> RA</label>
                </div>

                <div class="style-form-input full">
                    <textarea name="mensagem" required></textarea>
                    <label><i class="icon icon-comments"></i> Mensagem</label>
                </div>
                <div class="style-form-input full">
                    <input type="hidden" name="acao" value="enviar">
                    <button class="btn-submit">Enviar mensagem</button>

                </div>
            </form>
        </div>

    </main>

    <footer class="main_footer container_footer">

        <div class="content">
            <div class="colfooter">

                <h3 class="titleFooter"> Menu</h3>

                <ul>

                    <li><a href="../index.php" title="Página Inícial">Página Inícial</a></li>
                    <li><a href="../src/sobre-nos.php" title="Sobre a Empresa">Sobre a Empresa</a></li>
                    <li><a href="../src/denuncie.php" title="Denuncie">Denuncie</a></li>
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
    <script src="../src/js/scripts.js"></script>
</body>

</html>