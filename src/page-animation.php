<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="png/" href="./src/images/icone-bullying.png">
    <link rel="stylesheet"  href="../assets/css/teste.css">
    
    <title>Report Bullying</title>
</head>

<body>
    <div class="animation01">
        <div class="line_content line_content01">
            <div class="line_wrapper line_wrapper01">
                <div class="line01"></div>
                <div class="line02"></div>
            </div>
        </div>
        <div class="line_content line_content02">
            <div class="line_wrapper line_wrapper02">
                <div class="line02"></div>
                <div class="line01"></div>
            </div>
        </div>
    </div>
    <div class="animation02">
        <div class="square">
            <span class="square_item square_item01"></span>
            <span class="square_item square_item02"></span>
            <span class="square_item square_item03"></span>
            <span class="square_item square_item04"></span>
            <span class="square_item square_item05"></span>
            <span class="square_item square_item06"></span>
            <span class="square_item square_item07"></span>
            <span class="square_item square_item08"></span>
            <span class="circle_item01"></span>
            <span class="circle_item02"></span>
            <span class="circle_item03"></span>
            <span class="circle_item04"></span>
            <span class="circle_item05"></span>
            <span class="circle_item06"></span>
            <span class="circle_item01_1"></span>
            <span class="circle_item02_2"></span>
            <span class="circle_item03_3"></span>
            <span class="circle_item04_4"></span>
            <span class="circle_item05_5"></span>
            <span class="circle_item06_6"></span>
        </div>
    </div>
    <div class="animation03">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="animation04">
        <div class="name_plate"></div>
        <div class="name">ANA RITA</div>
    </div>
    
</body>
</html> 
<?php 
$paginaAtt = $_GET["page"];
switch ($paginaAtt) {
    case 'index':
        echo "<script>setTimeout(() => {
            location.href = '../index.php';
        }, 7000);
            </script>";
        break;
         case 'sobre-nos':
        echo "<script>setTimeout(() => {
            location.href = './sobre-nos.php';
        }, 7000);
            </script>";
        break;
         case 'denuncias':
        echo "<script>setTimeout(() => {
            location.href = './denuncias.php';
        }, 7000);
            </script>";
        break;
         case 'faq':
        echo "<script>setTimeout(() => {
            location.href = './faq.php';
        }, 7000);
            </script>";
        break;
    default:
    echo "<script>setTimeout(() => {
        location.href = '../index.php';
    }, 7000);
        </script>";
        break;
}