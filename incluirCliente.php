<?php

include( "conexao.php" );

$cpf_cnpj 			=$_POST['cpf_cnpj'];
$nome 				=$_POST['nome'];
$inscMuni			=$_POST['inscMuni'];
$inscEst			=$_POST['inscEst'];
$cep 				=$_POST['cep'];
$logradouro 		=$_POST['logradouro'];
$bairro 		    =$_POST['bairro'];
$cidade 		    =$_POST['cidade'];
$uf 		    	=$_POST['uf'];
$telefone 			=$_POST['telefone'];
$email 				=$_POST['email'];
$numero 			=$_POST['numero'];
$complemento 		=$_POST['complemento'];

   	  

	$cep = str_replace("-", "", $cep);

    $endcli = "INSERT INTO tb_endereco (cep, logradouro, bairro, cidade, uf) VALUES ('$cep', '$logradouro', '$bairro', '$cidade', '$uf')";

    $insert_endereco = mysqli_query( $conexao, $endcli );

    $cadcli = "INSERT INTO tb_cliente (cpf_cnpj, nome, inscMuni, inscEst, cep, telefone, email, numero, complemento) VALUES ('$cpf_cnpj', '$nome', '$inscMuni', '$inscEst', '$cep', '$telefone', '$email', '$numero', '$complemento')";

    $insert_endereco = mysqli_query( $conexao, $cadcli );

    $conexao->close();

    header("Location: /ArtCar/incluir.html");
    exit;


?>