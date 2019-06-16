<?php

include( "conexao.php" );

$codServico 		=$_POST['codServico'];
$vlServico 			=$_POST['vlServico'];
$descricao			=$_POST['descricao'];

$vlServico = str_replace(",", ".", $vlServico);

$vlServico = (float)$vlServico;


    $servico = "INSERT INTO tb_servicos (codServico, vlServico, descricao) VALUES ('$codServico', '$vlServico', '$descricao')";

    $insert_servico = mysqli_query( $conexao, $servico );

    $conexao->close();

    header("Location: /ArtCar/servicosHTML.php");
    exit;


?>