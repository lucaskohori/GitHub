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

$obter_cep = mysqli_query($conexao, "SELECT cep FROM tb_endereco WHERE cep='$cep'");

if (mysqli_num_rows($obter_cep) == 0) {

	mysqli_query($conexao, "INSERT INTO tb_endereco (cep, logradouro, bairro, cidade, uf) VALUES ('$cep', '$logradouro', '$bairro', '$cidade', '$uf')");

} else {

	$endereco = "UPDATE tb_endereco SET logradouro='$logradouro', bairro='$bairro', cidade='$cidade', uf='$uf' 
	WHERE cep='$cep'";

}

	$cliente = "UPDATE tb_cliente SET cpf_cnpj='$cpf_cnpj', nome='$nome', inscMuni='$inscMuni', inscEst='$inscEst', cep='$cep', telefone='$telefone', email='$email', numero='$numero', complemento='$complemento' WHERE cpf_cnpj='$cpf_cnpj'";

	$update_cliente = mysqli_query($conexao, $cliente);

$conexao->close();

 	header("Location: /ArtCar/alterar.html");
    exit;



?>
