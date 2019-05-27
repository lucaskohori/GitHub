<?php
echo '<meta charset="UTF-8">';
echo "<h1>inclusão de dados</h1>";

$cpf_cnpj 			=$_POST['cpf_cnpj'];
$nome 				=$_POST['nome'];
$inscMuni			=$_POST['inscMuni'];
$inscEst			=$_POST['inscEst'];
$cep 				=$_POST['cep'];
$telefone 			=$_POST['telefone'];
$email 				=$_POST['email'];
$numero 			=$_POST['numero'];
$complemento 		=$_POST['complemento'];


/*function validaCPF($cpf) {
 
    // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }
    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }
    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf{$c} * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf{$c} != $d) {
            return false;
        }
    }
    return true;
}

if ($cpf == false) {

	echo "CPF Inválido!";

} else {*/

$conn = new PDO("mysql:host=localhost;dbname=artcar", "root", "");

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

		if (isset($data['logradouro']) && $data['logradouro'])

		$logradouro = ($data['logradouro']);		
		$bairro = ($data['bairro']);
		$cidade = ($data['localidade']);		
		$cep = ($data['cep']);
		$uf = ($data['uf']);

	

	$cep = str_replace("-", "", $cep);

	if ($data == NULL) {

echo "CEP não existente!";

} else {

$stmt = $conn->prepare("INSERT INTO tb_endereco (cep, logradouro, bairro, cidade, uf) VALUES (:CEP, :LOGRADOURO, :BAIRRO, :CIDADE, :UF)");

$stmt->bindParam(":CEP", $cep);
$stmt->bindParam(":LOGRADOURO", $logradouro);
$stmt->bindParam(":BAIRRO", $bairro);
$stmt->bindParam(":CIDADE", $cidade);
$stmt->bindParam(":UF", $uf);

$stmt = $conn->prepare("INSERT INTO tb_cliente (cpf_cnpj, nome, inscMuni, inscEst, cep, telefone, email, numero, complemento) VALUES(:CPF_CNPJ, :NOME, :INSCMUNI, :INSCEST, :CEP, :TELEFONE, :EMAIL, :NUMERO, :COMPLEMENTO)");

$stmt->bindParam(":CPF_CNPJ", $cpf_cnpj);
$stmt->bindParam(":NOME", $nome);
$stmt->bindParam(":INSCMUNI", $inscMuni);
$stmt->bindParam(":INSCEST", $inscEst);
$stmt->bindParam(":CEP", $cep);
$stmt->bindParam(":TELEFONE", $telefone);
$stmt->bindParam(":EMAIL", $email);
$stmt->bindParam(":NUMERO", $numero);
$stmt->bindParam(":COMPLEMENTO", $complemento);

$stmt->execute();

header("Location: /ArtCar/teste.html");
exit;

	}



?>