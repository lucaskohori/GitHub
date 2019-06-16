<?php 

include( "conexao.php" );

$codOS 			    =$_POST['codOS'];
$cpf_cnpj 			=$_POST['cpf_cnpj'];
$modelo_veiculo		=$_POST['modelo_veiculo'];
$marca_veiculo		=$_POST['marca_veiculo'];
$placa 				=$_POST['placa'];
$descricao 		    =$_POST['descricao'];

$servico1 			=$_POST['servico1'];
$servico2 			=$_POST['servico2'];
$servico3 			=$_POST['servico3'];
$servico4 			=$_POST['servico4'];
$servico5 			=$_POST['servico5'];


if (($servico1 == 0) and ($servico2 == 0) and ($servico3 == 0) and ($servico4 == 0) and ($servico5 == 0)) {

	echo "<strong>Escolha um Serviço!!!</strong>";

} else {

$OS = "INSERT INTO tb_ordemServico (codOS, cpf_cnpj, modelo_veiculo, marca_veiculo, placa, descricao) VALUES ('$codOS', '$cpf_cnpj', '$modelo_veiculo', '$marca_veiculo', '$placa', '$descricao')";

$insertOS = mysqli_query( $conexao, $OS );



if ($servico1 != 0) {

	$SR = "INSERT INTO tb_servicosRealizados (codOS, codServico) VALUES ('$codOS', '$servico1')";

	$insertSR = mysqli_query( $conexao, $SR );

}

if ($servico2 != 0) {

	$SR = "INSERT INTO tb_servicosRealizados (codOS, codServico) VALUES ('$codOS', '$servico2')";

	$insertSR = mysqli_query( $conexao, $SR );

}

if ($servico3 != 0) {

	$SR = "INSERT INTO tb_servicosRealizados (codOS, codServico) VALUES ('$codOS', '$servico3')";

	$insertSR = mysqli_query( $conexao, $SR );

}

if ($servico4 != 0) {

	$SR = "INSERT INTO tb_servicosRealizados (codOS, codServico) VALUES ('$codOS', '$servico4')";

	$insertSR = mysqli_query( $conexao, $SR );

}

if ($servico5 != 0) {

	$SR = "INSERT INTO tb_servicosRealizados (codOS, codServico) VALUES ('$codOS', '$servico5')";

	$insertSR = mysqli_query( $conexao, $SR );

}

$conexao->close();

header("Location: /ArtCar/index.php");
exit;

}
 ?>