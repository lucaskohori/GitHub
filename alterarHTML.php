<?php 

include( "conexao.php" );

$cpf_cnpj = $_POST["cpf_cnpj"];

$sql="SELECT tb_cliente.nome, tb_cliente.inscMuni, tb_cliente.inscEst, tb_cliente.telefone, 
tb_cliente.email, tb_cliente.cep, tb_endereco.logradouro, tb_cliente.numero, tb_cliente.complemento, 
tb_endereco.bairro, tb_endereco.cidade, tb_endereco.uf 
FROM tb_cliente, tb_endereco 
WHERE tb_cliente.cpf_cnpj = '$cpf_cnpj' AND tb_cliente.cep = tb_endereco.cep";

$result=mysqli_query($conexao, $sql);

$row=mysqli_fetch_assoc($result);

$cpf_cnpj = $_POST["cpf_cnpj"];

//foreach ($result as $row) {
	
	//echo $row['telefone']."</br>";
	//echo $row["email"]."</br>";

//}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Text</title>
<meta charset="utf-8" http-equiv="Content-Type" content="text/html" />
<link rel="stylesheet" href="/ArtCar/BuiltIn/StarterPages/mm_training.css" type="text/css" />
</head>
<body bgcolor="#64748B">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr bgcolor="#26354A">
	<td width="15" nowrap="nowrap"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="15" height="1" border="0" /></td>
	<td height="70" colspan="2" class="logo" nowrap="nowrap">Alteração de Cadastro  <span class="tagline"></td>
	<td width="458">&nbsp;</td>
	</tr>

	<tr bgcolor="#FF6600">
	<td colspan="4"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="1" height="4" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="4"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#FFCC00">
	<td width="15" nowrap="nowrap">&nbsp;</td>
	<td colspan="2" height="24">
	<table border="0" cellpadding="0" cellspacing="0" id="navigation">
        <tr>
          <td align="center" nowrap="NOWRAP" background="index.php" class="navText"><a href="index.php">HOME</a></td>
        </tr>
      </table>	</td>
	<td width="458">&nbsp;</td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="4"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#FF6600">
	<td colspan="4"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="1" height="4" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="4"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td width="15" valign="top">&nbsp;</td>
	<td width="198"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="35" height="1" border="0" /></td>
	<td width="612" valign="top"><p>&nbsp;</p>
	  
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	  <form id="form1" name="form1" method="post" action="alterar.php">
      
      <label for="cpf_cnpj">CPF/CNPJ
	  <input id="cpf_cnpj" name="cpf_cnpj" type="text" value="<?php echo $cpf_cnpj ?>" readonly="readonly"/>	      
      </label>
	  	  <br />
	      <br />
	  <label for="nome">Nome
	  <input id="nome" name="nome" type="text" value="<?php echo $row['nome'] ?>" />
	  </label>
	  	  <br />
	      <br />
	  
	  <label for="inscMuni">Inscrição Municipal
	  <input id="inscMuni" name="inscMuni" type="text" value="<?php echo $row['inscMuni'] ?>" />
	  </label>
	  	  <br />
	      <br />
	  
	  <label for="inscEst">Inscrição Estadual
	  <input id="inscEst" name="inscEst" type="text" value="<?php echo $row['inscEst'] ?>" />
	  </label>
	  	  <br />
	      <br />
	  
	  <label for="telefone">Telefone
	  <input id="telefone" name="telefone" type="text" value="<?php echo $row['telefone'] ?>" />
	  </label>
	  	  <br />
	      <br />

	  <label for="email">Email
	  <input id="email" name="email" type="email" value="<?php echo $row['email'] ?>" />
	  </label>
	  	  <br />
	      <br />

	  <label for="cep">CEP
	  <input id="cep" name="cep" type="text" value="<?php echo $row['cep'] ?>" required  />
	  </label>
	  	  <br />
	      <br />

	  <label for="logradouro">Rua
	  <input id="logradouro" name="logradouro" type="text" value="<?php echo $row['logradouro'] ?>" required />
	  </label>
	  	  <br />
	      <br />

	  <label for="numero">Número
	  <input id="numero" name="numero" type="text" value="<?php echo $row['numero'] ?>" />
	  </label>
	  	  <br />
	      <br />

	  <label for="complemento">Complemento
	  <input id="complemento" name="complemento" type="text" value="<?php echo $row['complemento'] ?>" />
	  </label>
	  	  <br />
	      <br />

	  <label for="bairro">Bairro
	  <input id="bairro" name="bairro" type="text" value="<?php echo $row['bairro'] ?>" required />
	  </label>
	  	  <br />
	      <br />

	  <label for="cidade">Cidade
	  <input id="cidade" name="cidade" type="text" value="<?php echo $row['cidade'] ?>" required />
	  </label>
	  	  <br />
	      <br />

	  <label for="uf">Estado
	  <input id="uf" name="uf" type="text" value="<?php echo $row['uf'] ?>" required />
	  </label>
	  	  <br />
	      <br />
	    <p>
          <input type="submit" name="Submit" value="Alterar" />
        </p>
        </p>
	    <p>&nbsp;</p>
        <p>&nbsp;  </p>
	  </form>
      </td>
	<td>&nbsp;</td>
	</tr>

	<tr>
	<td width="15">&nbsp;<br />
	&nbsp;<br />	</td>
    <td width="198">&nbsp;</td>
    <td width="612">&nbsp;</td>
	<td width="458">&nbsp;</td>
  </tr>
</table>

<script type="text/javascript">
		$("#cep").focusout(function(){
			//Início do Comando AJAX
			$.ajax({
				//O campo URL diz o caminho de onde virá os dados
				//É importante concatenar o valor digitado no CEP
				url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
				//Aqui você deve preencher o tipo de dados que será lido,
				//no caso, estamos lendo JSON.
				dataType: 'json',
				//SUCESS é referente a função que será executada caso
				//ele consiga ler a fonte de dados com sucesso.
				//O parâmetro dentro da função se refere ao nome da variável
				//que você vai dar para ler esse objeto.
				success: function(resposta){
					//Agora basta definir os valores que você deseja preencher
					//automaticamente nos campos acima.
					$("#logradouro").val(resposta.logradouro);
					$("#complemento").val(resposta.complemento);
					$("#bairro").val(resposta.bairro);
					$("#cidade").val(resposta.localidade);
					$("#uf").val(resposta.uf);
					//Vamos incluir para que o Número seja focado automaticamente
					//melhorando a experiência do usuário
					$("#numero").focus();
				}
			});
		});
	</script>

</body>
</html>
