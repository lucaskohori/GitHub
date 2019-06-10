<?php 

include( "conexao.php" );

$codOS 			    =$_POST['codOS'];
$cpf_cnpj 			=$_POST['cpf_cnpj'];
$modelo_veiculo		=$_POST['modelo_veiculo'];
$marca_veiculo		=$_POST['marca_veiculo'];
$placa 				=$_POST['placa'];
$servico 			=$_POST['servico'];
$descricao 		    =$_POST['descricao'];


 $OS = "INSERT INTO tb_ordemServico (codOS, cpf_cnpj, modelo_veiculo, marca_veiculo, placa, codServico, descricao) VALUES ('$codOS', '$cpf_cnpj', '$modelo_veiculo', '$marca_veiculo', '$placa', '$servico', '$descricao')";

 $insertOS = mysqli_query( $conexao, $OS );
	

$conexao->close();

 	header("Location: /ArtCar/ordemServicoHTML.php");
    exit;


 ?>