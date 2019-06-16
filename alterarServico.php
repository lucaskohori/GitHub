<?php


include( "conexao.php" );

$codServico 			=$_POST['codServico'];
$descricao 				=$_POST['descricao'];
$vlServico			=$_POST['vlServico'];


$vlServico = str_replace(",", ".", $vlServico);

$vlServico = (float)$vlServico;

$servico = "UPDATE tb_servicos SET descricao = '$descricao', vlServico = '$vlServico' WHERE codServico='$codServico'";

$update_servico = mysqli_query($conexao, $servico);

$conexao->close();

 	header("Location: /ArtCar/servicosHTML.php");
    exit;

?>