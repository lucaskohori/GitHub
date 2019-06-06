<?php
include( "conexao.php" );

$cpf_cnpj		=$_POST['cpf_cnpj'];
$nome 			=$_POST['nome'];
$inscMuni		=$_POST['inscMuni'];
$inscEst		=$_POST['inscEst'];
$cep 			=$_POST['cep'];
$telefone		=$_POST['telefone'];
$email 			=$_POST['email'];
$numero 		=$_POST['numero'];
$complemento 	=$_POST['complemento'];

function getCEP(int $cep) {		

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://viacep.com.br/ws/$cep/json/");

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		$data = json_decode(curl_exec($ch), true);

		curl_close($ch);

		return $data;

}

$data = getCEP($cep);
//var_dump($data);



//echo "CEP não existente!";



	$logradouro = ($data['logradouro']);		
	$bairro = ($data['bairro']);
	$cidade = ($data['localidade']);		
	$cep = ($data['cep']);
	$uf = ($data['uf']);


$cep = str_replace("-", "", $cep);

$obter_cep = mysqli_query($conexao, "SELECT cep FROM tb_endereco WHERE cep='$cep'");

if (mysqli_num_rows($obter_cep) == 0) {

	mysqli_query($conexao, "INSERT INTO endereco (cep, logradouro, bairro, cidade, uf) VALUES ('$cep', '$logradouro', '$bairro', '$cidade', '$uf')");

}

$obter_cpf = mysqli_query($conexao, "SELECT cpf_cnpj FROM tb_cliente WHERE cep='$cep'");

if (mysqli_num_rows($obter_cpf) == 0) {

	header("Location: /ArtCar/cadastroCliente.html");
	exit;

} else {

	$cliente = "UPDATE tb_cliente SET cpf_cnpj='$cpf_cnpj', nome='$nome', inscMuni='$inscMuni', inscEst='$inscEst', cep='$cep', telefone='$telefone', email='$email', numero='$numero', complemento='$complemento' WHERE cpf_cnpj='$cpf_cnpj'";

	$update_cliente = mysqli_query($conexao, $cliente);

}

$conexao->close();


/*if (mysqli_num_rows($obter_cep) == 0){
	mysqli_query($conexao, "INSERT INTO endereco (cep, logradouro, bairro, cidade, uf) VALUES ('$cep', '$logradouro', '$bairro', '$cidade', '$uf')");
	
} else {
	$endereco = "UPDATE tb_endereco SET logradouro='$logradouro', bairro='$bairro', cidade='$cidade', uf='$uf' WHERE cep='$cep'";
	$update_endereco = mysqli_query($conexao, $endereco);
}
$cliente = "UPDATE tb_cliente SET cpf_cnpj='$cpf_cnpj', nome='$nome', inscMuni='$inscMuni', inscEst='$inscEst', cep='$cep', telefone='$telefone', email='$email', numero='$numero', complemento='$complemento' WHERE cpf_cnpj='$cpf_cnpj'";

$update_cliente = mysqli_query($conexao, $cliente);

$conexao->close();

if ( $update_cliente ) {
	echo "<script>window.location='../consultar_cliente.php';alert('Cliente alterado com sucesso!');</script>";
} else {
	echo "<script>window.location='../consultar_cliente.php';alert('Cliente não alterado! Ocorreu algum erro!');</script>";
}

}elseif( $_POST['atualizar_excluir'] == 'Excluir' ){
	
	$nr_celular =$_POST['nr_celular'];

	include( "conexao.php" );
	
	$delete_cliente = mysqli_query($conexao, "DELETE FROM cliente WHERE nr_celular='$nr_celular'");
	if ( $delete_cliente ) {
	echo "<script>window.location='../consultar_cliente.php';alert('Cliente excluido com sucesso!');</script>";
	} else {
		echo "<script>window.location='../consultar_cliente.php';alert('Cliente não excluido! Ocorreu algum erro!');</script>";
}
}*/
?>
