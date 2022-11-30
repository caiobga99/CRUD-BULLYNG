<?php
require_once("../php/conexao.php");

$id = $_GET["id"];



$previous = $id;
$next = 1;

$pageDown = $id -1;
$pageUp = $id + 1;

$query = $conexao->query("SELECT nome, mensagem FROM denuncia LIMIT $previous,$next");



?>
<?php
echo "<a href='acessarDenuncia.php?id=$pageDown'>previous</a>";
?>
<?php
    $dados = $query->fetch(PDO::FETCH_OBJ);
    $mensagem = $dados->mensagem;
    echo $mensagem;
 ?>
 <?php
echo "<a href='acessarDenuncia.php?id=$pageUp'>next</a>";
?>