<?php

include( "conexao.php" );

$cpf_cnpj 			=$_POST['cpf_cnpj'];
$nome 				=$_POST['nome'];
$inscMuni			=$_POST['inscMuni'];
$inscEst			=$_POST['inscEst'];
$cep 				=$_POST['cep'];
$telefone 			=$_POST['telefone'];
$email 				=$_POST['email'];
$numero 			=$_POST['numero'];
$complemento 		=$_POST['complemento'];


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

if ($data == NULL) {

echo "CEP não existente!";

} else {

	$logradouro = ($data['logradouro']);		
	$bairro = ($data['bairro']);
	$cidade = ($data['localidade']);		
	$cep = ($data['cep']);
	$uf = ($data['uf']);

        	   

	$cep = str_replace("-", "", $cep);

    $endcli = "INSERT INTO tb_endereco (cep, logradouro, bairro, cidade, uf) VALUES ('$cep', '$logradouro', '$bairro', '$cidade', '$uf')";

    $insert_endereco = mysqli_query( $conexao, $endcli );

    $cadcli = "INSERT INTO tb_cliente (cpf_cnpj, nome, inscMuni, inscEst, cep, telefone, email, numero, complemento) VALUES ('$cpf_cnpj', '$nome', '$inscMuni', '$inscEst', '$cep', '$telefone', '$email', '$numero', '$complemento')";

    $insert_endereco = mysqli_query( $conexao, $cadcli );

    $conexao->close();

    header("Location: /ArtCar/cadastroCliente.html");
    exit;

 }



?>