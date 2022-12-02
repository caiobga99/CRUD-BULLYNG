<?php
require_once("../php/conexao.php");


$idRecebido = $_GET["id"];  

$allIds = $conexao->query("SELECT id from denuncia");
$fetchAllIds = $allIds->fetchAll();


$atualId = $fetchAllIds[$idRecebido - 1];

$query = $conexao->query("SELECT nome, mensagem, RA FROM denuncia WHERE id=$atualId[0]");    

$fetchAllDenuncia = $query->fetchAll();


$DenunciaArray = $fetchAllDenuncia[0];


$nome = $DenunciaArray[0];

$mensagem = $DenunciaArray[1];

$RA = $DenunciaArray[2];

?>
<?php
$previous = $idRecebido - 1;
if($previous != 0){
    echo "<a href='acessarDenuncia.php?id=$previous'>previous</a>";
}
?>
 <?php
$next = $idRecebido + 1;
$ultimoId = $fetchAllIds[count($fetchAllIds) - 1];
if($atualId[0] != $ultimoId[0]){
    echo "<a href='acessarDenuncia.php?id=$next'>next</a>";
}
?>