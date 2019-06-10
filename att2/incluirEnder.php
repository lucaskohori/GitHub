<?php

include( "conexao.php" );

$cep 			=$_POST['cep'];
$logradouro 	=$_POST['logradouro'];
$bairro 		=$_POST['bairro'];
$cidade 		=$_POST['cidade'];


$endcli = "INSERT INTO endereco (cep, logradouro, bairro, cidade) VALUES ('$cep', '$logradouro', '$bairro', '$cidade')";
//$endereco = "INSERT INTO endereco (cep, logradouro, bairro, cidade, uf) VALUES ('$cep', '$logradouro', '$bairro', '$cidade', '$uf')";

$insert_endereco = mysqli_query( $conexao, $endcli );
//$insert_cliente = mysqli_query( $conexao, $cliente );

$conexao->close();

header("Location: /ArtCar/teste.html");
exit;
?>
